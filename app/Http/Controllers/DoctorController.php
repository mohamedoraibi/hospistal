<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function getAll()
    {
        $Doctors = Doctor::all();
        return view('doctors.all', compact('Doctors'));
    }

    public function showDoctors()
    {
        $Doctors = Doctor::all();
        return view('doctors.showAll', compact('Doctors'));
    }

    public function insertDoctor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Doctor_Name' => 'required ',
            'Doctor_Phone' => 'required ',
            'Doctor_Specialization' => 'required ',
        ]);
        if ($validator->fails())
            return redirect()->back()->WithErrors($validator->errors()->all())->withInput();
        else {
            $Doctor = new Doctor;
            $Doctor->Doctor_Name = $request->Doctor_Name;
            $Doctor->Doctor_Phone = $request->Doctor_Phone;
            $Doctor->Doctor_Specialization = $request->Doctor_Specialization;
            $Doctor->save();
            return $Doctor;
        }
    }

    public function updateDoctor(Request $request)
    {
        $doctor = Doctor::find($request->$id);
        $doctor->Doctor_Name = $request->Doctor_Name;
        $doctor->Doctor_Phone = $request->Doctor_Phone;
        $doctor->Doctor_Specialization = $request->Doctor_Specialization;
        $doctor->save();
        return $doctor;

    }

    public function updateDoctorPage($id)
    {
        $Doctors = Doctor::find($id);
        return view('doctors.update', compact('Doctors'));
    }

    public function deleteDoctors($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return "Deleted";
    }

}
