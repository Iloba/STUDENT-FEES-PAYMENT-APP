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
    </body>
</html>
