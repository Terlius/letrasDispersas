<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LetrasDisparejas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="\imagenes\novia.png" />
    
</head>
<body style="background-color:rgb(230, 230, 230);">
    
   
    <div id="app">
    @include('dashboard.partials.nav-header-main')

    <div class="container mt-4 ">
        @include('dashboard.partials.session-status')

        @yield('content')
    </div>

   </div>
    <script src="{{asset("js/app.js")}}"></script>
</body>

</html>