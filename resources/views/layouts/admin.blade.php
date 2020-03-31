<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="{{url('template/assets/img/chicken-farm.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet"/>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
  <link href="{{url('template/assets/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</head>

<body class="">
   <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{url('template/assets/img/ayam3.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a class="simple-text logo-normal">
          Selamat Datang
          <h5 class="card-category text-gray">{{auth()->user()->nama_depan}}</h5>
        </a>

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#users" aria-expanded="false">
              <i class="material-icons">people_alt</i>
              <p>Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="users" style="">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('adminn')}}">
                    <span class="sidebar-mini"> DA </span>
                    <span class="sidebar-normal">Data Admin </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('users')}}">
                    <span class="sidebar-mini"> DU </span>
                    <span class="sidebar-normal">Data Users</span>
                  </a>
                </li> 
                              
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('device')}}">
              <i class="material-icons">build</i>
              <p>Data Alat</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{url('data')}}">
              <i class="material-icons">content_paste</i>
              <p>Data Unggas</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
     <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              <div class="ripple-container"></div></button>
            </div>
            <a class="navbar-brand">@yield('judul')</a>            
          </div>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
          @yield('search')
            <ul class="navbar-nav">             
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">Account</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{url('settings')}}">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      @yield('content')
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-center">
            <!-- <ul>
              <li>
                made by SISKOM
              </li>
            </ul> -->
          </nav>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <!-- <script src="{{url('template/assets/js/core/jquery.min.js')}}"></script> -->
  <script src="{{url('template/assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('template/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url('template/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{url('template/assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{url('template/assets/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{url('template/assets/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{url('template/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{url('template/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{url('template/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{url('template/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{url('template/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{url('template/assets/js/plugins/fullcalendar.min.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{url('template/assets/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{url('template/assets/js/plugins/arrive.min.js')}}"></script>
  <!-- Chartist JS -->
  <script src="{{url('template/assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('template/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('template/assets/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
   
  <script>
  $(document).ready(function() {
    $('#adminTable').DataTable();
  });
  </script>

  <script>
  $(document).ready(function() {
    $('#userTable').DataTable();
  });
  </script>

<script>
  $(document).ready(function() {
    $('#deviceTable').DataTable();
  });
  </script>

  @stack('scripts')
</body>

</html>
