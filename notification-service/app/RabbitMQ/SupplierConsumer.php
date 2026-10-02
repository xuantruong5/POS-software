<?php

namespace App\RabbitMQ;

use App\Models\Notification;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class SupplierConsumer
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

        // Exchange
        $channel->exchange_declare(
            'supplier_events',
            'topic',
            false,
            true,
            false
        );

        // Queue chung cho Supplier
        $channel->queue_declare(
            'notification_supplier',
            false,
            true,
            false,
            false
        );

        // Nhận cả created và updated
        $channel->queue_bind(
            'notification_supplier',
            'supplier_events',
            'supplier.created'
        );

        $channel->queue_bind(
            'notification_supplier',
            'supplier_events',
            'supplier.updated'
        );
        $channel->queue_bind(
            'notification_supplier',
            'supplier_events',
            'supplier.deleted'
        );

        echo "Notification Service đang chờ Supplier events...\n";

        $callback = function ($message) {

            $data = json_decode(
                $message->body,
                true
            );

            // Lấy loại event
            $event = $message->get('routing_key');

            echo "Nhận event {$event}: {$data['id_supplier']}\n";

            if ($event === 'supplier.created') {

                Notification::create([
                    'id_user' => $data['id_user'],
                    'id_store' => $data['id_store'],
                    'id_branch' => $data['id_branch'] ?? null,
                    'loai_thong_bao' => 'supplier_created',
                    'tieu_de' => 'Nhà cung cấp mới',
                    'noi_dung' => 'Nhà cung cấp "' 
                        . $data['ten_nha_cung_cap'] 
                        . '" đã được thêm thành công.',
                    'id_reference' => $data['id_supplier'],
                    'da_doc' => false,
                ]);

                echo "Đã tạo notification thêm nhà cung cấp.\n";
            }

            if ($event === 'supplier.updated') {

                Notification::create([
                    'id_user' => $data['id_user'],
                    'id_store' => $data['id_store'],
                    'id_branch' => $data['id_branch'] ?? null,
                    'loai_thong_bao' => 'supplier_updated',
                    'tieu_de' => 'Cập nhật nhà cung cấp',
                    'noi_dung' => 'Nhà cung cấp "' 
                        . $data['ten_nha_cung_cap'] 
                        . '" đã được cập nhật.',
                    'id_reference' => $data['id_supplier'],
                    'da_doc' => false,
                ]);

                echo "Đã tạo notification cập nhật nhà cung cấp.\n";
            }
            // Supplier deleted
            if ($event === 'supplier.deleted') {

                Notification::create([
                    'id_user' => $data['id_user'],
                    'id_store' => $data['id_store'],
                    'id_branch' => $data['id_branch'] ?? null,
                    'loai_thong_bao' => 'supplier_deleted',
                    'tieu_de' => 'Xóa nhà cung cấp',
                    'noi_dung' => 'Nhà cung cấp "'
                        . $data['ten_nha_cung_cap']
                        . '" đã được xóa.',
                    'id_reference' => $data['id_supplier'],
                    'da_doc' => false,
                ]);

                echo "Đã xóa nhà cung cấp: {$data['ten_nha_cung_cap']}\n";
            }

            $message->ack();
        };

        $channel->basic_qos(
            null,
            1,
            null
        );

        $channel->basic_consume(
            'notification_supplier',
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