@extends('layouts/app')

@section('content')
    <h1>Les races de l'univers de Dragon Ball</h1>
    <a href="/races/creer">Créer une race</a>

    <div>
        @foreach ($races as $race)
            <div>
                <h2>Les {{ $race->name }} de la planète {{ $race->planet }}</h2>
            </div>
        @endforeach
    </div>
@endsection