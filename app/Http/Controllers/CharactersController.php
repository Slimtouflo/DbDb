<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Races;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index()
    {
        return view ('characters/index', [
            'characters' => Characters::with('race')->get(),
        ]);
    }

    public function show($id)
    {
        $character = Characters::findOrFail($id);

        return view('characters/character-show', ['character' => $character]);
    }

    public function create()
    {
        return view('characters/create', [
            'races' => Races::all()->sortBy('name'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'size'=>'required|min:0',
            'weight'=>'required|min:0',
            'hair'=>'',
            'story'=>'required',
        ]);

        $character = new Characters();
        $character->name = $request->name;
        $character->size = $request->size;
        $character->weight = $request->weight;
        $character->hair = $request->hair;
        $character->race_id = $request->race_id;
        $character->story = $request->story;
        $character->image = $request->image;
        $character->save();

        return redirect('/personnages');
    }

    public function edit($id)
    {
        $character = Characters::findOrFail($id);

        return view('characters/edit', [
            'races'     => Races::all()->sortBy('name'),
            'characters'=> $character,
        ]);
    }

    public function update(Request $request, $id)
    {
        $character = Characters::FindOrFail($id);

        $request->validate([
            'name'=>'required|min:3',
            'size'=>'required|min:0',
            'weight'=>'required|min:0',
            'hair'=>'',
            'story'=>'required',
        ]);

        $character = new Characters();
        $character->name = $request->name;
        $character->size = $request->size;
        $character->weight = $request->weight;
        $character->hair = $request->hair;
        $character->race_id = $request->race_id;
        $character->story = $request->story;
        $character->image = $request->image;
        $character->save();

        return redirect('/personnages');
    }

    public function destroy($id)
    {
        $character = Characters::FindOrFail($id);
        Characters::destroy($id);
        return redirect('/personnages');
    }
}
