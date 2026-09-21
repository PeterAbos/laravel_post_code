@extends('layout')

@section('content')

<h1>{{ $city->name }}</h1>

<table border="2">
    <tr>
        <th>ID</th>
        <td>{{ $city->id }}</td>
    </tr>
    <tr>
        <th>Irányítószám</th>
        <td>{{ $city->zip_code }}</td>
    </tr>
    <tr>
        <th>Név</th>
        <td>{{ $city->name }}</td>
    </tr>
    <tr>
        <th>Népességszám</th>
        <td>{{ $city->population }}</td>
    </tr>
    <tr>
        <th>Megye</th>
        <td>{{ $city->county->name }}</td>
    </tr>
</table>
    
@endsection