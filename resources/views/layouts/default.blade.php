<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">

    <title>Super Cool Layouts</title>

    <!-- load css,fonts -->
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css">
    <link href="{!!asset('fonts/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" type="text/css">
    <link href="{!!asset('fonts/fontello/css/fontello.css')!!}" rel="stylesheet" type="text/css">
    <link href="{!!asset('css/sticky-footer-navbar.css')!!}" rel="stylesheet" type="text/css">
    <!-- load css,fonts -->

</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Laravel 5</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/projects">Projects</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  

    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>
    </div>


    <footer class="footer">
      <div class="container">
        <p class="text-muted">@copyright 2016.</p>
      </div>
    </footer>

    <!-- load js -->
    <script  src="{!!asset('js/jquery.min.js')!!}"></script>
    <!-- load js -->


</body>
</html>