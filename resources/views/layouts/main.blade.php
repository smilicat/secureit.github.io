<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Theme CSS -->
   
    <link href="/css/main.css" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Navigation -->
 @include('partials.nav')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
@yield('header')
    <!-- Main Content -->
    <div class="container">
      @yield('content')
    </div>

    <hr>

    <!-- Footer -->


  @include('partials.footer')
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="/js/main.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
