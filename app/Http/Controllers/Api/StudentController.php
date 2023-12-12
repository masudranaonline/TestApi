<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\StudentResource;
use Exception;
use PhpParser\Node\Stmt\TryCatch;


class StudentController extends Controller
{
    public function index() {
        $student = Student::all();
        throw new Exception('something went wrong');
        return response()->json(new StudentCollection($student));
        // return response()->json(StudentResource::collection($student));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return "Hello";

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->address = $request->address;

        $student->save();

        return response([
            'success' => 'Successfully created',
        ]);
        return $student;

    }

    public function show(Student $student) {
        throw new Exception('something went wrong!');
        return response()->json(new StudentResource($student));
    }

    
}
