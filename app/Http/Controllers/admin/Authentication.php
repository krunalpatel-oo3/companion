<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
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
        \DB::insert('insert into test (name) values ("krunal cron")');
        echo 'Test';
    }
}
