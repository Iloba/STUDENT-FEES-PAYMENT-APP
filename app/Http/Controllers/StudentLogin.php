<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentLogin extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }
    //login student
    public function loginStudent(Request $request){
    
        //Validate
        $request->validate([
            'username' => 'required | string | max:255',
            'password' => 'required | string | min:8 | max:15'
        ]);

        //Login Auth
        $student = Student::where('student_email', '=', $request->username)->orWhere('student_admission_number', '=', $request->username)->first();


        if ($student){
           if(Hash::check($request->password, $student->password)){

                //Create User Session
                $request->session()->put('LoggedUser', $student);

                return redirect(route('student-profile'));

           }else{
               return back()->with('error', 'Invalid Password');
           }
        }else{
            return back()->with('error', 'The provided credentials do not match our records. No Results Found!!');
        }
    }

  
    //Get Student Profile
    public function profile(){

        //Check if Session Exists
        if(session()->has('LoggedUser')){
            $student = Student::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'loggedUserInfo' => $student,
            ];
        }
        return view('admin.student-profile', $data);
    }

    //Logout Function
    public function logout(){
        //Check if User Session Exists
        if(session()->has('LoggedUser')){

            //Destroy Session
            session()->pull('LoggedUser');

            //Return Redirect
            return redirect(route('slogin'))->with('status', 'Logout Successful');

        }
    }
}
 