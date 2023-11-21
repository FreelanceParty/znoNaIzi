<?php

namespace App\Console\Commands;

use App\Models\Subject;
use Illuminate\Console\Command;

/**
 * Class TestCommand
 * @package App\Console\Commands
 */
class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'app:test';

    /*** Execute the console command. */
    public function handle(): void
    {
        //
    }
}
