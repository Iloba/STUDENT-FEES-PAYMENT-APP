@extends('layouts.students-nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-6">
             <div class="registration-form mt-5 shadow">
                 <h2 class="mb-4">Login</h2>
                 @include('layouts.error')
                 <form action="{{route('student-login')}}" method="POST">
                     @csrf
                     <label for=""><b>Email/Admission Number</b></label> 
                      <div class="input-group mb-3">
                         <div class="input-group-prepend">              
                             <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                         </div>  
                         <input type="text" name="username" class="form-control  @error('username')  is-invalid   @enderror" placeholder="Email Address/Admission Number" value="{{old('username')}}" aria-label="Student Name" aria-describedby="basic-addon1" >
                     </div>

                    

                     <label for=""><b>Student Password</b></label> 
                         <div class="input-group mb-3">
                             <div class="input-group-prepend">              
                                 <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-lock"></i></span>
                             </div>  
                             <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Student Password"  aria-label="Student Password" aria-describedby="basic-addon1">
                         </div>

                         

                         <input type="submit" name="submit" class="btn btn-info text-light" value="Login">
                 </form>
             </div>
         </div>
    </div>
 </div>
@endsection
