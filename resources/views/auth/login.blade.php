<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <title>Peyamba - Dating Website HTML Template</title>


</head>

<body>
  <!-- ==========Preloader========== -->
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ==========Preloader========== -->



  <!-- ========== Login & Registation Section ========== -->
  <section class="log-reg">
    <div class="top-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <a href="index.html" class="backto-home"><i class="fas fa-chevron-left"></i> Back to peyamba</a>
          </div>
          <div class="col-lg-7 ">
            <div class="logo">
              <img src="./assets/images/logo2.png" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="image image-log">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
            <div class="section-header inloginp">
              <h2 class="title">
                Welcome to PEYAMBA
              </h2>
            </div>
            <div class="main-content inloginp">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <x-label for="email" :value="__('Email')" />
                  <x-input id="email" class="my-form-control" placeholder="Enter Your Email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="form-group">
                  <x-label for="password" :value="__('Password')" />
                  <x-input id="password" class="my-form-control" placeholder="Enter Your Password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                </div>
                <p class="f-pass">
                  @if (Route::has('password.request'))
                  Forgot your password? <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                  @endif
                </p>
                <div class="button-wrapper">
                  <button type="submit" class="custom-button"> {{ __('Login') }}</button>
                </div>
                <div class="or">
                  <p>OR</p>
                </div>
                <div class="or-content">
                  <p>Sign up with your email</p>
                  <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with Google</a>
                  <p class="or-signup">
                  @if (Route::has('register'))
                    Don't have an account? <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                      Sign up here
                    </a>
                    @endif
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Login & Registation Section ========== -->




  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/modernizr-3.6.0.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/heandline.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/magnific-popup.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/countdown.min.js"></script>
  <script src="assets/js/odometer.min.js"></script>
  <script src="assets/js/viewport.jquery.js"></script>
  <script src="assets/js/nice-select.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>