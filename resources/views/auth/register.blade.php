<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
    
        <meta name="csrf-token" content="{{ csrf_token() }}"
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Register</title>
    
    
        {{-- dataTables --}}
        <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    
          {{-- SweetAlert2 --}}
          <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
          <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    
    
        <!-- Fontfaces CSS-->
        <link href="{{ asset('css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    
        <!-- Bootstrap CSS-->
        <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    
        <!-- Vendor CSS-->
        <link href="{{ asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">
    
        <!-- Main CSS-->
        <link href="{{ asset('css/theme.css')}}" rel="stylesheet" media="all">
    
        @yield('styles')
    
              <!-- Scripts -->
              <script>
                  window.Laravel = <?php echo json_encode([
                      'csrfToken' => csrf_token(),
                  ]); ?>
              </script>
    
    </head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('images/icon/ds.png')}}" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                             {{ csrf_field() }}


                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Name">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Password Confirm</label>
                                    <input class="au-input au-input--full" id="password-confirm" type="password" name="password_confirmation" placeholder="Password">

                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="" name="status">
                                        <option value="operator">Operator</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status' )}}</strong>
                                        </span>
                                     @endif

                                </div>

                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox"> Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Tambah User</button>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    
    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js')}}"></script>

    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    <!-- SCRIPTS -->

</body>

</html>
<!-- end document-->