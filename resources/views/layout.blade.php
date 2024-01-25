<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/js/app.js','resources/scc/app.css'])

    <link rel="stylesheet" type="text/css" href="{{ url('app.css') }}">

    <title>Aplikacja Magazynowa</title>

</head>
<body onload="startSetup();">   

    @include('nav')

    <div class="container" id="main">

        @yield('content')

    </div>

    @include('footer')

@include('code')

<!-- message controll -->
@if(session('message'))        
  <script>
    if(getCookie('noPopup')=='')
      if(confirm("{{ session('message') }}")==false)
        setCookie('noPopup','1');
  </script>
@endif 

</body>
</html>