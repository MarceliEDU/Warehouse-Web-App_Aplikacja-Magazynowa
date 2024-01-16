@extends('layout')
@section('content')

    <h1>Dodawanie produktu</h1>

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
            
            <button type="submit">Stwórz produkt</button>
        </form>

@stop