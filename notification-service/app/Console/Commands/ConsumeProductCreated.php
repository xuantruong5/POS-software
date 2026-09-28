<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\RabbitMQ\ProductCreatedConsumer;
class ConsumeProductCreated extends Command
{
    protected $signature = 'rabbitmq:product-created';
    protected $description = 'Consume ProductCreated events';
    public function handle()
    {
        $consumer = new ProductCreatedConsumer();

        $consumer->consume();

        return Command::SUCCESS;
    }
}
