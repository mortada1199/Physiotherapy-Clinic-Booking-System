<?php

use Illuminate\Support\Facades\Route;




Route::get('/login', function () {
    return view('login.login');
});

Route::get('/Repo', function () {
    return view('home');
});



Route::get('/adddoctor', function () {
    return view('doctor.create');
});

Route::get('/editdoctor', function () {
    return view('doctor.edit');
});

Route::get('/viewdoctor', function () {
    return view('doctor.view');
});


Route::get('/addspecial', function () {
    return view('specialization.create');
});

Route::get('/editspecial', function () {
    return view('specialization.edit');
});

Route::get('/viewspecial', function () {
    return view('specialization.view');
});



Route::get('/addpatient', function () {
    return view('patients.create');
});


Route::get('/viewpatient', function () {
    return view('patients.view');
});

Route::get('/calldoctor', function () {
    return view('callDoctor.create');
});

Route::get('/dashboard', function () {
    return view('layouts.dashbord');
});




