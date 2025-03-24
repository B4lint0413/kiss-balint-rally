<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Response;

class RegisterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegisterRequest $request)
    {
        $created = User::create($request->validated());
        return response()->json(['data' => ["message" => $created->name . " sikeresen regisztrálva"]]);
    }
}
