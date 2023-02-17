<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Mail\enrollConfimation;

class EnrollmentController extends Controller
{
    public function enroll_free_course(Request $request ){

        //Data--
        $name=$request->name;
        $course=$request->course;

        if($sendMail=Mail::to($request->email)->send(new enrollConfimation($name,$course)))
            {
                $enrollData = Enrollment::create([
                    'course_id' => $request->course_id,
                    'course' => $request->course,
                    'applicant_name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'total_fee' => 0,
                    'paid_amount' => 0,
                    'status' => 1,
                    'comment' => $request->comment,
                ]);

                $data = $request->all();
                return response()->json($data);
            }
        else{
            //return with error message
            return response()->json($data);
        }    
        

        

    }
}
