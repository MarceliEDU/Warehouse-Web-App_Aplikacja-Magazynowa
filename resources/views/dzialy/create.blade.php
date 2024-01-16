@extends('layout')
@section('content')

    <h1>Dodawanie działu</h1>

    <form action="{{ url('dzialy') }}" method="POST">
            @csrf

            <label>Nowy dział
            <input type="text" id="dzial" name="dzial" required>
            </label>
            
            <button type="submit">Stwórz dział</button>
        </form>

@stop