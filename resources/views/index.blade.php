<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    
         <!--icofont-->
        <link rel="stylesheet" href="{{asset('icofont/icofont/icofont.min.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                      
                            
                            @if (session()->has('LoggedUser'))
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{$loggedUserInfo->student_name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('student-logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('student-logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            @else

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('slogin') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @endif
                            
                      
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid mb-5" id="register-page">
            <div class="container mb-5" >
                <div class="row">
                    <div class="col-md-6">
                     &nbsp;
                    </div>
                     <div class="col-md-6 mb-5">
                         <div class="registration-form mt-5 shadow">
                             <h2 class="mb-4">Register</h2>
                             @include('layouts.error')
                             <form action="{{route('register-student')}}" method="POST">
                                 @csrf
                                 <label for=""><b>Student Full Name</b></label> 
                                  <div class="input-group mb-3">
                                     <div class="input-group-prepend">              
                                         <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                                     </div>  
                                     <input type="text" name="student_name" class="form-control  @error('student_name')  is-invalid   @enderror" placeholder="Student Name" value="{{old('student_name')}}" aria-label="Student Name" aria-describedby="basic-addon1" >
                                 </div>
     
                                <div class="row">
                                     <div class="col-md-6">
                                         <label for=""><b>Student Email</b></label> 
                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">              
                                                <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-envelope"></i></span>
                                            </div>  
                                            <input type="text" name="student_email" class="form-control  @error('student_email') is-invalid @enderror" placeholder="Student Email" value="{{old('student_email')}}" aria-label="Student Email" aria-describedby="basic-addon1" >
                                        </div>
                                     </div>
     
                                     <div class="col-md-6">
                                         <label for=""><b>Admission Number</b></label> 
                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">              
                                                <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-graduate"></i></span>
                                            </div>  
                                            <input type="text" name="student_admission_number" class="form-control  @error('student_admission_number') is-invalid @enderror" placeholder="Admission Number" value="{{old('student_admission_number')}}" aria-label="Student Email" aria-describedby="basic-addon1" >
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
                                            <input type="text" name="student_level" class="form-control  @error('student_level') is-invalid @enderror" placeholder="Student Level" value="{{old('student_level')}}" aria-label="Student Level" aria-describedby="basic-addon1" >
                                        </div>
                                     </div>
                                     <div class="col-md-6">
                                         <label for=""><b>Student Gender</b></label> 
                                             <div class="input-group mb-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-male"></i></span>
                                                 </div>
                                                 <select class="form-control  @error('student_gender') is-invalid @enderror" name="student_gender" id="">
                                                     <option value="">----Select----</option>
                                                     <option value="Male">Male</option>
                                                     <option value="Female">Female</option>
                                                 </select>
                                             </div>
                                     </div>
                                 </div>
     
     
                                 <label for=""><b>Session</b></label> 
                                 <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-book"></i></span>
                                     </div>
                                     <select class="form-control  @error('session') is-invalid @enderror" name="session" id="">
                                         <option value="">----Select----</option>
                                         <option value="2018/2019">2018/2019</option>
                                         <option value="2019/2020">2019/2020</option>
                                         <option value="2020/2021">2020/2021</option>
                                         <option value="2021/2022">2021/2022</option>
                                     </select>
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
     
                                     <input type="submit" name="submit" class="btn btn-info text-light" value="Register">
                             </form>
                         </div>
                     </div>
                </div>
             </div>
        </div>
 
    </body>
    <footer class="mt-5 shadow">
      <div class="links text-center">
            <a class="nav-link " href="{{route('login')}}">Admin-Login</a>
            <p class="text-secondary">&copy; 2021 | Student Payment</p>
      </div>
    </footer>
</html>
