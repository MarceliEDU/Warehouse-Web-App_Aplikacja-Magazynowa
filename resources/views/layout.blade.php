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
    @vite(['resources/js/app.js'])

    <title>Aplikacja Magazynowa</title>

</head>
<body onload="if(getCookie('lang')=='') setCookie('lang','pl'); navLang();">   

    @include('nav')

    <div class="container" id="main">

        @yield('content')

    </div>

    @include('footer')

<script>

function setCookie(cname,cvalue) {
    let exdays=1; //czas trwania ciasteczka
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

</script>

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