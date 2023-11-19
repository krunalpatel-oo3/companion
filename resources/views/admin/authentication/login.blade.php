<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico') }}">
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/admin/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <style>
        body {
          background-image: url("{{asset('assets/media/auth/bg4.jpg') }}");
        }
      </style>
      <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
          <div class="d-flex flex-center flex-lg-start flex-column">
            <a href="javascript:void(0)" class="mb-7">
              <img alt="Logo" src="{{asset('assets/media/logos/custom-3.svg') }}">
            </a>
            <h2 class="text-white fw-normal m-0"> Branding tools designed for your business </h2>
          </div>
        </div>
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
          <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
              <form class="form w-100" method="post" id="sign_in_form" action="{{route('admin.auth')}}">
                @csrf
                <div class="text-center mb-11">
                  <h1 class="text-dark fw-bolder mb-3"> Sign In </h1>
                </div>
                <div class="fv-row mb-8">
                  <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-3">
                  <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                  <div></div>
                  <a href="reset-password.html" class="link-primary"> Forgot Password ? </a>
                </div>
                <div class="d-grid mb-10">
                  <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                    <span class="indicator-label"> Sign In</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var hostUrl = "/metronic8/demo1/assets/";
    </script>
    <script src="{{asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <!-- <script src="{{asset('assets/js/scripts.bundle.js') }}"></script> -->
    <!-- <script src="{{asset('assets/js/custom/authentication/sign-in/general.js') }}"></script> -->
      
    <script src="{{asset('assets/js/validate/jquery.validate.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('assets/js/admin/custom.js') }}"></script>
    <script src="{{asset('assets/js/admin/authentication.js') }}"></script>
  </body>
</html>
