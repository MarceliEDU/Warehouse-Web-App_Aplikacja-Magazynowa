@extends('layout')
@section('content')

    @auth
    
    <div>
        <a href="{{ url('/look/create') }}" class="btn btn-info btn-sm mt-2 mb-2 w-100" id="s2">
            Wydaj / Odbierz towar
        </a>
    </div>

    <h2 class="text-center" id="s1">Magazyn</h2>

    <div class="row">
        @foreach($tab as $t)
            <div class="col-12 col-sm-6 pl-5 pr-5 bg-white" style="border: 7px outset;">
                <h4 class="text-center border-bottom border-primary">{{ $t['dzial'] }}</h4>
                
                <ol>
                @foreach($t['produkty'] as $p)
                    <li>
                        {{ $p->nazwa }}
                        <span style="float: right">
                            {{ $p->ilosc }} |
                            <a href="{{ url('/look/' . $p->id . '/edit') }}"><i class="bi bi-arrow-up-right-square text-primary"></i></a>
                        </span>
                    </li>
                       
                @endforeach
                </ol>
            </div>


        @endforeach
    </div>

</div>

<script>
    function siteLang(){
    switch(getCookie('lang')){
      case 'pl':
        document.getElementById("s1").innerHTML = "Magazyn";
        document.getElementById("s2").innerHTML = "Wydaj / Odbierz towar";
        break;
      case 'eng':
        document.getElementById("s1").innerHTML = "Warehouse";
        document.getElementById("s2").innerHTML = "Product withdrawal / delivery";
      break;
    }
  }
</script>

  @endauth
  @guest

    <div class="text-center mt-5 bg-secondary p-5 rounded">
        <h2 class="text-white">Brak dostępu</h2>
        <p class="text-white">Wyłącznie zalogowane osoby mają dostęp do tego zasobu</p>
        <a href="/login" class="d-block mt-4 mb-1 p-3 bg-info text-center rounded text-white">
            Zaloguj się
         </a>
    </div>

  @endguest

@stop


