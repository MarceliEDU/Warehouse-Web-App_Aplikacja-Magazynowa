@extends('layout')
@section('content')

<div class="container">

    @if(session('message'))          
        </div>
        <script>
            alert("{{ session('message') }}"); 
        </script>
    @endif

    <a href="{{ url('/dzialy/create') }}" class="btn btn-success btn-sm mt-2 mb-2">
        Dodaj dział
    </a>

    <table class="table table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th >Id</th>
                <th >Dział</th>
                <th >Działania</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dz as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->dzial }}</td>
                <td>
                    <a href="{{ url('/dzialy/' . $d->id . '/edit') }}"><button class="btn btn-primary btn-sm">Edytuj</button></a>
                    <form method="POST" action="{{ url('/dzialy/' . $d->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Czy na pewno chcesz usunąć dział?&quot;)">Usun</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@stop


