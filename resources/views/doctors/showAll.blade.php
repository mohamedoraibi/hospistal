@extends('layout.master')

@section('Doctors')
    active
@endsection
@section('DoctorsShow')
    active
@endsection

@section('title')
    Add Doctors
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center alert ">
                <h2>All Doctors</h2>
            </div>
            <div class="col-md-12 text-center">
                <table class="table table-bordered table-hover">
                    <thead>

                    <th class="text-center">id</th>
                    <th class="text-center">Doctor Name</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Specialization</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                    </thead>
                    <tbody>

                    @foreach($Doctors as $doctor)
                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->Doctor_Name}}</td>
                            <td>{{$doctor->Doctor_Phone}}</td>
                            <td>{{$doctor->Doctor_Specialization}}</td>
                            <td><a href="/doctors/doctorsUpdatePage/{{$doctor->id}}">Edit</a></td>
                            <td><a href="/doctors/doctorsDelete/{{$doctor->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
