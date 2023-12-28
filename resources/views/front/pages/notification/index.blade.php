<?php $title = "Companion Guru"; ?>

@extends('layouts/front/layout')

@section('body')
<div class="container py-3 min-vh-100 d-flex flex-column">
   <div class="card shadow rounded-3 my-auto">
       <div class="card-header p-3 h4">
         Notification to your device
       </div>
       <div class="card-body p-4">
           <form action="{{ route('notification.store') }}" role="form" class="row" method="POST" id="notification_form">
               @csrf
               <div class="form-group col-lg-4">
                   <label class="form-control-label" for="title">Title</label>
                   <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
               </div>
               <div class="form-group col-lg-4">
                   <label class="form-control-label" for="date_time">Date & Time</label>
                   <input type="text" class="form-control" id="date_time" name="date_time" placeholder="Select Date & Time">
               </div>
               <div class="form-group col-lg-12 mt-2">
                   <label class="form-control-label" for="description">Notes</label>
                   <textarea class="form-control" id="description" name="description" rows="2"  placeholder="Enter Description"></textarea>
               </div>
               <input type="hidden" name="fcm_token">
               <div class="form-group col-lg-12">
                   <button class="btn btn-warning float-end mt-2" for="form-group-input" id="submit-notification">Submit Request</button>
               </div>
           </form>
       </div>
   </div>
</div>
{{-- Validate --}}

<script src="{{ asset('assets/js/validate/jquery.validate.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

<script src="{{ asset('assets/front/notification.js') }}"></script>

<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js"></script>

<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
    const firebaseConfig = {
          apiKey: "AIzaSyCAuoguAAZC11MuSw97bZzBAGZU74ehMao",
          authDomain: "companionguru.firebaseapp.com",
          projectId: "companionguru",
          storageBucket: "companionguru.appspot.com",
          messagingSenderId: "1060044980690",
          appId: "1:1060044980690:web:65a2e5be5f7d691d5dc80b",
          measurementId: "G-BG041Q2YT8"
    };

    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    
    function initFirebaseMessagingRegistration() {
          messaging
          .requestPermission()
          .then(function () {
                return messaging.getToken()
          })
          .then(function(token) {
                console.log('Token: ',token);
                $('input[name="fcm_token"]').val(token);

                $.ajaxSetup({
                      headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                });           
          }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
          });
    }  
    initFirebaseMessagingRegistration();
    messaging.onMessage(function({data:{body,title}}){
          new Notification(title, {body});
    });
</script>
@endsection