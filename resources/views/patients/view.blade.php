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

                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">بيانات المرضى</h4>
                                    <a href="{{ url('addpatient') }}" class="btn btn-primary btn-glow px-3">
                                        <i class="la la-plus"></i> إضافة مريض
                                    </a>
                                </div>

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
                                        <table class="table display nowrap table-striped scroll-horizontal table-bordered" >

                                            
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الاسم</th>
                                                        <th>اسم الطبيب المحول</th>
                                                        <th>اسم الطبيب المنفذ</th>
                                                        {{-- <th>العنوان</th> --}}
                                                        <th>رقم الهاتف</th>
                                                        <th>الإجراءات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($patients as $val)
                                                        <tr>
                                                            <td>{{ $val->id }}</td>
                                                            <td>{{ $val->name ?? 0}}</td>
                                                            <td>{{ $val->referingdoctor_name ?? 0 }}</td>
                                                            <td>{{ $val->exectingdoctor_name  ?? 0}}</td>
                                                            {{-- <td>{{ $val->address }}</td> --}}
                                                            <td>{{ $val->phone ?? 0}}</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <a href="{{ url('deletepatient', $val->id) }}"
                                                                        class="btn btn-outline-danger btn-sm" title="حذف"
                                                                        onclick="return confirm('هل أنت متأكد من حذف هذا المريض؟');">
                                                                        <i class="la la-trash"></i> 
                                                                    </a>

                                                                    <a href="{{ url('editpatient', $val->id) }}"
                                                                        class="btn btn-outline-primary btn-sm" title="تعديل">
                                                                        <i class="la la-edit"></i> 
                                                                    </a>
 
                                                                    <a href="{{ url('calldoctor', $val->id) }}"
                                                                        class="btn btn-outline-success btn-sm" title="اضافة جلسة">
                                                                        <i class="la la-plus"></i>  
                                                                    </a>

                                                                       <a href="{{ route('showpatients', $val->id) }}"
                                                                    class="btn btn-info btn-sm" title="عرض">
                                                                    <i class="la la-eye"></i>  
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
