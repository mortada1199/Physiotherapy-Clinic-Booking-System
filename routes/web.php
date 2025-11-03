<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SessionDoctorController;
use Illuminate\Support\Facades\Route;




Route::get('/login', function () {
    return view('login.login');
});

//doctor routes

Route::get('/adddoctor', function () {
    return view('doctor.create');
});
Route::post('storedoctor', [DoctorController::class, 'store']);
Route::get('viewdoctor' , [DoctorController::class, 'getalldata']);
Route::post('updatedoctor/{id}' , [DoctorController::class, 'update']);
Route::get('editdoctor/{doctorr_id}',[DoctorController::class,'edit']);
Route::get('doctordelete/{doctorr_id}',[DoctorController::class,'delete']);

//specialization routes
Route::get('/addspecial', function () {
    return view('specialization.create');
});
Route::post('storespetial', [SessionDoctorController::class, 'store']);
Route::get('viewspetial' , [SessionDoctorController::class, 'getalldata']);
Route::post('updatespetial/{spetial_id}' , [SessionDoctorController::class, 'update']);
Route::get('editspetial/{spetial_id}',[SessionDoctorController::class,'edit']);
Route::get('deletespetial/{spetial_id}',[SessionDoctorController::class,'delete']);


//patient routes

Route::get('addpatient' , [SessionDoctorController::class, 'getalldata']);



// Route::get('/addpatient', function () {
//     return view('patients.create');
// });


Route::get('/viewpatient', function () {
    return view('patients.view');
});










Route::get('/Repo', function () {
    return view('home');
});





Route::get('/calldoctor', function () {
    return view('callDoctor.create');
});

Route::get('/dashboard', function () {
    return view('layouts.dashbord');
});




