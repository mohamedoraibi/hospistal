@extends('layout.master')

@section('Patients')
    active
@endsection
@section('PatientsInsert')
    active
@endsection

@section('title')
    Add New Patient
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if($errors->count() >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <div class="col-md-12 text-center alert ">
                <h2>Add New Patient</h2>
            </div>
            <div class="col-md-10 text-center col-md-push-1">
                <form name="usrform" method="post" action="/patients/insert" class="form-inline">
                    {{csrf_field()}}

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th class="text-center">Patient Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Disease</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input name="Patient_Name" type="text" class="form-control" id="Patient_Name"
                                       placeholder="enter Patient Name"></td>
                            <td><input name="Patient_Phone" type="text" class="form-control" id="Patient_Phone"
                                       placeholder="enter Phone"></td>
                            <td><input type="text" name="Patient_Disease" class="form-control"
                                       id="Patient_Disease"
                                       placeholder="enter Disease">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="col-md-4 col-md-push-8">
                        <button type="submit" class="btn btn-default pull-right">Insert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

