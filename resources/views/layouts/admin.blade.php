<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ URL::to('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::to('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::to('lte/dist/css/adminlte.min.css') }}">
  {{-- trix editor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/mockup_logo_brand.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/mockup_logo_brand.png">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

  
  <style>
      p {
        max-width: 100%;
        max-height: 100px;
        overflow-y: scroll;
        text-overflow: ellipsis;
      }
      textarea{
        max-width: 100%;
        max-height: 100px;
        overflow-y: scroll;
        text-overflow: ellipsis;
      }
      trix-toolbar [data-trix-button-group="file-tools"]{
                display: none;
            }
    </style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ URL::to('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Web-Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::to('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Lihat Website
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/admin/packages" class="nav-link {{ (request()->is('admin/packages')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Paket Tour</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/kuliner" class="nav-link {{ (request()->is('admin/kuliner')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kuliner</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/homestays" class="nav-link {{ (request()->is('admin/homestays')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Homestay</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/souvenir" class="nav-link {{ (request()->is('admin/souvenir')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Souvenir</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gallery" class="nav-link {{ (request()->is('admin/gallery')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gallery</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="/admin/testimoni" class="nav-link {{ (request()->is('admin/testimoni')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Testimoni</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="/admin/abouts" class="nav-link {{ (request()->is('admin/abouts')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data About</p>
                </a>
            </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-arrow-left btn-danger"></i>
              <p>
                Logout
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">


                @yield('content');
                
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }}
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ URL::to('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::to('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
