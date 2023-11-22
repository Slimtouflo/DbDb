@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="" method="POST">
        @csrf
        Nom de la race :<input type="text" name="name" value="{{ old('name') }}"><br>
        Planète d'origine :<input type="text" name="planet" value="{{ old('planet') }}"><br>
        <button>Sauvegarder</button>
    </form>
@endsection