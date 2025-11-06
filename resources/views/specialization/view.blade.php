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
                                <li class="breadcrumb-item active"> عرض التخصصات
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

                                {{-- <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">بيانات الاطباء</h4>
                                    <a href="{{ url('addspecial') }}" class="btn btn-primary btn-glow px-3">
                                        <i class="la la-plus"></i> إضافة جلسة
                                    </a>    
                                </div> --}}

                                <div class="card-header">
                                    <h4 class="card-title">بيانات الجلسة </h4>

                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <a href="{{ url('addspecial') }}" class="btn btn-primary btn-glow px-3">
                                                <i class="la la-plus"></i> إضافة جلسة
                                            </a>
                                        </ul>
                                    </div>
                                </div>


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
                                                    <th> الجلسة</th>
                                                    <th> رقم الجلسة</th>
                                                    <th> المبلغ</th>
                                                    <th>الإجراءات</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($sessions as $val)
                                                    <tr>
                                                        <td>{{ $val->id }} </td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{$val->numbersession}}</td>
                                                        <td>{{ $val->price }}</td>
                                                        <td>



                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic example">
                                                                <a href="{{ url('editspetial', $val->id) }}"
                                                                    class="btn btn-outline-primary btn-sm" title="تعديل">
                                                                    <i class="la la-edit"></i> تعديل
                                                                </a>

                                                                <a href="{{ url('deletespetial', $val->id) }}"
                                                                    class="btn btn-outline-danger btn-sm" title="حذف"
                                                                    onclick="return confirm('هل أنت متأكد من حذف هذا الطبيب؟');">
                                                                    <i class="la la-trash"></i> حذف
                                                                </a>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
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
