<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
// use Kutia\Larafirebase\Facades\Larafirebase;

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
        // $url = 'https://fcm.googleapis.com/fcm/send';

        // // $FcmToken = User::whereNotNull('device_token')->pluck('device_token')->all();
            
        $serverKey = 'AAAA9s-awdI:APA91bFd491JgFr4dn12HW2lQJI2s92rxGQb7EfQAfPxT2qzK27KQScqF-WyL5UY2p1IL8ngupwkiCXX9wsJgZNk5awjcsdxtQYO36fdGXX4T537o9Z-cAW6oXEGE4F9UW5hTnUAHHqI'; // ADD SERVER KEY HERE PROVIDED BY FCM
        $FcmToken = ['enb-PIM7USBIqvXAjxMQ-N:APA91bEG1eWO2aHDHIvXEvlD_K-spalTNlBuc6GygqlRBe5o-GBLpufGrTSKa7KDeMo2XJOVFEupi48UBbCZOCcW3MwvVe9eC7ZtBJS_EEcz-B-6xoDWkvKuSg4OjZVYxVY-9eF1pMkR'];
        
        // $result = Larafirebase::withTitle('YSJHA')
        //     ->withBody('TEWSTVBS ABS AHGSBH')
        //     ->sendMessage($FcmToken);

        // // FCM response
        // dd($result);
        $url = 'https://fcm.googleapis.com/fcm/send';
        // $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
          
        // $serverKey = 'server key goes here';
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => 'DSASDAA',
                "body" => 'SABSJHABJHSBJS',  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        dd($result);    
    }
}
