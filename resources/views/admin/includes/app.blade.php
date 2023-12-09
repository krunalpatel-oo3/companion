
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'Admin')</title>
        <meta charset="utf-8">
        <meta name="description" content="The most advanced Bootstrap 5 Adm">
        <meta name="keywords" content="metronic, bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes">
        <meta property="og:url" content="https://keenthemes.com/metronic">
        <meta property="og:site_name" content="Metronic by Keenthemes">
        <link rel="canonical" href="index.html">
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="../../css?family=Inter:300,400,500,600,700">
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">

        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
        <!--begin::Theme mode setup on page load-->
    <script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }			
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }            
    </script>            
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">             
            <div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		</div>
                    </div>
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img alt="Logo" src="{{asset('assets/media/logos/default-small.svg')}}" class="h-30px">
                        </a>
                    </div>
                    <!--end::Mobile logo-->

                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">   
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">        
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px">
                                        <!--begin:Dashboards menu-->
                                        <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
                                            <!--begin:Row-->
                                            <div class="row">
                                                <!--begin:Col-->
                                                <div class="col-lg-7">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <!--begin:Col-->
                                                        <div class="col-lg-4 mb-3">
                                                            <!--begin:Heading-->
                                                            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Layouts</h4>
                                                            <!--end:Heading-->              
                                                                <div class="menu-item p-0 m-0">
                                                                    
                                                                    <a href="layouts/light-sidebar.html" class="menu-link ">
                                                                        <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                        <span class="menu-title">Light Sidebar</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                
                                                                                    <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="layouts/dark-sidebar.html" class="menu-link ">
                                                                        <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                        <span class="menu-title">Dark Sidebar</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                
                                                                                    <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="layouts/light-header.html" class="menu-link ">
                                                                        <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                        <span class="menu-title">Light Header</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="layouts/dark-header.html" class="menu-link ">
                                                                        <span class="menu-bullet"><span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                        <span class="menu-title">Dark Header</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                        </div>
                                                    </div>
                                                    <!--end:Row-->

                                                    <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

                                                </div>
                                                <!--end:Col-->

                                                <!--begin:Col-->
                                                <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                                                    <img src="assets/media/stock/900x600/45.jpg" class="rounded mw-100" alt="">
                                                </div>
                                                <!--end:Col-->
                                            </div>
                                            <!--end:Row-->
                                        </div>
                                        <!--end:Dashboards menu-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::Theme mode-->
                            <div class="app-navbar-item ms-1 ms-md-4">
                                <!--begin::Menu toggle-->
                                <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span class="path2"></span></i></a>
                                <!--begin::Menu toggle-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
                                            <span class="menu-title">
                                                System
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="{{asset('assets/media/avatars/300-3.jpg')}}" class="rounded-3" alt="user">
                                </div>
                                
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{asset('assets/media/avatars/300-3.jpg')}}">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Robert Fox
                                                </div>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User menu-->

                            <!--begin::Header menu toggle-->
                            <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                                <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                                    <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>            </div>
                            </div>
                        </div>
                        <!--end::Navbar-->	
                    </div>
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->  

            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                @include('admin/includes/sidebar')
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        @yield('content')
                    </div> 
                </div>
            </div>
        </div>
    </div>
                
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer ">
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>
                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>
                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
            </ul>
        </div>
    </div>

    <script>
        var hostUrl = "/metronic8/demo1/assets/";        
    </script>

    <script src="{{asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>

    <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
</body>

</html>