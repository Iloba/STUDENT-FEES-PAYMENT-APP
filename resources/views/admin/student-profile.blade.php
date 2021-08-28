@extends('layouts.students-nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-info btn-sm float-right text-light" href="{{route('pay-fees')}}"> Pay School Fees</a></div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        @if (session('LoggedUser'))
                        <h3>Hello {{$loggedUserInfo->student_name}}, This is Your Profile Page</h3>
                        <b>Name:</b> {{$loggedUserInfo->student_name}} <br>
                        <b> Email:</b> {{$loggedUserInfo->student_email}}
                        @endif
                    
                    <br>
                    <a href="{{route('student-logout')}}">Logout</a>  

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
