<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    {{ env('APP_NAME') }}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{route('/')}}">
        {{ env('APP_NAME') }}
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
            <a class="nav-link me-2" href="{{route('login')}}">
              <i class="fas fa-key opacity-6  me-1"></i>
              Sign In
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url(https://images.unsplash.com/photo-1576421092266-cb93079b3e82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1527&q=80);background-repeat:no-repeat;background-attachment:fixed;background-size:100%"
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              {{-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('register') }}"  role="form text-left">
                    @csrf
                  <div class="mb-3">
                    <x-text-input id="name" class="form-control" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name"  aria-label="Name" aria-describedby="email-addon"/>
                    <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                  </div>
                  <div class="mb-3">
                    <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username"  aria-label="Email" aria-describedby="email-addon" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                  </div>
                  <div class="mb-3">
                    <x-text-input id="password" 
                                  class="form-control"
                                  type="password"
                                  name="password"
                                  placeholder="Password"
                                  required autocomplete="new-password" 
                                  aria-label="Password" 
                                  aria-describedby="password-addon"/>
                    
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                  </div>
                  <div class="mb-3">
                    <x-text-input id="password_confirmation" 
                                  class="form-control"
                                  type="password"
                                  name="password_confirmation"
                                  placeholder="Confirm Password"
                                  required autocomplete="new-password"
                                  aria-label="Password" aria-describedby="password-addon" />
                    
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                  </div>
                  <div class="text-center">
                    <x-primary-button class="btn bg-gradient-dark w-100 my-4 mb-2">
                        {{ __('Sign up') }}
                    </x-primary-button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">{{ __('Sign in') }}</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
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
  <script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>
</body>

</html>
    {{-- <!-- Start SignUP
    ============================================= -->
    <div class="contact-area default-padding" style='background-image: url("{{asset('assets/img/shape/28.png')}}");'>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                
                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h2 class="text-center heading">Register</h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                    
                            <!-- Name -->
                            <div class="form-group">
                                <x-text-input id="name" class="form-control" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="mt-4">
                                <x-text-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                placeholder="Password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="mt-4">                   
                                <x-text-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation"
                                                placeholder="Confirm Password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                            </div>
                    
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                    
                                <x-primary-button class="ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End SignUP -->
 --}}
