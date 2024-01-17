@extends('layout')
@section('content')

<div class="container">
    
    <form action="{{ url('look') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-sm w-100 mt-2 mb-2">Potwierdź zejście</button>
    
    <div class="row">
        
        
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

</div>

@stop