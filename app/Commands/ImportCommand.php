<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ImportCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'app:import {path}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Import Data from Excel to Database';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (! file_exists($this->argument('path'))) {
            $this->error('File not found');

            return;
        }

        $this->info('Importing data from '.$this->argument('path').' completed');
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
