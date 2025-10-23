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

                                {{-- @include('admin.includes.alerts.success') --}}
                                {{-- @include('admin.includes.alerts.errors') --}}

                                @if (Session::has('successd'))
                                    <div class="alert alert-success text-center" role="alert">
                                        {{ Session::get('successd') }}
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
                                                    <th> #</th>
                                                    <th> الاسم</th>
                                                    <th>اسم الطبيب </th>
                                                    <th>العنوان</th>
                                                    <th>رقم الهاتف </th>
                                                    <th>العلاج </th>
                                                    <th> تاريخ الميلاد </th>
                                                    <th>الإجراءات</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                {{-- @foreach ($doctors as $val) --}}
                                                <tr>
                                                    <td>1 </td>
                                                    <td>محمد </td>
                                                    <td>عظام </td>
                                                    <td>الخرطوم - ام درمان </td>
                                                    <td>24967789078</td>
                                                    <td>عظلم</td>
                                                    <td>2025-12-1</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">

                                                            <a href="#"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                {{-- 
                                                @endforeach --}}
                                            </tbody>

                                        </table>
                                        <div class="justify-content-center d-flex">

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
