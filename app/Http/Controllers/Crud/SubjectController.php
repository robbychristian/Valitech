<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function getUserSubjects(Request $request)
    {
        $subjects = Subjects::where('subject_semester', $request->semester)
            ->where('subject_year', $request->year_level)
            ->get();
        return $subjects;
    }

    public function getNextSubjects(Request $request)
    {
        $year_level = (int)$request->year_level;
        $semester = (int)$request->semester;
        if($request->semester == 2) {
            $year_level += 1;
        } else {
            $semester += 1;
        }
        $subjects = Subjects::where('subject_semester', $semester)
            ->where('subject_year', $year_level)
            ->get();
        return $subjects;
    }
}
