@extends('layout')
@section('content')

    <h1 class="text-center">Edycja dostawcy</h1>

    <form action="{{ url('dostawcy/' .$dostawca->id)}}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}
        <input type="hidden" name="id" id="id" value="{{$dostawca->id}}">
        
        <label>Nazwa
            <input type="text" id="nazwa" name="nazwa" value="{{$dostawca->nazwa}}" required>
        </label>
        <br/>

        <label>Telefon
            <input type="text" id="telefon" name="telefon" value="{{$dostawca->telefon}}" required>
        </label>
        <br/>

        <button type="submit" class="btn btn-success btn-sm mt-4">Zapisz</button>
    </form>

@stop