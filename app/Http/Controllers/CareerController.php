<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use App\Http\Resources\Career as CareerResource;

class CareerController extends Controller
{
    public function index()
    {
        return CareerResource::collection(Career::all());
    }

    public function show(Career $career)
    {
        return new CareerResource($career);
    }
}
