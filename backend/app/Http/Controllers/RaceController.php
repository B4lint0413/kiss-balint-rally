<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRaceRequest;
use App\Http\Requests\UpdateRaceRequest;
use App\Http\Resources\RaceResource;
use App\Models\Race;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RaceResource::collection(Race::with("teams")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRaceRequest $request)
    {
        return new RaceResource(Race::create($request->validated()->load("teams")));
    }

    /**
     * Display the specified resource.
     */
    public function show(Race $race)
    {
        return new RaceResource($race->load("teams"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Race $race)
    {
        $race->delete();
        return response()->noContent();
    }
}
