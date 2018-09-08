<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Resources\Course as CourseResource;

class CourseController extends Controller
{

    public function index()
    {
        return new CourseResource(Course::find(1));
    }
}
