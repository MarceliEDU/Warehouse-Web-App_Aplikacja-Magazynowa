@extends('layout')
@section('content')

    <form action="{{ url('produkty/' .$produkt->id)}}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}
        <input type="hidden" name="id" id="id" value="{{$produkt->id}}">

        <label>Nazwa
        <input type="text" id="nazwa" name="nazwa" value="{{$produkt->nazwa}}" required>
        </label>
        <br />

        <label>Ilość
        <input type="text" id="ilosc" name="ilosc" value="{{$produkt->ilosc}}" required>
        </label>
        <br />

        <label>Dział
        <select id="id_dzialy" name="id_dzialy" required>
        @foreach($dz as $d)
            @if($d->id == $produkt->id_dzialy)
                <option value="{{ $d->id }}" selected>{{ $d->dzial }}</option>
            @else
                <option value="{{ $d->id }}">{{ $d->dzial }}</option>
            @endif
        @endforeach
        </select>
        </label>
        <br />

        <label>Dostawca
        <select id="id_dostawcy" name="id_dostawcy" required>
        @foreach($dos as $d)
            @if($d->id == $produkt->id_dzialy)
                <option value="{{ $d->id }}" selected>{{ $d->nazwa }}</option>
            @else
                <option value="{{ $d->id }}">{{ $d->nazwa }}</option>
            @endif
        @endforeach
        </select>
        </label>

        <button type="submit">Zapisz</button>
    </form>

@stop