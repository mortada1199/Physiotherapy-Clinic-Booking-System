@extends('layouts.dashbord')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">

        <!-- Breadcrumbs -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="#">الأطباء</a></li>
                            <li class="breadcrumb-item active">تعديل بيانات طبيب</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Body -->
        <div class="content-body">

            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">تعديل البيانات</h4>
                            </div>

                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                            @endif

                            @if(Session::has('error'))
                                <div class="alert alert-danger text-center">{{ Session::get('error') }}</div>
                            @endif

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ url('updatedoctor', $doctors->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> بيانات الطبيب</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>اسم الطبيب</label>
                                                        <input type="text" name="name" class="form-control" value="{{ old('name', $doctors->name) }}" placeholder="ادخل اسم الطبيب">
                                                        @error('name')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>سنوات الخبرة</label>
                                                        <input type="text" name="experience" class="form-control" value="{{ old('experience', $doctors->experience) }}" placeholder="ادخل سنوات الخبرة">
                                                        @error('experience')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>العنوان</label>
                                                        <input type="text" name="address" class="form-control" value="{{ old('address', $doctors->address) }}" placeholder="ادخل العنوان">
                                                        @error('address')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>رقم الهاتف</label>
                                                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctors->phone) }}" placeholder="ادخل رقم الهاتف">
                                                        @error('phone')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>نسبة استحقاق الطبيب %</label>
                                                        <input type="text" name="persent" class="form-control" value="{{ old('persent', $doctors->persent) }}" placeholder="ادخل نسبة الطبيب">
                                                        @error('persent')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>البريد الالكتروني</label>
                                                        <input type="email" name="email" class="form-control" value="{{ old('email', $doctors->email) }}" placeholder="ادخل البريد الالكتروني">
                                                        @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning" onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>

                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                    </form>
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
