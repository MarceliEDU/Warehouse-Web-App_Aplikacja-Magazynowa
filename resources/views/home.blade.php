@extends('layout')
@section('content')

   

   <div class="row mt-2">
      <div class="col-12 rounded text-center text-light p-2" style="background-image: url(' {{ url('/img/main_photo.jpg') }} '); background-size: cover;">
         <h1 class="fontBanner text-primary display-1" id="s1">MAGAZYN</h1>
      </div>

      <div class="col-sm-6 col-12">
         <a href="/look" class="d-block mt-2 mb-1 p-sm-5 p-3 bg-warning text-center rounded text-white" style="font-size: 2vw;" id="s2">
            Przeglądaj magazyn
         </a>
         <a href="/login" class="d-block mt-2 mb-1 p-sm-5 p-3 bg-info text-center rounded text-white" style="font-size: 2vw;" id="s3">
            Zaloguj się
         </a>
      </div>

      <div class="col-sm-6 col-12">
         <div class="mt-2 mb-1 bg-white rounded p-2">
            <h2 class="text-center display-5 mt-2" id="s4">O Aplikacji</h2>
            <p class="text-secondary" style="text-align: justify;" id="s5">
               Aplikacja została stworzona przez Marcelego Hryniuka na zaliczenie projektu z przedmiotu Aplikacje Internetowe I. Została stworzona przy użyciu frameworku Laravel. O wygląd strony zadbał Bootstrap.
            </p>
            <p class="text-center text-warning" id="s6">Pozdrawiam, smaczej kawusi</p>
         </div>
      </div>


   </div>

<script>
    function siteLang(){
    switch(getCookie('lang')){
      case 'pl':
        document.getElementById("s1").innerHTML = "MAGAZYN";
        document.getElementById("s2").innerHTML = "Przeglądaj magazyn";
        document.getElementById("s3").innerHTML = "Zaloguj się";
        document.getElementById("s4").innerHTML = "O Aplikacji";
        document.getElementById("s5").innerHTML = "Aplikacja została stworzona przez Marcelego Hryniuka na zaliczenie projektu z przedmiotu Aplikacje Internetowe I. Została stworzona przy użyciu frameworku Laravel. O wygląd strony zadbał Bootstrap.";
        document.getElementById("s6").innerHTML = "Pozdrawiam, smaczej kawusi";
        break;
      case 'eng':
         document.getElementById("s1").innerHTML = "WAREHOUSE";
        document.getElementById("s2").innerHTML = "Search warehouse";
        document.getElementById("s3").innerHTML = "Login";
        document.getElementById("s4").innerHTML = "About app";
        document.getElementById("s5").innerHTML = "The application was created by Marceli Hryniuk for a credit project in Web Applications I. It was created using the Laravel framework. Bootstrap took care of the look of the page.";
        document.getElementById("s6").innerHTML = "Good luck, have fun";
      break;
    }
  }
</script>

@stop