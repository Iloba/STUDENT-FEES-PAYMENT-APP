<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentLogin extends Controller
{
    //login student
    public function loginStudent(Request $request){
    
        //Validate
        $request->validate([
            'username' => 'required | string | max:255',
            'password' => 'required | string | min:8 | max:12'
        ]);

        //Login Auth
        $student = Student::where(['student_email', '=', $request->username, 'student_admission_number', '=', $request->username])->first();


        if ($student){
           if(Hash::check($request->password, $student->password)){

                $request->session()->put('LoggedUser', $student->id);

                return redirect('student-dashboard');

           }else{
               return back()->with('error', 'Invalid Password');
           }
        }else{
            return back()->with('error', 'The provided credentials do not match our records.');
        }
    }
    public function profile(){
        return view('admin.student-profile');
    }
}
