<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\Models\front\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class NotificationAleart extends Command
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
        $newTime = strtotime('-15 minutes');
        
        // $notifications = Notification::select('title','description','description','fcm_token')->where('time', '>',  date('H:i', $newTime))->where('time', '<', date('H:i'))->get();
        $notifications = Notification::select('title','description','fcm_token')->whereBetween('time', [ date('H:i', $newTime),  date('H:i')])->get();
        foreach ($notifications as $key => $notification) { 
            
            Larafirebase::withTitle($notification->title)
            ->withBody($notification->description)
            ->sendMessage($notification->fcm_token);
        }
    }
}
