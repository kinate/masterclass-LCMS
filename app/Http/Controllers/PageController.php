<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class PageController extends Controller
{
    public function landing(){
        $courses = Course::orderBy('id','desc')->get();
        return view('landing')->with([
            'courses'=>$courses,
        ]);
    }
}
