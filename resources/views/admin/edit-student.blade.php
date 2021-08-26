@extends('layouts.admin')
@section('content')
<div class="container">
    <a class="btn btn-info text-light" href="{{route('students-list')}}"><i class="icofont-arrow-left"></i></a>
    <div class="row justify-content-center">
       
         <div class="col-md-6">
             <div class="registration-form mt-5 shadow">
                 <h2 class="mb-4">Edit Student</h2>
                 @include('layouts.error')
                 <form action="{{route('update-student', $student->id)}}" method="POST">
                     @csrf
                     <label for=""><b>Student Full Name</b></label> 
                      <div class="input-group mb-3">
                         <div class="input-group-prepend">              
                             <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                         </div>  
                         <input type="text" name="student_name" class="form-control  @error('student_name')  is-invalid   @enderror" placeholder="Student Name" value="{{$student->student_name}}" aria-label="Student Name" aria-describedby="basic-addon1" >
                     </div>

                    <div class="row">
                         <div class="col-md-6">
                             <label for=""><b>Student Email</b></label> 
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                    <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-envelope"></i></span>
                                </div>  
                                <input type="text" name="student_email" class="form-control  @error('student_email') is-invalid @enderror" placeholder="Student Email" value="{{$student->student_email}}" aria-label="Student Email" aria-describedby="basic-addon1" >
                            </div>
                         </div>

                         <div class="col-md-6">
                             <label for=""><b>Admission Number</b></label> 
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                    <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-graduate"></i></span>
                                </div>  
                                <input type="text" name="student_admission_number" class="form-control  @error('student_admission_number') is-invalid @enderror" placeholder="Admission Number" value="{{$student->student_admission_number}}" aria-label="Student Email" aria-describedby="basic-addon1" >
                            </div>
                         </div>
                    </div>

                     <div class="row">
                         <div class="col-md-6">
                             <label for=""><b>Student Level</b></label> 
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                    <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-graduate"></i></span>
                                </div>  
                                <input type="text" name="student_level" class="form-control  @error('student_level') is-invalid @enderror" placeholder="Student Level" value="{{$student->student_level}}" aria-label="Student Level" aria-describedby="basic-addon1" >
                            </div>
                         </div>
                         <div class="col-md-6">
                             <label for=""><b>Student Gender</b></label> 
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-male"></i></span>
                                     </div>
                                     <select class="form-control  @error('student_gender') is-invalid @enderror"  name="student_gender" >
                                         <option value="">----Select----</option>
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                     </select>
                                 </div>
                         </div>
                     </div>

                     <label for=""><b>Student Course</b></label> 
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-book"></i></span>
                                     </div>
                                     <select class="form-control  @error('student_course') is-invalid @enderror" name="student_course" id="">
                                         <option value="">----Select----</option>
                                         <option value="Medcine">Medcine</option>
                                         <option value="Nursing">Nursing</option>
                                         <option value="Pharmacy">Pharmacy</option>
                                         <option value="Physics">Physics</option>
                                         <option value="Chemistry">Chemistry</option>
                                         <option value="Biology">Biology</option>
                                         
                                     </select>
                                 </div>

                     <label for=""><b>Student Password</b></label> 
                         <div class="input-group mb-3">
                             <div class="input-group-prepend">              
                                 <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-lock"></i></span>
                             </div>  
                             <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Student Password"  aria-label="Student Password" aria-describedby="basic-addon1">
                         </div>

                         <label for=""><b>Confirm Password</b></label> 
                         <div class="input-group mb-3">
                             <div class="input-group-prepend">              
                                 <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-lock"></i></span>
                             </div>  
                             <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password"  aria-label="Student Password" aria-describedby="basic-addon1">
                         </div>

                         <input type="submit" name="submit" class="btn btn-info text-light" value="Update">
                 </form>
             </div>
         </div>
    </div>
 </div>
@endsection