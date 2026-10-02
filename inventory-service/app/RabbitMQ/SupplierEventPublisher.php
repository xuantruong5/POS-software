<?php

namespace App\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class SupplierEventPublisher
{
    public function publishSupplierCreated(array $data): void
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

        $message = new AMQPMessage(
            json_encode($data),
            [
                'content_type' => 'application/json',
                'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT,
            ]
        );

        $channel->basic_publish(
            $message,
            'supplier_events',
            'supplier.created'
        );

        $channel->close();
        $connection->close();
    }
    public function publishSupplierUpdated(array $data): void
    {
        $connection = new AMQPStreamConnection(
            config('services.rabbitmq.host'),
            config('services.rabbitmq.port'),
            config('services.rabbitmq.user'),
            config('services.rabbitmq.password')
        );

        $channel = $connection->channel();

        $channel->exchange_declare(
            'supplier_events',
            'topic',
            false,
            true,
            false
        );

        $message = new AMQPMessage(
            json_encode($data),
            [
                'content_type' => 'application/json',
                'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT,
            ]
        );

        $channel->basic_publish(
            $message,
            'supplier_events',
            'supplier.updated'
        );

        $channel->close();
        $connection->close();
    }

    public function publishSupplierDeleted(array $data): void
    {
        $connection = new AMQPStreamConnection(
            config('services.rabbitmq.host'),
            config('services.rabbitmq.port'),
            config('services.rabbitmq.user'),
            config('services.rabbitmq.password')
        );

        $channel = $connection->channel();

        $channel->exchange_declare(
            'supplier_events',
            'topic',
            false,
            true,
            false
        );

        $message = new AMQPMessage(
            json_encode($data),
            [
                'content_type' => 'application/json',
                'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT,
            ]
        );

        $channel->basic_publish(
            $message,
            'supplier_events',
            'supplier.deleted'
        );

        $channel->close();
        $connection->close();
    }


}