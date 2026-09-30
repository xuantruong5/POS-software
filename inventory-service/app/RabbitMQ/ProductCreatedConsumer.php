<?php

namespace App\RabbitMQ;

use App\Models\Inventory;
use App\Models\InventoryTransaction;
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
            'inventory_product_created',
            false,
            true,
            false,
            false
        );

        $channel->queue_bind(
            'inventory_product_created',
            'product_events',
            'product.created'
        );

        echo "Inventory Service đang chờ ProductCreated...\n";

        $callback = function ($message) {

            $data = json_decode(
                $message->body,
                true
            );

            echo "Nhận ProductCreated: {$data['id_product']}\n";
            $soLuongTon = $data['so_luong_ton'] ?? 0;
            $tonKhoToiThieu = $data['ton_kho_toi_thieu'] ?? 0;
            $tonKhoToiDa = $data['ton_kho_toi_da'] ?? 0;

            $inventory = Inventory::create([
                'id_branch' => $data['id_branch'],
                'id_product' => $data['id_product'],
                'so_luong_ton' => $soLuongTon,
                'ton_kho_toi_thieu' => $tonKhoToiThieu,
                'ton_kho_toi_da' => $tonKhoToiDa,
                'id_location' => $data['id_location'] ?? null,
            ]);

            // Tạo lịch sử giao dịch kho
            InventoryTransaction::create([
                'id_inventory' => $inventory->id,
                'loai_giao_dich' => 'khoi_tao',
                'so_luong' => $soLuongTon,
                'so_luong_truoc' => 0,
                'so_luong_sau' => $soLuongTon,
                'reference_type' => 'product',
                'id_reference' => $data['id_product'],
                'ghi_chu' => 'Khởi tạo tồn kho khi tạo sản phẩm',
            ]);

            echo "Đã tạo inventory cho product {$data['id_product']}\n";
            echo "Đã tạo transaction khởi tạo kho\n";

            $message->ack();
        };

        $channel->basic_qos(
            null,
            1,
            null
        );

        $channel->basic_consume(
            'inventory_product_created',
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