@extends('layout')
@section('content')

    <h1 class="text-center">Edycja działu</h1>

    <form action="{{ url('dzialy/' .$dzial->id)}}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}
        <input type="hidden" name="id" id="id" value="{{$dzial->id}}">
        <label>Dział
            <input type="text" id="dzial" name="dzial" value="{{$dzial->dzial}}" required>
        </label>
        <br/>

        <button type="submit" class="btn btn-success btn-sm mt-4">Zapisz</button>
    </form>

@stop