@extends('layout')
@section('content')

<div class="container">
    
    <form action="{{ url('look') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-sm w-100 mt-2 mb-2">Potwierdź</button>
    
    <div class="form-check text-center">
        <label class="w-25">
            <input class="form-check-input" type="radio" name="inout" id="in" value="out" required>
            Wydanie towaru
        </label>
        <label class="w-25">
            <input class="form-check-input" type="radio" name="inout" id="out" value="in" required>
            Odbiór towaru
        </label>
    </div>

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