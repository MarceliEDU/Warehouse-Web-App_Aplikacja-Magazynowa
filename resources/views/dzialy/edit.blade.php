@extends('layout')
@section('content')

    <form action="{{ url('dzialy/' .$dzial->id)}}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}
        <input type="hidden" name="id" id="id" value="{{$dzial->id}}">
        <label>Dział
            <input type="text" id="dzial" name="dzial" value="{{$dzial->dzial}}" required>
        </label>

        <button type="submit">Zapisz</button>
    </form>

@stop