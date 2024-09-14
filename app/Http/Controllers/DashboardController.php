<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $studentsCount = Student::count();
        $sectionsCount = Section::count();
        $classesCount = Classes::count();


        return inertia('Dashboard', [
            'studentsCount' => $studentsCount,
            'sectionsCount' => $sectionsCount,
            'classesCount' => $classesCount,
        ]);
    }
}
