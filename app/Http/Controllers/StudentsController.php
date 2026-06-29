<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Laravel\Prompts\Task;

class StudentsController extends Controller
{
    public function store(Request $request)
    {
        $student = new Task();

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        if ($student->save()) {
            return "Student Added Successfully";
        }

        return "Failed";
    }
}