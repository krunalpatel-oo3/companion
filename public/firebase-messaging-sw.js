// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyCAuoguAAZC11MuSw97bZzBAGZU74ehMao",
    authDomain: "companionguru.firebaseapp.com",
    projectId: "companionguru",
    storageBucket: "companionguru.appspot.com",
    messagingSenderId: "1060044980690",
    appId: "1:1060044980690:web:65a2e5be5f7d691d5dc80b",
    measurementId: "G-BG041Q2YT8"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    const title = payload.data.title;
    const options = {
        body: payload.data.body,
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});