<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save student to database

        //Validate
        $request->validate([
            'student_name' => 'required | string | max:255',
            'student_email' => 'required | email | max:255',
            'student_admission_number' => 'required | string | max:255',
            'student_level' => 'required | string | max:255',
            'student_gender' => 'required | string | max:255 | not_in:0',
            'student_course' => 'required | string | max:255 | not_in:0',
            'password' => 'required | string | min:8 | confirmed',
            'password_confirmation' => 'required'
        ]);
        
        //Hash Passwords
        $hashed_password = Hash::make($request->password);

        // dd($hashed_password);

        //Generate Registration Number
        $letters = 'ABC';
        $year = date('y');
        $course = substr($request->student_course, 0, 3);

        $ref_number = mt_rand(1000, 1999);

        dd($ref_number);



        //Save
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
