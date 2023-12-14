<!DOCTYPE html>
<html class='ltr' dir='ltr' lang='en'>
<head>
      <meta content='width=device-width, initial-scale=1' name='viewport'>
      <title>{{ $title }}</title> 
      <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
      <meta content='' name='description'>
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/theme/logo/favicon.png') }}">
      <link href='{{ asset("assets/ajax/libs/font-awesome/6.1.1/css/brands.min.css") }}' rel='stylesheet'>
      <!-- Template Style CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Global Variables -->
      <script defer='defer' type='text/javascript'>
      //<![CDATA[
      // Global variables with content. "Available for Edit"
      var monthsName = ["January", "February", "May", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      noThumb = "",
      relatedPostsNum = 3,
      commentsSystem = "blogger",
      relatedPostsText = "",
      loadMorePosts = "",
      showMoreText = "",
      fixedSidebar = true,
      fixedMenu = false
      //]]>
      </script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- PWA  -->
      <meta name="theme-color" content="#6777ef"/>
      <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
      <link rel="manifest" href="{{ asset('/manifest.json') }}">
      @stack('css')
</head>
      <body class='index home feed-view' id='mainContent'>
            <script type='text/javascript'>
            (localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
            </script>
            <!-- Theme Options -->
            <div class='admin-area' style='display:none'>
            <div class='admin-section section' id='admin' name='Theme Options (Admin Panel)'><div class='widget Image' data-version='2' id='Image33'>
            <script type='text/javascript'>var noThumb = "https://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png";</script>
            </div><div class='widget LinkList' data-version='2' id='LinkList1'>
            <script type='text/javascript'>  var commentsSystem = "blogger"; var noThumb = "//3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png";  </script>
            </div><div class='widget LinkList' data-version='2' id='LinkList2'>
            <script type='text/javascript'>   var loadMorePosts = "Load More"; var relatedPostsText = "You May Like"; var relatedPostsNum = 3;  </script>
            </div><div class='widget LinkList' data-version='2' id='LinkList3'>
            <script type='text/javascript'> var fixedSidebar = true;   var fixedMenu = true;   var showMoreText = "Show More";   </script>
            </div></div>
            </div>
            <!-- Outer Wrapper -->
            <div id='outer-wrapper'>
            @include('layouts.front.header')

            @yield('body')
            
            @include('layouts.front.footer')
            </div>
            <!-- Slider Mobile Menu -->
            <div id='menu-space'>
            <div class='area-runs'><span class='hide-koOiIliI-Typemenu'></span></div>
            <div class='menu-space-flex'>
                  <div class='koOiIliI-Typemenu' id='koOiIliI-Typemenu'></div>
                  <div class='social-mobile'></div>
            </div>
            </div>
            <div class='overlay'></div>
            <div class='backTop'></div>
            <!--Piki Templates Hosted Plugins -->
            <script src='{{ asset("assets/ajax/libs/jquery/3.5.1/jquery.min.js") }} ' type='text/javascript'></script>
            <script type='text/javascript'>var pikiMessages ={showMore:"Show more",noTitle:"No title",noResults:"No results found",}</script>
            <script type='text/javascript'>
            <!-- Menuiki jQuery Plugin V2.0.0 | https://github.com/pikitemplates/scripts -->
            !function(e){e.fn.Menuiki=function(){var n=this;n.find(".widget").addClass("show-menu"),n.each(function(){a=e(this),d=a.find(".LinkList ul > li").children("a"),g=d.length;for(var t=0;t<2;t++)for(var u=0;u<g;u++){let e=d.eq(u),n=e.text(),a=d.eq(u+1).text();if("_"!==n.charAt(0)&&"_"===a.charAt(0)){var i=e.parent();i.append(0==t?'<ul class="sub-menu m-sub"/>':'<ul class="sub-menu2 m-sub"/>')}"_"===n.charAt(0)&&(e.text(n.replace("_","")),e.parent().appendTo(i.children(0==t?".sub-menu":".sub-menu2")))}n.find(".LinkList ul li ul").parent("li").addClass("sub-tab")})}}(jQuery);


            !function(t){t.fn.lazyimg=function(){return this.each((function(){var r=t(this),o=t(window),a=r.attr("data-src"),h="w"+Math.round(r.width()+r.width()/10)+"-h"+Math.round(r.height()+r.height()/10)+"-p-k-no-nu";a.match("resources.blogblog.com")&&(a=noThumb),(a.match("/img/a")||a.match("/blogger_img_proxy"))&&(a.match("=")?(parts=a.split("="),a=parts[1]&&""!=parts[1].trim()?parts[0]+"=w72-h72-p-k-no-nu":a):a+="=w72-h72-p-k-no-nu");var n={"/s72-c":["/s72-c","/"+h],"/w72-h":["/w72-h72-p-k-no-nu","/"+h],"=w72-h":["=w72-h72-p-k-no-nu","="+h]},i=a;for(var s in n)if(a.match(s)){i=a.replace(n[s][0],n[s][1]);break}r.is(":hidden")||o.on("load resize scroll",(function t(){o.scrollTop()+o.height()>=r.offset().top&&(o.off("load resize scroll",t),r.attr("src",""+i).addClass("lazy-img"))})).trigger("scroll")}))}}(jQuery);
            </script>

            <script type='text/javascript' src="{{ asset('assets/js/theme.js') }}"></script>
            <script>
            $(document).ready(function(){
                  // $('#pikitemplates').addClass('d-none');
            });
            </script>
            @stack('js')

            <script type="text/javascript" src="{{ asset('assets/static/v1/widgets/2789723018-widgets.js') }}"></script>
            <script src="{{asset('assets/js/custom/widgets.js')}}"></script>

            <script src="{{ asset('/sw.js') }}"></script>
            // <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
            // <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js"></script>
            <script>
                  if (!navigator.serviceWorker.controller) {
                        navigator.serviceWorker.register("/sw.js").then(function (reg) {
                        console.log("Service worker has been registered for scope: " + reg.scope);
                        });
                  }
            </script>
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
      
            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
            const analytics = getAnalytics(app);

            firebase.initializeApp(firebaseConfig);
            const messaging = firebase.messaging();
            initFirebaseMessagingRegistration();
            function initFirebaseMessagingRegistration() {
                  messaging
                  .requestPermission()
                  .then(function () {
                        return messaging.getToken()
                  })
                  .then(function(token) {
                        console.log('Token: ',token);
                        $.ajaxSetup({
                              headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                        });           

                  }).catch(function (err) {
                        console.log('User Chat Token Error'+ err);
                  });
            }  
      
            messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                  body: payload.notification.body,
                  icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
            });
      </script>
      </body>
</html>