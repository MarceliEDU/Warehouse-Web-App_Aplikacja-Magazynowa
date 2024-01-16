@extends('layout')
@section('content')

    <h1>Dodawanie dostawcy</h1>

    <form action="{{ url('dostawcy') }}" method="POST">
            @csrf

            <label>Nazwa
            <input type="text" id="nazwa" name="nazwa" required>
            </label>
            <br/>

            <label>Telefon
            <input type="text" id="telefon" name="telefon" required>
            </label>
            
            <button type="submit">Dodaj dostawcę</button>
        </form>

@stop