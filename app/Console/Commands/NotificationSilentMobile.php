<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\Models\front\Notification;
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
        $notifications = Notification::get();
        dd($notifications);
        DB::insert('insert into test (name) values ("krunal cron")');
        echo 'Testss';
    }
}
