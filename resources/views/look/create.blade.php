@extends('layout')
@section('content')

@if(Auth::user()->rola=="admin" || Auth::user()->rola=="zmianowy")
    
    <form action="{{ url('look') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-sm w-100 mt-2 mb-2" id="s1">Potwierdź</button>
    
    <div class="form-check text-center" style="font-weight: bold">
        <label class="w-25">
            <input class="form-check-input" type="radio" name="inout" id="in" value="out" required>
            <span id="s2">Wydanie towaru</span>
        </label>
        <label class="w-25">
            <input class="form-check-input" type="radio" name="inout" id="out" value="in" required>
            <span id="s3">Odbiór towaru</span>
        </label>
    </div>

    <div class="row bg-white rounded pt-3 pb-3 rounded">  
        
        @foreach($tab as $t)
            <div class="col-12 col-sm-6 pl-5 pr-5">
                <h4 class="text-center border-bottom border-primary">{{ $t['dzial'] }}</h4>
                
                <ul style="list-style-type: none;" class="m-0 p-0">
                @foreach($t['produkty'] as $p)
                    <li>
                        <label>
                            <input type="checkbox" id="{{ $p->id }}" name="{{  $p->id }}" value="{{  $p->id }}">
                            {{ $p->nazwa }}
                        </label>
                        <span style="float: right">
                            <input type="number" id="number{{  $p->id }}" name="number{{  $p->id }}" min="0" max="{{  $p->ilosc }}">
                        </span>
                    </li>
                       
                @endforeach
                </ul>
            </div>

        @endforeach
        
    </div>
    </form>


<script>
  function siteLang(){
    switch(getCookie('lang')){
      case 'pl':
        document.getElementById("s1").innerHTML = "Potwierdź";
        document.getElementById("s2").innerHTML = "Wydanie towaru";
        document.getElementById("s3").innerHTML = "Odbiór towaru";
        break;
      case 'eng':
        document.getElementById("s1").innerHTML = "Confirm";
        document.getElementById("s2").innerHTML = "Withdrawal";
        document.getElementById("s3").innerHTML = "Delivery";
      break;
    }
  }
</script>

@else

    <div class="text-center mt-5 bg-secondary p-5 rounded">
        <h2 class="text-white" id="s1">Brak dostępu</h2>
        <p class="text-white" id="s2">Brak uprawnieć do przyjmowania/wydawania towaru.</p>
        <a href="/look" class="d-block mt-4 mb-1 p-3 bg-info text-center rounded text-white" id="s3">
            Wróć do przeglądu
         </a>
    </div>

<script>
  function siteLang(){
    switch(getCookie('lang')){
      case 'pl':
        document.getElementById("s1").innerHTML = "Brak dostępu";
        document.getElementById("s2").innerHTML = "Brak uprawnieć do przyjmowania/wydawania towaru.";
        document.getElementById("s3").innerHTML = "Wróć do przeglądu";
        break;
      case 'eng':
        document.getElementById("s1").innerHTML = "No permission";
        document.getElementById("s2").innerHTML = "You don't have access to withdraw/take delivery.";
        document.getElementById("s3").innerHTML = "Go back";
      break;
    }
  }
</script>

@endif

@stop