<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Subscription;

class UpdateSubCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:sub';

    /**]
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the subscription status of subscribed users!';
    private $today;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->today = Carbon::now('Africa/Lagos');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //check all subscriptions and update status 
        Subscription::where('status', 1)->chunk(20, function ($subers) {

            foreach ($subers as $suber) {

                $x = Carbon::createFromTimestampUTC(strtotime($suber->ends_at));

                if($x->lte($this->today)){

                    $suber->update(['status' => 0]);
                }

            }
        });

        echo "Great job Subscribers Updated!!!";
    }
}
