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
        <div class="image">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
            <div class="section-header">
              <h2 class="title">
                Welcome to PEYAMBA
              </h2>
              <p>
                Let's create your profile! Just fill in the fields below, and
                we’ll get a new account.
              </p>
            </div>
            <div class="main-content">
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <h4 class="content-title">Acount Details</h4>
                <div class="form-group">
                  <x-label for="name" :value="__('Name')" />
                  <x-input id="name" class="my-form-control" placeholder="Enter Your Username" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div class="form-group">
                  <x-label for="email" :value="__('Email')" />
                  <x-input id="email" class="my-form-control" placeholder="Enter Your Email" type="email" name="email" :value="old('email')" required />
                </div>
                <div class="form-group">
                  <x-label for="password" :value="__('Password')" />
                  <x-input id="password" class="my-form-control" placeholder="Enter Your Password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                </div>
                <div class="form-group">
                  <x-label for="password_confirmation" :value="__('Confirm Password')" />
                  <x-input id="password_confirmation" class="my-form-control" placeholder="Enter Your Password"
                                type="password"
                                name="password_confirmation" required />
                </div>
                <h4 class="content-title mt-5">Profile Details</h4>
                <!--<div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="my-form-control" placeholder="Enter Your Full Name">
                </div>-->
                <div class="form-group">
                  <x-label for="birthday" :value="__('Birthday')" />
                  <input id="birthday" name="birthday" type="date" class="my-form-control" placeholder="dd/mm/yyyy" :value="old('birthday')" required >
                </div>
                <div class="form-group">
                  <x-label for="gender1" :value="__('I am a')" />
                  <div class="option">
                    <div class="s-input mr-3">
                      <input type="radio" name="gender1" id="males1" :value="old('gender1')"><label for="males1">Man</label>
                    </div>
                    <div class="s-input">
                      <input type="radio" name="gender1" id="females1" :value="old('gender1')"><label for="females1">Woman</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <x-label for="gender2" :value="__('Looking for a')" />
                  <div class="option">
                    <div class="s-input mr-3">
                      <input type="radio" name="gender2" id="males" :value="old('gender2')"><label for="males">Man</label>
                    </div>
                    <div class="s-input">
                      <input type="radio" name="gender2" id="females" :value="old('gender2')"><label for="females">Woman</label>
                    </div>
                  </div>
                </div>
                <!--<div class="form-group">
                  <label for="">Marial status</label>
                  <div class="option">
                    <div class="s-input nice-select-wraper">
                      <select class="select-bar">
                        <option value="">Single</option>
                        <option value="">In a relationship</option>
                        <option value="">Marid</option>
                        <option value="">Divorced</option>
                      </select>
                    </div>
                  </div>
                </div>-->
                <div class="form-group">
                  <x-label for="country" :value="__('Country')" />
                  <input type="text" name="country" id="country" class="my-form-control" placeholder="Enter Your Country">
                </div>
                <div class="form-group">
                  <x-label for="city" :value="__('City')" />
                  <input type="text" name="city" id="city" class="my-form-control" placeholder="Enter Your City">
                </div>
                <div class="flex items-center justify-end mt-4">
                <button class="custom-button" data-toggle="modal" data-target="#email-confirm"> {{ __('Register') }}</button>
                <br>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                      {{ __('Already registered?') }}
                  </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Login & Registation Section ========== -->

  <!-- Modal -->
  <div class="modal fade" id="email-confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="top-img">
            <img src="assets/images/c-image.png" alt="">
          </div>
          <div class="main-content">
            <h4 class="title">
              Check Your Inbox, Please!
            </h4>
            <p>
              A link to verify account has been sent to the email supplied. Please open the link and follow the prompts
              to verify
              email.
            </p>
            <p class="send-again">
              Didn't get e-mail? <a href="#">
                Send it again
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


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