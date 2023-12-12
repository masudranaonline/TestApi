<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->address = $request->address;

        $student->save();
        return back();

    }



    
}
