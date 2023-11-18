<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Authentication extends Controller
{
    /**
     * @uses function to display sign in form. 
     */
    public function index(){
        return view('admin/authentication/login');
    }

    public function auth(Request $request){
        // return $request->post();
        $email      = $request->email; 
        $password   = $request->password; 
        dd($request->all());
        // $result = Admin::where(['email' => $email, 'password' => $password])->get();
        $result = Admin::where(['email' => $email])->first();
        if($result){

            if(Hash::check($password, $result['password'])){
                $request->session()->put('ADMIN_LOGIN', true);
                // $request->session()->put('ADMIN_ID', $result['id']);

                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('email', $email);
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin');
            }
        }else{
            $request->session()->flash('email', $email);
            $request->session()->flash('error', 'Please enter valid login detail');
            return redirect('admin');

        }
        // dd($result);
    }
}
