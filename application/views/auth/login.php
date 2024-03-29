<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head><base href="../../../">
    <meta charset="utf-8" />
    <title>Rita</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?=base_url('assets')?>/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?=base_url('assets')?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?=base_url('assets')?>/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?=base_url('assets')?>/media/logos/logo.png" />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Login-->
      <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #7EBFDB;">
          <!--begin::Aside Top-->
          <div class="d-flex flex-column-auto flex-column pt-lg-5">
            <!--begin::Aside header-->
            <a href="#" class="text-center mb-15">
              <img src="<?=base_url('assets')?>/media/logos/logo.png" alt="logo" class="h-70px" />
            </a>
            <!--end::Aside header-->
            <!--begin::Aside title-->
            <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">A Diverse &amp; and Friendly Place
            <br />to Raise Your Family</h3>


            <!--end::Aside title-->
          </div>
          <!--end::Aside Top-->
          <!--begin::Aside Bottom-->
          <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?=base_url('assets')?>/media/svg/illustrations/payment.svg)"></div>
          <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
          <!--begin::Content body-->
          <div class="d-flex flex-column-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form login-signin">
              <!--begin::Form-->
              <form class="form" method="post" action="<?= base_url('auth/login')?>" novalidate="novalidate">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                  <h3 id="msg" class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg"></h3>
                </div>
                <!--begin::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                  <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text" name="identity" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                  <div class="d-flex justify-content-between mt-n5">
                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                    <!-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a> -->
                  </div>
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password" name="password" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Action-->
                <div class="pb-lg-0 pb-5">
                  <button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                </div>
                <!--end::Action-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Signin-->
            <!--begin::Signup-->
            <div class="login-form login-signup">
              <!--begin::Form-->
              <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                  <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                  <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                </div>
                <!--end::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex align-items-center">
                  <label class="checkbox mb-0">
                    <input type="checkbox" name="agree" />
                    <span></span>
                  </label>
                  <div class="pl-2">I Agree the
                  <a href="#" class="ml-1">terms and conditions</a></div>
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                  <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                  <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                </div>
                <!--end::Form group-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Signup-->
            <!--begin::Forgot-->
            <div class="login-form login-forgot">
              <!--begin::Form-->
              <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                  <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
                  <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                </div>
                <!--end::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                  <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap pb-lg-0">
                  <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                  <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                </div>
                <!--end::Form group-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Forgot-->
          </div>
          <!--end::Content body-->
          <!--begin::Content footer-->
          
          <!--end::Content footer-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?=base_url('assets')?>/plugins/global/plugins.bundle.js"></script>
    <script src="<?=base_url('assets')?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?=base_url('assets')?>/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?=base_url('assets')?>/js/pages/custom/login/login.js"></script>
    <!--end::Page Scripts-->
    <script type="text/javascript">
     
      $(document).ready(function(){
              $(".cbalogo").animate({marginTop: '30%'});
                var showText = function (target, message, index, interval) {   
                  if (index < message.length) {
                    $(target).append(message[index++]);
                    setTimeout(function () { showText(target, message, index, interval); }, interval);
                  }
                } 
                showText("#msg", "Welcome to LEXINGTON SQUARE", 0, 30);
            });

       <?php
        if(isset($message)){
        ?>
        
            Swal.fire({
                  html: '<?=$message?>',
                })
        <?php
        }
        ?>
    </script>
  </body>
  <!--end::Body-->
</html>