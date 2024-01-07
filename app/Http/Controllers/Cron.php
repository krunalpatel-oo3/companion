<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cron extends Controller
{
    public function schedule_run(){
        \Artisan::call('schedule:run');
    }
}
