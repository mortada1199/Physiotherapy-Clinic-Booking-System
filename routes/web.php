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
    Route::get('/adddoctor', fn() => view('doctor.create'));
    Route::post('storedoctor', [DoctorController::class, 'store']);
    Route::get('viewdoctor', [DoctorController::class, 'getalldata']);
    Route::post('updatedoctor/{id}', [DoctorController::class, 'update']);
    Route::get('editdoctor/{doctorr_id}', [DoctorController::class, 'edit']);
    Route::get('doctordelete/{doctorr_id}', [DoctorController::class, 'delete']);

    // Specialization routes
    Route::get('/addspecial', fn() => view('specialization.create'));
    Route::post('storespetial', [SessionDoctorController::class, 'store']);
    Route::get('viewspetial', [SessionDoctorController::class, 'getalldata']);
    Route::post('updatespetial/{spetial_id}', [SessionDoctorController::class, 'update']);
    Route::get('editspetial/{spetial_id}', [SessionDoctorController::class, 'edit']);
    Route::get('deletespetial/{spetial_id}', [SessionDoctorController::class, 'delete']);

    // Patient routes
    Route::get('addpatient', [PatientController::class, 'add']);
    Route::post('storepatient', [PatientController::class, 'store']);
    Route::get('viewpatient', [PatientController::class, 'getalldata']);
    Route::get('deletepatient/{id}', [PatientController::class, 'delete']);

    // Call doctor
    Route::get('/calldoctor', fn() => view('callDoctor.create'));

    // Report
    Route::get('/Repo', fn() => view('home'));
});


// //dashboard route
// Route::get('/dashboard', function () {
//     return view('layouts.dashbord');
// });




