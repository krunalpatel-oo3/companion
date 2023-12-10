<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class NotificationSilentMobile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notification-silent-mobile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = array('data' => 'Cron Test');
        // DB::table('test')
        DB::insert('insert into test (name) values ("krunal cron")');
        echo 'Test';
    }
}
