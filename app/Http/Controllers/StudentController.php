<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $students = Student::where('name', 'like', '%' . $request->search . '%')->paginate(5)->withQueryString();
        } else {
            $students = Student::all();
        }

        return view('students', [
            'students' => $students
        ]);
    }

    public function show(Student $writer)
    {
        // $student = Student::find($id);

        return view('show', [
            'student' => $writer
        ]);
    }

    public function create()
    {
        return view('add_student');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'sosmed' => 'nullable|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'password' => 'required',
            'gender' => 'required|in:Male,Female,Other',
        ]);



        Student::create($validatedData);

        return redirect()->route('index');
    }
}
