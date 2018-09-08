<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Resources\Subject as SubjectResource;

class SubjectController extends Controller
{
    public function index()
    {
        return SubjectResource::collection(Subject::all());
    }

    public function indexByYear(int $year) {
        $lastSemester = $year * 2;
        $semesters = [$lastSemester - 1, $lastSemester];

        return SubjectResource::collection(Subject::where('semester', $semesters[0])->orWhere('semester', $semesters[1])->get());
    }
}
