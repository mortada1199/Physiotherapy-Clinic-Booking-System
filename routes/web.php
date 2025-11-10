<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SessionDoctorController;
use App\Http\Controllers\LoginController;


// تسجيل الدخول
Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/check', [LoginController::class, 'check']);
Route::get('/logout', [LoginController::class, 'logout']);


// كل المسارات دي محمية بالميدل وير
Route::middleware(['authcheck'])->group(function () {

    // Dashboard
    Route::get('/dashboard', fn() => view('layouts.dashbord'));

    // Doctor routes
    Route::get('/adddoctor', fn() => view('doctor.create'))->name('adddoctor');
    Route::post('storedoctor', [DoctorController::class, 'store'])->name('storedoctor');
    Route::get('viewdoctor', [DoctorController::class, 'getalldata'])->name('viewdoctor');
    Route::post('updatedoctor/{id}', [DoctorController::class, 'update'])->name('updatedoctor');
    Route::get('editdoctor/{doctorr_id}', [DoctorController::class, 'edit'])->name('editdoctor');
    Route::get('doctordelete/{doctorr_id}', [DoctorController::class, 'delete'])->name('doctordelete');
    Route::get('/doctors/{id}', [DoctorController::class, 'show'])->name('show');

    // Specialization routes
    Route::get('/addspecial', fn() => view('specialization.create'))->name('addspecial');
    Route::post('storespetial', [SessionDoctorController::class, 'store'])->name('storespetial');
    Route::get('viewspetial', [SessionDoctorController::class, 'getalldata'])->name('viewspetial');
    Route::post('updatespetial/{spetial_id}', [SessionDoctorController::class, 'update'])->name('updatespetial');
    Route::get('editspetial/{spetial_id}', [SessionDoctorController::class, 'edit'])->name('editspetial');
    Route::get('deletespetial/{spetial_id}', [SessionDoctorController::class, 'delete'])->name('deletespetial');

    // Patient routes
    Route::get('addpatient/{id}', [PatientController::class, 'add'])->name('addpatient');
    Route::post('storepatient', [PatientController::class, 'store'])->name('storepatient');
    Route::get('viewpatient', [PatientController::class, 'getalldata'])->name('viewpatient');
    Route::get('deletepatient/{id}', [PatientController::class, 'delete'])->name('deletepatient');
    Route::post('updatepatient/{id}', [PatientController::class, 'update'])->name('updatepatient');
    Route::get('editpatient/{id}', [PatientController::class, 'edit'])->name('editpatient');
    Route::get('/patient/{id}', [PatientController::class, 'show'])->name('showpatients');
    // Call doctor
    Route::get('calldoctor/{id}', [PatientController::class, 'addsession'])->name('calldoctor');

    Route::post('updatesession/{id}', [PatientController::class, 'sessionstore'])->name('updatesession');


    // Route::get('/calldoctor', fn() => view('callDoctor.create'));



    // Report
    Route::get('/Repo', fn() => view('home'));
});


// //dashboard route
// Route::get('/dashboard', function () {
//     return view('layouts.dashbord');
// });
