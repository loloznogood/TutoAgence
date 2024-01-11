@extends('base')

@section('title', 'Tous nos biens')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <div class="container">
        <h1>Bienvenue dans notre agence</h1>
        <p>Voici la liste de nos biens, profitez-en</p>
    </div>
</div>

<div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
        @foreach($properties as $property)
        <div class="col">
            @include('property.card')
        </div>
        @endforeach
    </div>
</div>

@endsection