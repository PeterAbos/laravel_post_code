@extends('layout')

@section('content')

<h1>{{ $county->name }}</h1>

<table border="2">
    <tr><td>Id: {{ $county->id }}</td></tr>
    <tr><td>Name: {{ $county->name }}</td></tr>
    <tr><td>badge_url: {{ $county->badge_url }}</td></tr>
    <tr><td><img src="{{$county->badge_url}}" alt="Megye címer" width="10%"></td></tr>
</table>


    
@endsection