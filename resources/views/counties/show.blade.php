@extends('layout')

@section('content')

<h1>{{ $county->name }}</h1>


<p>Id: {{ $county->id }}</p>
<p>Name: {{ $county->name }}</p>
<p>badge_url: {{ $county->badge_url }}</p>
<img src="{{$county->badge_url}}" alt="Megye címer" width="10%">

    
@endsection