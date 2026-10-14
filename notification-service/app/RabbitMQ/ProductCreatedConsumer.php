<?php

namespace App\RabbitMQ;
use App\Models\Notification;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class ProductCreatedConsumer
{
    public function consume(): void
    {
        $connection = new AMQPStreamConnection(
            config('services.rabbitmq.host'),
            config('services.rabbitmq.port'),
            config('services.rabbitmq.user'),
            config('services.rabbitmq.password')
        );

        $channel = $connection->channel();

        $channel->exchange_declare(
            'product_events',
            'topic',
            false,
            true,
            false
        );

        $channel->queue_declare(
            'notification_product_created',
            false,
            true,
            false,
            false
        );

        $channel->queue_bind(
            'notification_product_created',
            'product_events',
            'product.created'
        );

        echo "Notification Service đang chờ ProductCreated...\n";

        $callback = function ($message) {

            $data = json_decode(
                $message->body,
                true
            );

            echo "Nhận ProductCreated: {$data['id_product']}\n";

            Notification::create([
                'id_store' => $data['id_store'],
                'id_branch' => $data['id_branch'] ?? null,
                'loai_thong_bao' => 'product_created',
                'tieu_de' => 'Sản phẩm mới',
                'noi_dung' => 'Sản phẩm "' . $data['ten_san_pham'] . '" đã được thêm vào cửa hàng.',
                'id_reference' => $data['id_product'],
                'da_doc' => false,
            ]);

            echo "Đã xử lý notification cho sản phẩm: "
                . $data['ten_san_pham']
                . "\n";

            $message->ack();
        };

        $channel->basic_qos(
            null,
            1,
            null
        );

        $channel->basic_consume(
            'notification_product_created',
            '',
            false,
            false,
            false,
            false,
            $callback
        );

        while (count($channel->callbacks)) {
            $channel->wait();
        }
    }
}