<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctors', 'DoctorController@getAll');
Route::post('/doctors/insert', 'DoctorController@insertDoctor');
Route::get('/doctors/doctorsShow', 'DoctorController@showDoctors');
Route::get('/doctors/doctorsDelete/{id}', 'DoctorController@deleteDoctors');
Route::get('/doctors/doctorsUpdatePage/{id}', 'DoctorController@updateDoctorPage');
Route::get('/doctors/doctorsUpdate', 'DoctorController@updateDoctor');

Route::get('/patients', 'PatientController@getAll');
Route::post('/patients/insert', 'PatientController@insertPatient');
Route::get('/patients/patientsShow', 'PatientController@showPatient');
Route::get('/patients/patientsDelete/{id}', 'PatientController@deletePatient');

Route::get('/patientManagment', 'PatientController@patientMangmentPage');


//Route::get('/patientsShow', 'PatientController@showPatient');
