<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\Usage;
use App\Models\Thing;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place ::all();
        return view('place.index', compact('places'));
    }

    public function create()
    {
        $places = Place::all();

        return view('place.create', compact('places'));
    }

    public function store()
    {
        $data=\request()->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'is_repair'=>'',
            'is_working'=>'',
        ]);


        $place = Place ::create($data);
        return redirect()->route('main');
    }

    public function show(Place $place)
    {
        return view('place.show', compact('place'));
    }

    public function edit(Place $place)
    {
        return view('place.edit', compact('place'));
    }

    public function update(Place $place)
    {
        $data=\request()->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'is_repair'=>'',
            'is_working'=>'',
        ]);
        $place->update($data);
        return redirect()->route('places.show', $place->id);
    }

    public function destroy(Place $place)
    {
        while(Usage::where('place_id', $place->id)):
            $usage=Usage::where('place_id', $place->id)->first();
            if (!$usage)
                break;
            $thing=Thing::where('id', $usage->thing_id)->first();
            $usage->delete();
            $thing->delete();
        endwhile;
        $place->delete();
        return redirect()->route('main');
    }
}
