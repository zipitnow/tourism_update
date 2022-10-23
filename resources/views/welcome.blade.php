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
    <link rel="stylesheet" href="css/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/dist/css/adminlte.min.css">

    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
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
                            <a type="submit" class="nav-link" href="/">
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
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">



            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                    <div class="image">
                        <img src="{{ asset('css/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2"
                            alt="User Image">
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
                            <a href="/" class="nav-link ">
                                <i class="fa fa-home"></i>
                                <p>
                                    Home

                                </p>
                            </a>

                        </li>
                        <li class="nav-item pt-3">
                            <a href="#" class="nav-link">
                                <i class="fa fa-window-restore"></i>
                                <p>
                                    About

                                </p>
                            </a>
                        </li>
                        <li class="nav-item  pt-3">
                            <a href="{{ route('tourist.site') }}" class="nav-link ">
                                <i class="nav-icon fas fa-chart-area"></i>
                                <p>
                                    Tourist Sites

                                </p>
                            </a>

                        </li>
                        <li class="nav-item pt-3">
                            <a href="{{ route('artifact.site') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Artifacts

                                </p>
                            </a>

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
    <script src="css/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="css/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="css/dist/js/demo.js"></script>
</body>

</html>
