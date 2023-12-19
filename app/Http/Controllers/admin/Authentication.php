<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Kutia\Larafirebase\Facades\Larafirebase;

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
        echo 'Test';
    }

    public function sendNotification(Request $request){
        \Artisan::call('optimize:clear');
        // $url = 'https://fcm.googleapis.com/fcm/send';

        // // $FcmToken = User::whereNotNull('device_token')->pluck('device_token')->all();
            
        $serverKey = 'AAAA9s-awdI:APA91bFd491JgFr4dn12HW2lQJI2s92rxGQb7EfQAfPxT2qzK27KQScqF-WyL5UY2p1IL8ngupwkiCXX9wsJgZNk5awjcsdxtQYO36fdGXX4T537o9Z-cAW6oXEGE4F9UW5hTnUAHHqI'; // ADD SERVER KEY HERE PROVIDED BY FCM
        $FcmToken = 'enb-PIM7USBIqvXAjxMQ-N:APA91bGMe-YuFPYLNuZ8fs-uetIzx9abi9W3HlVZ-R7uS6Nk-Rh492_pZ6GC1HIt2qNgZJgxh1QXet66By9jPPxNPyW6d3LPdJsJo7CDbs1uvmnpypUtDOXHTuIxOaBOctWryrMqONg2';
        
        $result = Larafirebase::withTitle('Krunal Notification Again.')
            ->withBody('This is for the testing.')
            ->sendMessage($FcmToken);
        // FCM response

        
        dd($result);    
    }
}
