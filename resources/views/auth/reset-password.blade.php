<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    {{ env('APP_NAME') }}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                {{-- <img src="https://cdn-icons-png.flaticon.com/512/4873/4873901.png" width="25px" height="25px" alt="main_logo"> --}}
              Repair Shop
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('register')}}">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Reset Password</h3>
                  <p class="mb-0">Set your new password.</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <label>Email</label>
                        <div class="mb-3">
                            <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                        </div>
                        <div class="mb-3">
                            <x-text-input id="password" class="form-control" type="password" name="password" placeholder="New Password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                        </div>
                        <div class="mb-3">
                            <x-text-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation"
                                                    placeholder="Confirm Password"
                                                    required autocomplete="new-password" />
                    
                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                        </div>
                        <div class="text-center">
                            <x-primary-button  class="btn bg-gradient-info w-100 mt-4 mb-0">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
   

    {{-- <div class="contact-area default-padding" style='background-image: url("{{asset('assets/img/shape/28.png')}}");'>
        <div class="container">
            <div class="row align-center">
                
                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Set your new password.</h5>
                        <h2 class="heading">Reset Password</h2>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                    
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                            <!-- Email Address -->
                            <div class="form-group">
                                <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="form-group">
                                <x-text-input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-text-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation"
                                                    placeholder="Confirm Password"
                                                    required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div> --}}
