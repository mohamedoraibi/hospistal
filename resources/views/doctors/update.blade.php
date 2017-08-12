@extends('layout.master')

@section('Doctors')
    active
@endsection

@section('title')
    Edit Doctor
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center alert ">
                <h2>Add New Doctor</h2>
            </div>
            <div class="col-md-10 text-center col-md-push-1">
                <form name="usrform" method="post" action="/doctors/doctorsUpdate/" class="form-inline">
                    {{csrf_field()}}

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th class="text-center">Doctor Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Specialization</th>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($Doctors as $doctor)
                            <td><input name="Doctor_Name" type="text" class="form-control" id="Doctor_Name"
                                       placeholder="enter Doctor Name" value="{{$doctor->Doctor_Name}}"></td>
                            <td><input name="Doctor_Phone" type="text" class="form-control" id="Doctor_Phone"
                                       placeholder="enter Phone" value="{{$doctor->Doctor_Phone}}"></td>
                            <td><input type="text" name="Doctor_Specialization" class="form-control"
                                       id="Doctor_Specialization"
                                       placeholder="enter Specialization" value="{{$doctor->Doctor_Specialization}}">
                            </td>
                            @endforeach
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