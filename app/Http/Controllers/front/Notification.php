<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NotificationRequest;
use App\Models\front\Notification AS NotificationModel;

class Notification extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front/pages/notification/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NotificationRequest $request)
    {
        try {
            $notification = new NotificationModel();
            $notification->title = $request->title;   
            $notification->description = $request->description;   
            $notification->fcm_token = $request->fcm_token;   
            $notification->time = current(explode(' ',$request->date_time));  
            $notification->save();
            $response = ['status' => true, 'message' => 'Your notification aleart store successfully.']; 
        } catch (\Throwable $th) {
            dd($th);
            // dd(current(explode(' ',$request->date_time)));
            $response = ['status' => false, 'message' => 'Something went wrong, please try later.'];    
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
