<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>


    <link rel="shortcut icon" href="{{ asset('img/logo.png')}}">


    
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    

    <link rel="stylesheet" href="{{ asset('css/timepicki.css')}}"/>
    {{-- dataTables --}}
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

      {{-- SweetAlert2 --}}
      <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
      <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/bootstrap/css/navbar-fixed-top.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('assets/bootstrap/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')

          <!-- Scripts -->
          <script>
              window.Laravel = <?php echo json_encode([
                  'csrfToken' => csrf_token(),
              ]); ?>
          </script>

</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('admin/')}}">
                        <img src="{{ asset('img/logo.png')}}" class="img-responsive img-logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Ganti Password</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('admin/diskon/')}}">
                                <i class="glyphicon glyphicon-user"></i> Diskon
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/pemesanan/')}}">
                                <i class="glyphicon glyphicon-user"></i> Pemesanan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/pemesan/')}}">
                                <i class="glyphicon glyphicon-user"></i> Pemesan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/shift/')}}">
                                <i class="glyphicon glyphicon-user"></i> Shift
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-user"></i> Pembayaran
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-user"></i> Cetak Laporan
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-user"></i> Grafik
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="glyphicon glyphicon-user"></i> Data Karyawan
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- end navbar -->

     @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> &copy; Design with
                        <i class="glyphicon glyphicon-heart"></i> by
                        <a href="">Ichsan Mulya</a>
                        </h2>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>


    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>


    <!-- SCRIPTS -->
    @yield('script')


</body>

</html>