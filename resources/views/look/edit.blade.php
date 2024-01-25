@extends('layout')
@section('content')

<div class="text-center mt-5">

    <form action="{{ url('look/' .$produkt->id)}}" method="post" class="p-5 bg-white rounded">
        {!! csrf_field() !!}
        {!! method_field('PATCH') !!}
        <input type="hidden" name="id" id="id" value="{{$produkt->id}}">

        <p class="lead">Przenieś <i class="text-primary">{{ $produkt->nazwa }}</i> na dział:</p>

        <select id="id_dzialy" name="id_dzialy" class="" required>
        @foreach($dz as $d)
            @if($d->id == $produkt->id_dzialy)
                <option value="{{ $d->id }}" selected>{{ $d->dzial }}</option>
            @else
                <option value="{{ $d->id }}">{{ $d->dzial }}</option>
            @endif
        @endforeach
        </select>
        <br/>

        <button type="submit" class="btn btn-success btn-sm mt-4">Zapisz</button>
    </form>

</div>

@stop