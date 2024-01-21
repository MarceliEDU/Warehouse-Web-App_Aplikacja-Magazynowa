@extends('layout')
@section('content')

    <h1 class="text-center">Dodawanie działu</h1>

    <form action="{{ url('dzialy') }}" method="POST">
            @csrf

            <label>Nowy dział
            <input type="text" id="dzial" name="dzial" required>
            </label>
            <br/>
            
            <button type="submit" class="btn btn-success btn-sm mt-4">Stwórz dział</button>
        </form>

@stop