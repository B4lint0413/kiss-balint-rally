<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Support\Facades\Gate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TeamResource::collection(Team::with("race")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        return new TeamResource(Team::create($request->validated())->load("race"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return new TeamResource($team->load("race"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->validated());
        return new TeamResource($team->load("race"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if(Gate::denies("delete-team")){
            abort(403);
        }
        $team->delete();
        return response()->noContent();
    }
}
