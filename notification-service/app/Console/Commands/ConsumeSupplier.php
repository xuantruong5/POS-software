<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\RabbitMQ\SupplierConsumer;

class ConsumeSupplier  extends Command
{
    protected $signature = 'rabbitmq:supplier';

    protected $description = 'Consume SupplierCreated events';

    public function handle()
    {
        $consumer = new SupplierConsumer();

        $consumer->consume();

        return Command::SUCCESS;
    }
}