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
}
