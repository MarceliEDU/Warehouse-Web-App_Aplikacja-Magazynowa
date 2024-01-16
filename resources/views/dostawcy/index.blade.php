@extends('layout')
@section('content')

<div class="container">

    @if(session('message'))          
        </div>
        <script>
            alert("{{ session('message') }}"); 
        </script>
    @endif

    <a href="{{ url('/dostawcy/create') }}" class="btn btn-success btn-sm mt-2 mb-2">
        Dodaj dostawcę
    </a>

    <table class="table table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th >Id</th>
                <th >Nazwa</th>
                <th >Telefon</th>
                <th >Działania</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dos as $da)
            <tr>
                <td>{{ $da->id }}</td>
                <td>{{ $da->nazwa }}</td>
                <td>{{ $da->telefon }}</td>
                <td>
                    <a href="{{ url('/dostawcy/' . $da->id . '/edit') }}"><button class="btn btn-primary btn-sm">Edytuj</button></a>
                    <form method="POST" action="{{ url('/dostawcy/' . $da->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Czy na pewno chcesz usunąć dostawcę?&quot;)">Usun</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@stop


