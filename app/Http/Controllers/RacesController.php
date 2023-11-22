<?php

namespace App\Http\Controllers;

use App\Models\Races;
use Illuminate\Http\Request;

class RacesController extends Controller
{
    public function index()
    {
        return view('races/index', [
            'races' => Races::all(),
        ]);
    }

    public function create()
    {
        return view('races/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'planet' => 'nullable',
        ]);

        $race = new Races();
        $race->name = $request->name;
        $race->planet = $request->planet;
        $race->save();

        return redirect('/races');
    }
}
