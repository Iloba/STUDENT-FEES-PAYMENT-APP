@extends('layouts.students-nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} | <a href=""> Pay School Fees</a></div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h3>Hello This is Your Profile Page</h3>x
                    {{$loggedUserInfo->student_name}} <br>
                    {{$loggedUserInfo->student_email}}
                    <br>
                    <a href="{{route('student-logout')}}">Logout</a>  

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
