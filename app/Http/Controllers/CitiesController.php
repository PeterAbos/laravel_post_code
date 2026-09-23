<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = City::query();

        
        if ($request->filled('county')) {
            $query->where('id_county', '=', $request->county);
        }
        $cities = $query->get();


        $counties = County::all();

        return view('cities.index', compact('cities', 'counties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counties = County::all();

        return view('cities.create', compact('counties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'zip_code' => 'required|min:4|max:4',
                'name' => 'required|min:2'
            ],
            [
                'zip_code.required' => "Az irányítószám kötelező mező!",
                'zip_code.min' => "Az irányítószám 4 számból áll",
                'zip_code.max' => "Az irányítószám 4 számból áll",
                'name.required' => "A város neve kötelező mező!",
                'name.min' => "A város neve több mint 1 betű!",
            ]
        );

        $city = new City();
        $city->zip_code = $request->zip_code;
        $city->name = $request->name;
        $city->population = $request->population;
        $city->id_county = $request->id_county;
        $city->save();

        return redirect()->route('cities.index')->with('success', "Város létrehozva!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::find($id);

        return view('cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::find($id);
        $counties = County::all();

        return view('cities.edit', compact('city', 'counties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'zip_code' => 'required|min:4|max:4',
                'name' => 'required|min:2'
            ],
            [
                'zip_code.required' => "Az irányítószám kötelező mező!",
                'zip_code.min' => "Az irányítószám 4 számból áll",
                'zip_code.max' => "Az irányítószám 4 számból áll",
                'name.required' => "A város neve kötelező mező!",
                'name.min' => "A város neve több mint 1 betű!",
            ]
        );

        $city = City::find($id);
        $city->zip_code = $request->zip_code;
        $city->name = $request->name;
        $city->population = $request->population;
        $city->id_county = $request->id_county;
        $city->save();

        return redirect()->route('cities.index')->with('success', "Város szerkesztve!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find($id);
        $city->delete();

        return redirect()->route("cities.index")->with('success', 'Város sikeresen törölve!');
    }
}
