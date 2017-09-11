<html>
    <head>
        <title>@yield('title')</title>
        <script
              src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/test.js') }}"></script>
    </body>
</html>