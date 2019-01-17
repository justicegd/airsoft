<!doctype html>
<html lang="en">
  <head>
    <title>文文日誌</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("view/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("view/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("view/css/owl.carousel.min.css")}}">

    <link rel="stylesheet" href="{{asset("view/fonts/ionicons/css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("view/fonts/fontawesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("view/fonts/flaticon/font/flaticon.css")}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset("view/css/style.css")}}">
  </head>
  <body>

    <header role="banner">
        @include('layout.topBar')
        @yield('site-logo')
      @include('layout.navbar')
    </header>
    <!-- END header -->

    @yield('topArticle')


    <!-- END section -->
        @yield('container')

  
    <footer class="site-footer">
      <div class="container">
        Build by Irvin@2019
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset("view/js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("view/js/jquery-migrate-3.0.0.js")}}"></script>
    <script src="{{asset("view/js/popper.min.js")}}"></script>
    <script src="{{asset("view/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("view/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("view/js/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("view/js/jquery.stellar.min.js")}}"></script>

    <script src="{{asset("view/js/main.js")}}"></script>
  </body>
</html>
