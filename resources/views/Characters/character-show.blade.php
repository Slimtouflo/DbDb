@extends('layouts.app')

@section('content')
    <a href="/personnages" class="text-gray-500">Retour aux personnages</a>
    <div class="flex -mx-3 my-10 gap-10">
        <div class="w-2/5">
            <img src="{{ $character->image }}" alt="{{ $character->name }}">
        </div>
        <div class="w-3/5">
            <div class="text-center">
                <h1 class="text-3xl">{{ $character->name }}</h1>
            </div>
            <div>
                <p>Taille : {{ $character->size }}cm </p>
                <p>Poids : {{ $character->weight }}kg </p>
                <p>Cheveux : {{ $character->hair }} </p>
                <p>Race : </p>
                <p>Histoire : {{ $character->story }} </p>
            </div>
        </div>
    </div>
@endsection