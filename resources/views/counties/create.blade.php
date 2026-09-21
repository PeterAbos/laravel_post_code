@extends('layout')

@section('content')

<h1>Új megye hozzáadása</h1>

@error('name')
<div>{{ $message }}</div>
@enderror

<form action="{{ route('counties.store') }}" method="POST">
    @csrf
    <fieldset>
        <label for="name">Megye neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="badge_url">Megye címerének URL-je</label>
        <input type="text" name="badge_url" id="badge_url">
    </fieldset>
    <button type="submit">Mentés</button>
</form>
    
@endsection