<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DatabaseFresh extends Command
{
    protected $signature = 'db:fresh';

    protected $description = 'Recreate the database schemas and run all migrations';

    public function handle(): int
    {
        $this->components->warn('This will delete all application data.');

        if (! $this->confirm('Continue?')) {
            return self::SUCCESS;
        }

        $schemas = [
            'dashboard',
            'expediente',
            'solicitante',
            'documento',
            'lote',
            'geo',
            'auth',
        ];

        foreach ($schemas as $schema) {
            DB::statement("DROP SCHEMA IF EXISTS {$schema} CASCADE");
        }

        $this->call('migrate:fresh');

        return self::SUCCESS;
    }
}