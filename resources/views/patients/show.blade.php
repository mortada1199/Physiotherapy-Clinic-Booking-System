@extends('layouts.dashbord')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/viewpatient') }}">المرضى</a></li>
                                <li class="breadcrumb-item active">عرض بيانات المريض</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <section id="doctor-details">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow-lg rounded-3">
                                <div class="card-header bg-primary text-white text-center">
                                    <h4 class="mb-0">بيانات المريض</h4>
                                </div>

                                <div class="card-body p-4">
                                    <div class="text-center mb-4">
                                        {{-- <img src="{{ asset('images/doctor-avatar.png') }}" alt="Doctor Image"
                                        class="rounded-circle shadow-sm" width="120" height="120"> --}}
                                        <h4 class="mt-3">{{ $patient->name }}</h4>
                                        {{-- <p class="text-muted">{{ $patient->specialization }}</p> --}}
                                    </div>

                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>الاسم المريض</th>
                                                <td>{{ $patient->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>رقم الهاتف</th>
                                                <td>{{ $patient->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th> الطبيب المحول </th>
                                                <td>{{ $patient->referingdoctor_name }}</td>
                                            </tr>

                                            <tr>
                                                <th> الطبيب المنفذ </th>
                                                <td>{{ $patient->exectingdoctor_name }}</td>
                                            </tr>
                                            <tr>
                                                <th> التشخيص </th>
                                                <td>{{ $patient->dignosis }}</td>
                                            </tr>
                                            <tr>
                                                <th> اسم الجلسة </th>
                                                <td>{{ $patient->session_name }}</td>
                                            </tr>
                                            <tr>
                                                <th> مجموع الجلسات </th>
                                                <td>{{ $patient->totalsession }}</td>
                                            </tr>
                                            <tr>
                                                <th> الجلسات المنفذه</th>
                                                <td>{{ $patient->excutedsession }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-center mt-4">
                                        <a href="{{ url('/viewpatient') }}" class="btn btn-secondary">
                                            <i class="la la-arrow-left"></i> رجوع
                                        </a>
                                        <a href="{{ url('editpatient/' . $patient->id) }}" class="btn btn-primary">
                                            <i class="la la-edit"></i> تعديل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <style>
        th {
            width: 30%;
            background-color: #f8f9fa;
        }

        td {
            background-color: #ffffff;
        }
    </style>
@endsection
