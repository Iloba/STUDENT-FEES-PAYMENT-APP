@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="container">
                        <div class="row p-5 gx-5">
                            <div class="col-md-4  bg-gradient-primary text-light  shadow-sm p-5 mb-3">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="text-center"><i  style="font-size: 50px;" class="icofont icofont-users "></i></p> <br>
                                   <h2 class="text-light"> <a href="{{route('students-list')}}" class="text-light" >All Students</a></h2> <br>
                                    <div class="bg-light p-2 rounded">
                                        <progress value="50" max="100"></progress>
                                    </div>
                                </div>
                       
                            </div>
                            <div class="col-md-4  bg-gradient-primary text-light   shadow-sm p-5">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="text-center"><i  style="font-size: 50px;" class="icofont icofont-money "></i></p> <br>
                                    <h2 class="text-light"> <a href="#" class="text-light" >All Payments</a></h2> <br>
                                    <div class="bg-light p-2 rounded">
                                        <progress value="50" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 bg-gradient-primary text-light   shadow-sm p-5">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="text-center"><i style="font-size: 50px;" class="icofont icofont-money "></i></p> <br>
                                    <h2 class="text-light"> <a href="#" class="text-light" >All Debts</a></h2> <br>
                                    <div class="bg-light p-2 rounded">
                                        <progress value="50" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
    
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
