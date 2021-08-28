@extends('layouts.students-nav')
@section('content')
<div class="container-fluid">
    <div class="container">
        <a class="btn btn-info text-light" href="{{route('student-profile')}}"><i class="icofont-arrow-left"></i></a>
        <div class="row justify-content-center">
            <div class="col-md-12 p-3">
                <div class="card p-4">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        S/no
                                    </th>
                                    <th>
                                        Item 
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Health
                                    </td>
                                    <td>
                                        10,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       2
                                    </td>
                                    <td>
                                        Computer Programme
                                    </td>
                                    <td>
                                        10,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       3
                                    </td>
                                    <td>
                                        Health Programme
                                    </td>
                                    <td>
                                        10,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       4
                                    </td>
                                    <td>
                                        Insurance Programme
                                    </td>
                                    <td>
                                        10,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                      5
                                    </td>
                                    <td>
                                        Security Programme
                                    </td>
                                    <td>
                                        10,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                     
                                    </td>
                                    <td>
                                        <b>Total</b>
                                    </td>
                                    <td>
                                        50,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="{{route('pay.now', session('LoggedUser')['id'])}}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn btn-info text-light">Pay now</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('pay.half', session('LoggedUser')['id'])}}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn btn-info text-light">Pay Half</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('pay.quarter', session('LoggedUser')['id'])}}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn btn-info text-light">Pay Quarter</button>
                                        </form>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection