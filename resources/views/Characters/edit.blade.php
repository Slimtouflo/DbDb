@extends('layouts.app')

@section('content')
    <a href="/personnages" class="text-gray-500">Retour aux personnages</a>
    <h1 class="text-3xl mb-3">Modifier un perso</h1>

    @foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form action="" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="block">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name',) }}" class="rounded shadow border-gray-300 w-full">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="size" class="block">Taille</label>
            <input type="integer" name="size" id="size" class="rounded shadow border-gray-300 w-full">{{ old('size') }}
            @error('size')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="weight" class="block">Poids</label>
            <input type="integer" name="weight" id="weight" value="{{ old('weight') }}" class="rounded shadow border-gray-300 w-full">
            @error('weight')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="hair" class="block">Cheveux</label>
            <input type="text" name="hair" id="hair" value="{{ old('hair') }}" class="rounded shadow border-gray-300 w-full">
            @error('hair')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="story" class="block">Histoire</label>
            <textarea type="text" name="story" id="story" value="{{ old('story') }}" class="rounded shadow border-gray-300 w-full"></textarea>
            @error('story')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="race" class="block">Race</label>
            <select name="race" id="race" class="rounded shadow border-gray-300 w-full">
                @foreach ($races as $race)
                    <option @selected($race->id == old('race')) value="{{ $race->id }}">{{ $race->name }}</option>
                @endforeach
            </select>
            @error('race')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Modifier</button>
    </form>
@endsection