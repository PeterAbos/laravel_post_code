@extends('layout')

@section('content')

<h1>Városok</h1>

<table border="2">
    <tr>
        <th>#</th>
        <th>zip_code</th>
        <th>name</th>
        <th>population</th>
        <th>county</th>
        <th colspan="3">Műveletek</th>
    </tr>
    @foreach ($cities as $city)
        <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->zip_code }}</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->population }}</td>
            <td>{{ $city->county?->name }}</td>
            <td><a href="{{ route('cities.show', $city->id) }}">Megjelenítés</a></td>
            <td><a href="{{ route('cities.edit', $city->id) }}">Szerkesztés</a></td>
            <td>
                <form action="{{ route('cities.destroy', $city->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    
@endsection