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
                        <h2 class="mb-4">Register</h2>
                        <form  action="" method="POST">
                            @csrf
                            <label for=""><b>Student FullName</b></label> 
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                    <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                                </div>  
                                <input type="text" name="student_name" class="form-control" placeholder="Student Name" value="{{old('student_name')}}" aria-label="Student Name" aria-describedby="basic-addon1" required>
                            </div>

                            <label for=""><b>Student Email</b></label> 
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                    <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-envelope"></i></span>
                                </div>  
                                <input type="email" name="student_email" class="form-control" placeholder="Student Email" value="{{old('student_email')}}" aria-label="Student Email" aria-describedby="basic-addon1" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for=""><b>Student Level</b></label> 
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">              
                                           <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-house"></i></span>
                                       </div>  
                                       <input type="email" name="student_level" class="form-control" placeholder="Student Level" value="{{old('student_level')}}" aria-label="Student Level" aria-describedby="basic-addon1" required>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Student Gender</b></label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-male"></i></span>
                                            </div>
                                            <select class="form-control" name="student_gender" id="">
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
                                            <select class="form-control" name="student_gender" id="">
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
                                    <input type="password" name="password" class="form-control" placeholder="Student Password"  aria-label="Student Password" aria-describedby="basic-addon1">
                                </div>

                                <label for=""><b>Confirm Password</b></label> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">              
                                        <span class="input-group-text bg-info text-light" id="basic-addon1"><i class="icofont-lock"></i></span>
                                    </div>  
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"  aria-label="Student Password" aria-describedby="basic-addon1">
                                </div>

                                <input type="submit" class="btn btn-info text-light" value="Register">
                        </form>
                    </div>
                </div>
           </div>
        </div>
    </body>
</html>
