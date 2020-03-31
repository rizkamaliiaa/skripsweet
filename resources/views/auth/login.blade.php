<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/chicken-farm.png')}}">
  <link rel="icon" type="image/png" href="{{url('assets/img/chicken-farm.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{url('assets/css/material-kit.css?v=2.0.5')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      
  </nav>
  <div class="page-header header-filter" style="/*background-image: url('assets/img/bg7.jpg');*/ background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        {{-- <img class="img" src="{{ url('assets/img/chicken-farm.png') }}"> --}}
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form class="form" method="post" action="{{ route('login') }}">
            <div class="card card-login mb-3">            
              <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Login</h4>
              </div>
              @csrf
              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email..." value="" required="">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Password..." value="" required="">
                </div>
              </div>
              <div class="card-footer justify-content-center">
                <button type="submit" class="btn btn-rose btn-link btn-lg">Lets Go
                  
                </button>
              </div>            
           
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('assets/js/core/jquery.min.js" type="text/javascript')}}"></script>
  <script src="{{url('assets/js/core/popper.min.js" type="text/javascript')}}"></script>
  <script src="{{url('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{url('assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{url('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{url('assets/js/material-kit.js?v=2.0.5')}}" type="text/javascript"></script>
</body>

</html>