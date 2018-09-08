<?php

namespace App\Http\Controllers;

use App\Objective;
use App\Http\Resources\Objective as ObjectiveResource;

class ObjectiveController extends Controller
{

    public function index()
    {
        return ObjectiveResource::collection(Objective::all());
    }

    public function show(Objective $objective)
    {
        return new ObjectiveResource($objective);
    }

}
