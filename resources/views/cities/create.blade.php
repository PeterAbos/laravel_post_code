@extends('layout')

@section('content')

<h1>Create City</h1>

@error('zip_code')
<div>{{ $message }}</div>
@enderror

@error('name')
<div>{{ $message }}</div>
@enderror

<form action="{{ route('cities.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="zip_code">Irányítószám</label>
        <input type="number" name="zip_code" id="zip_code" min="1000" max="9999">
    </fieldset>
    <fieldset>
        <label for="name">Város neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="population">Népességszám</label>
        <input type="number" name="population" id="population">
    </fieldset>
    <fieldset>
        <label for="id_county">Megye</label>
        <select name="id_county" id="id_county">
            @foreach ($counties as $county)
                <option value="{{ $county->id }}">{{ $county->name }}</option>
            @endforeach
        </select>
    </fieldset>
    <button type="submit">Mentés</button>
</form>
    
@endsection