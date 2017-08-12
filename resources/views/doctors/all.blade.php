@extends('layout.master')

@section('Doctors')
    active
@endsection
@section('DoctorsInsert')
    active
@endsection

@section('title')
    Add New Doctors
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
                <h2>Add New Doctor</h2>
            </div>
            <div class="col-md-10 text-center col-md-push-1">
                <form name="usrform" method="post" action="/doctors/insert" class="form-inline">
                    {{csrf_field()}}

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th class="text-center">Doctor Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Specialization</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input name="Doctor_Name" type="text" class="form-control" id="Doctor_Name"
                                       placeholder="enter Doctor Name"></td>
                            <td><input name="Doctor_Phone" type="text" class="form-control" id="Doctor_Phone"
                                       placeholder="enter Phone"></td>
                            <td><input type="text" name="Doctor_Specialization" class="form-control"
                                       id="Doctor_Specialization"
                                       placeholder="enter Specialization">
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

