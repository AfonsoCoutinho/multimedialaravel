<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Resources\Notice as NoticeResource;

class NoticeController extends Controller
{
    public function index()
    {
        return NoticeResource::collection(Notice::all());
    }

    public function show(Notice $notice)
    {
        return new NoticeResource($notice);
    }
}
