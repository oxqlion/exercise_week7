<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request) {

        if($request->has('search')) {
            $students = Student::where('name', 'like','%'.$request->search.'%')->paginate(5)->withQueryString();
        } else {
            $students = Student::all();
        }

        return view('students', [
            'students' => $students
        ]);
    }

    public function show(Student $writer) {
        // $student = Student::find($id);

        return view('show', [
            'student' => $writer
        ]);
    }
}
