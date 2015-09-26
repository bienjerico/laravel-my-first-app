<!DOCTYPE html>
<html>
    <head>
        
        @yield('title')
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            @yield('content')
            @yield('footer')
        </div>
        
        @yield('javascript')
        
    </body>
</html>

    
