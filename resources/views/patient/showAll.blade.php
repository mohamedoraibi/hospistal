@extends('layout.master')

@section('Patients')
    active
@endsection
@section('Patientshow')
    active
@endsection

@section('title')
    All Patients
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center alert ">
                <h2>All Patient</h2>
            </div>
            <div class="col-md-12 text-center">
                <table class="table table-bordered table-hover">
                    <thead>

                    <th class="text-center">id</th>
                    <th class="text-center">Patient Name</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Disease</th>
                    <th class="text-center">Delete</th>
                    </thead>
                    <tbody>

                    @foreach($Patients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->Patient_Name}}</td>
                            <td>{{$patient->Patient_Phone}}</td>
                            <td>{{$patient->Patient_Disease}}</td>
                            <td><a href="/patients/patientsDelete/{{$patient->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

