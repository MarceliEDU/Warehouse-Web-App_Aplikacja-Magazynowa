@extends('layout')
@section('content')

    <h1 class="text-center">Dodawanie dostawcy</h1>

    <form action="{{ url('dostawcy') }}" method="POST">
            @csrf

            <label>Nazwa
            <input type="text" id="nazwa" name="nazwa" required>
            </label>
            <br/>

            <label>Telefon
            <input type="text" id="telefon" name="telefon" required>
            </label>
            <br/>
            
            <button type="submit"  class="btn btn-success btn-sm mt-4">Dodaj dostawcę</button>
        </form>

@stop