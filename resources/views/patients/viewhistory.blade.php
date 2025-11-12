@extends('layouts.dashbord')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاطباء </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> عرض المرضى
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">بيانات المرضى </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- 
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">بيانات المرضى</h4>
                                    <a href="{{ url('addpatient') }}" class="btn btn-primary btn-glow px-3">
                                        <i class="la la-plus"></i> إضافة مريض
                                    </a>
                                </div> --}}

                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                @if (Session::has('error'))
                                    <div class="alert alert-danger text-center" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table display nowrap table-striped scroll-horizontal table-bordered">


                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>اسم المريض</th>
                                                    <th>اسم الطبيب المنفذ</th>
                                                    <th> الجلسة</th>
                                                    <th> سعر الجلسة</th>
                                                    <th>التاريخ </th>
                                                   <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allHistory as $val)
                                                    <tr>
                                                        <td>{{ $val->patientnumber }}</td>
                                                        <td>{{ $val->name ?? 0 }}</td>
                                                        <td>{{ $val->exectingdoctor_name ?? 0 }}</td>
                                                        <td>{{ $val->session_name ?? 0 }}</td>
                                                        <td>{{ $val->sessionprice ?? 0 }}</td>
                                                        <td>{{ $val->created_at->format('Y-m-d') }}</td>
                                                        <td>
                                                            

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="text-center mt-4">
                                            <a href="{{ url('/viewpatient') }}" class="btn btn-secondary">
                                                <i class="la la-arrow-left"></i> رجوع
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
