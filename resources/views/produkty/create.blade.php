@extends('layout')
@section('content')

    <h1 class="text-center">Dodawanie produktu</h1>

    <form action="{{ url('produkty') }}" method="POST">
            @csrf

            <label>Nazwa
            <input type="text" id="nazwa" name="nazwa" required>
            </label>
            <br />

            <label>Ilość
            <input type="text" id="ilosc" name="ilosc" required>
            </label>
            <br />

            <label>Dział
            <select id="id_dzialy" name="id_dzialy" required>
            @foreach($dz as $d)
                <option value="{{ $d->id }}">{{ $d->dzial }}</option>
            @endforeach
            </select>
            </label>
            <br />

            <label>Dostawca
            <select id="id_dostawcy" name="id_dostawcy" required>
            @foreach($dos as $d)
                <option value="{{ $d->id }}">{{ $d->nazwa }}</option>
            @endforeach
            </select>
            </label>
            <br/>
            
            <button type="submit" class="btn btn-success btn-sm mt-4">Stwórz produkt</button>
        </form>

@stop