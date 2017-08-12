<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function getAll()
    {
        $Patient = Patient::all();
        return view('patient.all', compact('Patient'));
    }

    public function insertPatient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Patient_Name' => 'required ',
            'Patient_Phone' => 'required ',
            'Patient_Disease' => 'required ',
        ]);
        if ($validator->fails())
            return redirect()->back()->WithErrors($validator->errors()->all())->withInput();
        else {
            $Patient = new Patient;
            $Patient->Patient_Name = $request->Patient_Name;
            $Patient->Patient_Phone = $request->Patient_Phone;
            $Patient->Patient_Disease = $request->Patient_Disease;
            $Patient->save();
            return $Patient;
        }
    }

    public function showPatient()
    {
        $Patients = Patient::all();
        return view('patient.showAll', compact('Patients'));
    }

    public function patientMangmentPage()
    {
        $Doctors = Doctor::all();
        $Patients = Patient::all();
        return view('patientManagment.patientManagment', compact('Patients','Doctors'));
    }
    public function deletePatient($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return "Deleted";
    }
}
