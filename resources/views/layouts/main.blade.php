<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 	<head>
        <meta charset="UTF-8">
        
        <meta name="description" content="St. Stephen's School and Saint phoebe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> مدرسة الشمامسة @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         @yield('stylesheet')
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>   
    <main>
     
       @include('_partials.nav')
      @yield('content')
    
    </main>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script  src="{{asset('js/bootstrap.min.js')}}"></script>
        @yield('script')
    </body>
</html>