@extends('layout')
@section('content')

<div class="container">

    <a href="{{ url('/produkty/create') }}" class="btn btn-success btn-sm mt-2 mb-2">
        Dodaj produkt
    </a>

    <table class="table table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Ilość</th>
                <th scope="col">Dział</th>
                <th scope="col">Dostawca</th>
                <th scope="col">Działania</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prod as $p)
            <tr>
                <td scope="row">{{ $p->id }}</td>
                <td>{{ $p->nazwa }}</td>
                <td>{{ $p->ilosc }}</td>
                <td>{{ $dz[$p->id_dzialy] }}</td>
                <td>{{ $dos[$p->id_dostawcy] }}</td>
                <td>
                    <a href="{{ url('/produkty/' . $p->id . '/edit') }}"><button class="btn btn-primary btn-sm">Edytuj</button></a>
                    <form method="POST" action="{{ url('/produkty/' . $p->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Czy na pewno chcesz usunąć produkt?&quot;)">Usun</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
    
@stop