@extends('layout')

@section('content')

<h1>{{ $county->name }}</h1>

<table border="2">
    <tr>
        <th>ID</th>
        <td>{{ $county->id }}</td>
    </tr>
    <tr>
        <th>Név</th>
        <td>{{ $county->name }}</td>
    </tr>
    <tr>
        <th>Címer URL</th>
        <td>{{ $county->badge_url }}</td>
    </tr>
</table>

<img src="{{$county->badge_url}}" alt="Megye címer" width="10%">

    
@endsection