@extends('layout')
@section('content')

   

   <div class="row mt-2">
      <div class="col-12 rounded text-center text-light p-2" style="background-image: url(' {{ url('/img/main_photo.jpg') }} '); background-size: cover;">
         <h1 style="font-size: 11vw; text-shadow: 0px 0px 15px black;" class="text-primary display-1">MAGAZYN</h1>
      </div>

      <div class="col-sm-6 col-12">
         <a href="/look" class="d-block mt-2 mb-1 p-sm-5 p-3 bg-warning text-center rounded text-white" style="font-size: 2vw;">
            Przeglądaj magazyn
         </a>
         <a href="/login" class="d-block mt-2 mb-1 p-sm-5 p-3 bg-info text-center rounded text-white" style="font-size: 2vw;">
            Zaloguj się
         </a>
      </div>

      <div class="col-sm-6 col-12">
         <div class="mt-2 mb-1 bg-white rounded p-2">
            <h2 class="text-center display-5 mt-2" style="font-size: 4vw;">O Aplikacji</h2>
            <p class="text-secondary" style="text-align: justify;">
               Aplikacja została stworzona przez Marcelego Hryniuka na zaliczenie projektu z przedmiotu Aplikacje Internetowe I. Została stworzona przy użyciu frameworku Laravel. O wygląd strony zadbał Bootstrap.
            </p>
            <p class="text-center text-warning">Pozdrawiam, smaczej kawusi</p>
         </div>
      </div>


   </div>


@stop