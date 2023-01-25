<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function viewLandingCourse(){
        return view('viewCourse');
    }
}
