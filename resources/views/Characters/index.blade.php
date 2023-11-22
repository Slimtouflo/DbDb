@extends('layouts/app')

@section('content')
    <div class="flex gap-10 mb-6">
        <h1 class="text-3xl">Personnages</h1>
        <a href="/personnages/creer"
            class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer un
            personnages</a>
    </div>

    @foreach ($characters as $character)
        <div class="flex -mx-3 my-10 gap-10">
            <div class="w-2/5">
                <a href="/personnages/{{ $character->id }}">
                    <img src="{{ $character->image }}" alt="{{ $character->name }}">
                </a>
            </div>
            <div class="w-3/5">
                <div class="text-center">
                    <a href="/personnages/{{ $character->id }}">
                        <h1 class="text-3xl">{{ $character->name }}</h1>
                    </a>
                </div>
                <div>
                    <p>Taille : {{ $character->size }}cm </p>
                    <p>Poids : {{ $character->weight }}kg </p>
                    <p>Cheveux : {{ $character->hair }} </p>
                    <p>Race : {{ $character->race_id }} </p>
                    <p>Histoire : {{ $character->story }} </p>
                    <div class="mx-3 mb-3 flex justify-between gap-2">
                        <a class="text-sm bg-gray-500 px-2 py-1 text-gray-200 w-1/2 text-center"
                            href="/personnages/{{ $character->id }}/modifier">Modifier</a>
                        <a class="text-sm bg-red-500 px-2 py-1 text-gray-200 w-1/2 text-center" href="/personnages/{{ $character->id }}/supprimer"
                            onclick='return confirm("Êtes-vous sûr de vouloir supprimer le film {{ $character->name }} ?")'>Supprimer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
