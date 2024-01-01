<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Kutia\Larafirebase\Facades\Larafirebase;
use App\Models\front\Notification;

class Authentication extends Controller
{
    /**
     * @uses function to display sign in form. 
     */
    public function index(){
        return view('admin/authentication/login');
    }

    /**
     *@uses function to authentication user. 
     */
    public function auth(Request $request){
        $email      = $request->email; 
        $password   = $request->password; 
        $result = User::where(['email' => $email])->first();
        if($result){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $response = ['status' => true, 'message' => 'You have been successfully logged in.']; 
            }else{
                $response = ['status' => false, 'message' => 'Please enter correct password.'];
            }
        }else{
            $response = ['status' => false, 'message' => 'Please enter a valid email.'];
        }
        return response()->json($response);
    }

    public function test_cron(){
        \Artisan::call('schedule:run');
        $newTime = strtotime('-15 minutes');
        
        $notifications = Notification::select('title','description','description','fcm_token')->where('time', '>',  date('H:i', $newTime))->where('time', '<', date('H:i'))->get();
        foreach ($notifications as $key => $notification) {
            
            Larafirebase::withTitle($notification->title)
            ->withBody($notification->description)
            ->sendMessage($notification->fcm_token);
        }
        dd($notifications);
    }

    public function sendNotification(Request $request){
        \Artisan::call('optimize:clear');
        // $url = 'https://fcm.googleapis.com/fcm/send';

        // // $FcmToken = User::whereNotNull('device_token')->pluck('device_token')->all();
            
        $serverKey = 'AAAA9s-awdI:APA91bFd491JgFr4dn12HW2lQJI2s92rxGQb7EfQAfPxT2qzK27KQScqF-WyL5UY2p1IL8ngupwkiCXX9wsJgZNk5awjcsdxtQYO36fdGXX4T537o9Z-cAW6oXEGE4F9UW5hTnUAHHqI'; // ADD SERVER KEY HERE PROVIDED BY FCM
        //$FcmToken = 'enb-PIM7USBIqvXAjxMQ-N:APA91bGMe-YuFPYLNuZ8fs-uetIzx9abi9W3HlVZ-R7uS6Nk-Rh492_pZ6GC1HIt2qNgZJgxh1QXet66By9jPPxNPyW6d3LPdJsJo7CDbs1uvmnpypUtDOXHTuIxOaBOctWryrMqONg2';
        $FcmToken = 'fb3n0ZPG61dq9rSXBdtaSg:APA91bHWReZBY2WwQ3K8N0O0b3Yh9W7DDP_D9QA1znfHsDJ4DFJ4pKSWNkyCDpTn1HzaOwswrC184Ih9_TdZqYZ-HiilzIZ87k9bs2B16-ZRsAt7DTTj5OLz2gp7XsyX6yIlY75mA403';
        
        $result = Larafirebase::withTitle('Krunal Notification Again.')
            ->withBody('This is for the testing.')
            ->sendMessage($FcmToken);
        // FCM response

        
        dd($result);    
    }
}
