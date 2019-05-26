<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Base | Chazudev</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" @keyup="searchit" v-model="search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click="searchit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="./img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CHAZUDEV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{Auth::user()->name}}
              <p>{{Auth::user()->type}}</p>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                <p>
                Dashboard

                </p>
            </router-link>
            </li>

            @can('isAdmin')
         


         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-cog text-info"></i>
            <p>
              MANAGEMENT
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="/slider" class="nav-link">
                <ion-icon name="albums"></ion-icon>
                <p>
                  Slider
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/berita" class="nav-link">
                <i class="nav-icon fa fa-envelope-o"></i>
                <p>Berita & Promo</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/karir" class="nav-link">
                <ion-icon name="briefcase"></ion-icon>
                <p>Karir</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/users" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Admin</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/partner" class="nav-link">
                <ion-icon name="apps"></ion-icon>
                <p>
                  Partnership / Product
                </p>
              </router-link>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-envelope-o text-info"></i>
            <p>
              REPORT
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <router-link to="drive" class="nav-link">
                <ion-icon name="help-buoy"></ion-icon>
                <p>Test drive</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/incoming" class="nav-link">
                <i class="fa fa-shopping-cart"></i>
                <p>Incoming</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/career" class="nav-link">
                <ion-icon name="briefcase"></ion-icon>
                <p>Karir</p>
              </router-link>
            </li>
          </ul>
        </li>
        @endcan
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-plus-square-o text-info"></i>
            <p>
              UNIT BISNIS
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item ">
              <router-link to="/automotif" class="nav-link">
                <ion-icon name="logo-model-s"></ion-icon>
                <p>
                  Automotive
                </p>
              </router-link>
            </li>
            <li class="nav-item ">
              <router-link to="/trading" class="nav-link">
                <ion-icon name="move"></ion-icon>
                <p>
                  Trading
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/mining" class="nav-link">
                <ion-icon name="hammer"></ion-icon>
                <p>
                  Mining
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/property" class="nav-link">
                <ion-icon name="gift"></ion-icon>
                <p>
                  Property
                </p>
              </router-link>
            </li>
          </ul>
        </li>

          <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                 </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
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
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth

<script src="/js/app.js"></script>
</body>
</html>
