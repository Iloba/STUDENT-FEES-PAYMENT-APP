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
        //return all students
        $students = Student::all();

        return view('admin.students-list')->with(['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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
            'student_email' => 'required | email | max:255 | unique:students',
            'student_admission_number' => 'required | string | max:255 | unique:students',
            'student_level' => 'required | string | max:255',
            'student_gender' => 'required | string | max:255 | not_in:0',
            'student_course' => 'required | string | max:255 | not_in:0',
            'password' => 'required | string | min:8 | max:15 | confirmed',
            'password_confirmation' => 'required'
        ]);
        
        //Hash Passwords
        $hashed_password = Hash::make($request->password);

        // dd($hashed_password);

        //Generate Registration Number
        $letters = 'ABC';
        $year = date('y');
        $course = substr(strtoupper($request->student_course), 0, 3);
        $ref_number = mt_rand(1000, 1999);

        // dd($ref_number);
        
        $student_reg_number = $letters.'/'.$year.'/'.$course.'/'.$ref_number;

        // dd($student_reg_number);
    
        //Save
        $student = new Student;
        $student->student_name = $request->student_name; //Student Name
        $student->student_email = $request->student_email; //Student Email
        $student->student_reg_number = $student_reg_number; //Student Registration Number
        $student->student_admission_number = $request->student_admission_number; //Student Admission Number
        $student->student_level = $request->student_level; //Student level
        $student->student_gender = $request->student_gender; //Student Gender
        $student->student_course = $request->student_course; //Student Course
        $student->password = $hashed_password; // Student Password

        $student->save();

        //if Creation was sucessful redirect to dashboard
        if($student->save()){
            $request->session()->put('LoggedUser', $student->id);

            return redirect(route('student-profile'))->with('status', 'Registration Successful');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show Student Detail
        $student = Student::find($id);

        return view('admin.student-detail')->with(['student' => $student]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);

        return view('admin.edit-student')->with(['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update Student

        //Validate
        $request->validate([
            'student_name' => 'required | string | max:255',
            'student_email' => 'required | email | max:255 ',
            'student_admission_number' => 'required | string | max:255',
            'student_level' => 'required | string | max:255',
            'student_gender' => 'required | string | max:255 | not_in:0',
            'student_course' => 'required | string | max:255 | not_in:0',
            'password' => 'required | string | min:8 | max:15 | confirmed',
            'password_confirmation' => 'required'
        ]);

        $student = Student::find($id);



        //check if course  was changed

        //Hash Passwords
        $hashed_password = Hash::make($request->password);

        //Save

      
        $student->student_name = $request->student_name; //Student Name
        $student->student_email = $request->student_email; //Student Email
        $student->student_admission_number = $request->student_admission_number; //Student Admission Number
        $student->student_level = $request->student_level; //Student level
        $student->student_gender = $request->student_gender; //Student Gender
        $student->student_course = $request->student_course; //Student Course
        $student->password = $hashed_password; // Student Password

        $student->save();

         //if Update was sucessful
         if($student->save()){
            return redirect(route('students-list'))->with('status', 'Update Successful');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Student

        $student = Student::find($id);

        $student->delete();

     
        return back()->with('status', 'Delete Operation Successful');       
        
    }
}
