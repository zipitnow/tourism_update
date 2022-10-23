<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Afofida | Bring History To Your Doorstep</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Afofida</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item  ">
                        <a class="nav-link">
                            Welcome {{ auth()->user()->name }}
                        </a>
                    </li>
                    <li class="nav-link">|</li>
                    <li class="nav-item  ">
                        <form method="POST" action="/logout">
                            @csrf
                            <a type="submit" class="nav-link" href="/login">
                                Logout
                            </a>
                        </form>

                    </li>
                @else
                    <li class="nav-item  ">
                        <a class="nav-link" href="/register">
                            Register
                        </a>
                    </li>
                    <li class="nav-link">|</li>
                    <li class="nav-item  ">

                        <a class="nav-link" href="/login">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>

        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">



            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                    <div class="image">
                        <img src="{{asset('css/dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-5">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item pt-3">
                            <a href="{{ route('profile.show') }}" class="nav-link ">
                                <i class="nav-icon  fas fa-copy"></i>
                                <p>
                                    Profile

                                </p>
                            </a>

                        </li>
                        <li class="nav-item pt-3">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="nav-icon  fas fa-copy"></i>
                                <p>
                                  Users

                                </p>
                            </a>
                        </li>
                        <li class="nav-item  pt-3">
                            <a href="{{ route('tourist.list') }}" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Tourist Sites

                                </p>
                            </a>

                        </li>
                        <li class="nav-item pt-3">
                            <a href="{{ route('artifact.list') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Artifacts

                                </p>
                            </a>

                        </li>
                         <li class="nav-item pt-3">
                            <a href="{{ route('booking.list') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Bookings

                                </p>
                            </a>

                        </li>
                         <li class="nav-item">
            <a  class="nav-link">
              <i class="nav-icon far fa-"></i>
              <p>
              Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('payment.artifact') }}" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Artifact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tourist Site</p>
                </a>
              </li>

            </ul>
          </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->

@yield('content')

        <!-- ./wrapper -->

        </div>
  <!-- Remove the container if you want to extend the Footer to full width. -->
         @include('components.footer')
 </div>

</div>




        <!-- jQuery -->
        <script src="{{asset('css/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('css/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('css/dist/js/demo.js')}}"></script>
</body>

</html>
