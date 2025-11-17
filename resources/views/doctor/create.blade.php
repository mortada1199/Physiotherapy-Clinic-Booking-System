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
                                <li class="breadcrumb-item"><a href="#">الأطباء</a></li>
                                <li class="breadcrumb-item active">إضافة طبيب</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">إضافة طبيب</h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{ url('storedoctor') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الطبيب</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">اسم الطبيب</label>
                                                            <input type="text" id="name" name="name"
                                                                class="form-control" placeholder="ادخل اسم الطبيب"
                                                                value="{{ old('name') }}">
                                                            @error('name')
                                                                <small class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">رقم الهاتف</label>
                                                            <input type="text" id="phone" name="phone"
                                                                class="form-control" placeholder="ادخل رقم الهاتف"
                                                                value="{{ old('phone') }}">
                                                            @error('phone')
                                                                <small class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">العنوان</label>
                                                            <input type="text" id="address" name="address"
                                                                class="form-control" placeholder="ادخل عنوان الطبيب"
                                                                value="{{ old('address') }}">
                                                            @error('address')
                                                                <small class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">البريد الالكتروني</label>
                                                            <input type="email" id="email" name="email"
                                                                class="form-control" placeholder="ادخل البريد الالكتروني"
                                                                value="{{ old('email') }}">
                                                            @error('email')
                                                                <small
                                                                    class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="persent">نسبة استحقاق الطبيب</label>
                                                        <input type="text" id="persent" name="persent" class="form-control" placeholder="ادخل نسبة الطبيب" value="{{ old('persent') }}">
                                                        @error('persent')
                                                        <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div> --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="experience">سنوات الخبرة</label>
                                                            <input type="text" id="experience" name="experience"
                                                                class="form-control" placeholder="ادخل سنوات الخبرة"
                                                                value="{{ old('experience') }}">
                                                            @error('experience')
                                                                <small
                                                                    class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                        <i class="ft-x"></i> تراجع
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> حفظ
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
