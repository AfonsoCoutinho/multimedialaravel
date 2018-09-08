<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use App\Http\Resources\Offer as OfferResource;

class OfferController extends Controller
{
    public function index()
    {
        return OfferResource::collection(Offer::all());
    }

    public function show(Offer $offer)
    {
        return new OfferResource($offer);
    }
}
