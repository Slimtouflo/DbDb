@extends('layouts/app')

@section('content')
    <h1>Les races de l'univers de Dragon Ball</h1>
    <a href="/races/creer">Créer une race</a>

    <div>
        @foreach ($races as $race)
            <div>
                <h2>Les {{ $race->name }} de la planète {{ $race->planet }}</h2>
            </div>
            <a class="text-sm bg-red-500 px-2 py-1 text-gray-200 w-1/2 text-center" href="/races/{{ $race->id }}/supprimer"
                onclick='return confirm("Êtes-vous sûr de vouloir supprimer la race {{ $race->name }} ?")'>Supprimer
            </a>
        @endforeach
    </div>
@endsection