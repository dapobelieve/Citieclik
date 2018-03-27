<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Subscription;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'testing the work of this before going live with it';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
