<!DOCTYPE html>
<html>
    <head>
        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @yield('title')
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/form-helper.js"></script>
        
    </head>
    <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">My First App</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li @if(isset($empactive)) {{ $empactive }} @endif><a href="{{ route('employee') }}">Employees</a></li>
        <li @if(isset($projectactive)) {{ $projectactive }} @endif><a href="{{ route('projects') }}">Projects</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





        <div class="container">
            @yield('content')
            @yield('footer')
        </div>
        
        @yield('javascript')
        
    </body>
</html>

    
