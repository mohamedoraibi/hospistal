@extends('layout.master')

@section('PatientsManagment')
    active
@endsection

@section('title')
    Patients Managment
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <dic class="col-md-12">
                <div class="col-md-6 text-center alert ">
                    <h2>All Doctors</h2>
                </div>
                <div class="col-md-6 text-center alert ">
                    <h2>All Patients</h2>
                </div>
                <div class="col-md-6 text-center">
                    <table class="table table-bordered table-hover">
                        <thead>

                        <th class="text-center">id</th>
                        <th class="text-center">Doctor Name</th>
                        <th class="text-center">Specialization</th>
                        </thead>
                        <tbody>

                        @foreach($Doctors as $doctor)
                            <tr>
                                <td>{{$doctor->id}}</td>
                                <td>{{$doctor->Doctor_Name}}</td>
                                <td>{{$doctor->Doctor_Specialization}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6 text-center">
                    <table class="table table-bordered table-hover">
                        <thead>

                        <th class="text-center">id</th>
                        <th class="text-center">Patient Name</th>
                        <th class="text-center">Disease</th>
                        </thead>
                        <tbody>

                        @foreach($Patients as $patients)
                            <tr>
                                <td>{{$patients->id}}</td>
                                <td>{{$patients->Patient_Name}}</td>
                                <td>{{$patients->Patient_Disease}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </dic>
        </div>
    </div>
@endsection