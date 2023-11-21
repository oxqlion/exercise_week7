<?php

namespace App\Http\Controllers;

use App\Models\StudentExtracurricular;
use Illuminate\Http\Request;

class StudentExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentExtracurriculars = StudentExtracurricular::with(['banyakStudent', 'banyakExtra', 'banyakSatpam'])->get();
        return view('weak', compact('studentExtracurriculars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentExtracurricular $studentExtracurricular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentExtracurricular $studentExtracurricular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentExtracurricular $studentExtracurricular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentExtracurricular $studentExtracurricular)
    {
        //
    }
}
