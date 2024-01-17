@extends('layout')
@section('content')

    @if(session('message'))          
        </div>
        <script>
            alert("{{ session('message') }}"); 
        </script>
    @endif

<div class="container">
    
    <div class="row">
        <a href="{{ url('/look/create') }}" class="btn btn-success btn-sm mt-2 mb-2 col-12 col-sm-6">
            Zejście
        </a>
        <a href="{{ url('/look/create') }}" class="btn btn-info btn-sm mt-2 mb-2 col-12 col-sm-6">
            Dostawa
        </a>
    </div>

    <h2 class="text-center">Magazyn</h2>

    <div class="row">
        @foreach($tab as $t)
            <div class="col-12 col-sm-6 pl-5 pr-5">
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

@stop


