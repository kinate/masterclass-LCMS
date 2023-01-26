<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function viewLandingCourse($id_encoded){
        $id=\base64_decode($id_encoded);
        $course = Course::where('id',$id)->with('curriculum')->first();
        
        return view('viewCourse')->with([
            'course'=>$course,
        ]);
    }



}
