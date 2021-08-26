@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="container">
        <a class="btn btn-info text-light" href="{{route('home')}}"><i class="icofont-arrow-left"></i></a>
        <div class="row justify-content-center">
            <div class="col-md-12 p-3">
                <div class="card p-4">
                    <div class="card-header">
                        <h3>Registered Students</h3>
                    </div>
                    @if (count($students) > 0)
                    <div class="table-responsive">
                        @include('layouts.error')
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Matric No</th>
                                  <th>Email</th>
                                  <th>Adm No</th>
                                  <th>Level</th>
                                  <th>Gender</th>
                                  <th>Course</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td><a href="{{route('student-detail', $student->id)}}">{{$student->student_name}}</a></td>
                                    <td>{{$student->matric_number}}</td>
                                    <td>{{$student->student_email}}</td>
                                    <td>{{$student->student_admission_number}}</td>
                                    <td>{{$student->student_level}}</td>
                                    <td>{{$student->student_gender}}</td>
                                    <td>{{$student->student_course}}</td>
                                    <td>
                                        <a href="{{route('edit-student', $student->id)}}" class="btn btn-info"><i class="icofont-edit"></i></a>
                                    </td>
                                    <td>
                                        <a onclick="event.preventDefault();
                                        if(confirm('This Action is Dangerous are you sure you want to continue??')){
                                            document.getElementById('form-delete-{{$student->id}}').submit();
                                        } "
                                         href="{{route('delete-student', $student->id)}}" class="btn btn-danger"><i class="icofont-trash"></i></a>
                    
                                        <form style="display: none;" id="{{'form-delete-'.$student->id}}" action="{{route('delete-student', $student->id)}}" method="POST">
                                            @csrf
                                           @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>

                    @else

                    <p class="p-3 text-center">No registered Student Yet</p>

                    @endif
            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection