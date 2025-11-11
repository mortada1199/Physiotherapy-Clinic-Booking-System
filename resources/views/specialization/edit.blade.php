@extends('layouts.dashbord')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <!-- Header -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="">الجلسة</a></li>
                            <li class="breadcrumb-item active">تعديل بيانات جلسة</li>
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
                            <!-- Card Header -->
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">تعديل البيانات</h4>
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

                            <!-- Alerts -->
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                            @endif

                            @if (Session::has('error'))
                                <div class="alert alert-danger text-center">{{ Session::get('error') }}</div>
                            @endif
                            <br>

                            <!-- Form -->
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ url('updatespetial', $sessions->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> بيانات الجلسة</h4>

                                            <div class="row">
                                                <!-- اسم الجلسة -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">اسم الجلسة</label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="ادخل اسم الجلسة" value="{{ old('name', $sessions->name) }}">
                                                        @error('name')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- المبلغ -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price">المبلغ</label>
                                                        <input type="text" id="price" name="price" class="form-control" placeholder="ادخل المبلغ" value="{{ old('price', $sessions->price) }}">
                                                        @error('price')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- رقم الجلسة -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="numbersession">رقم الجلسة</label>
                                                        <input type="text" id="numbersession" name="numbersession" class="form-control" placeholder="ادخل رقم الجلسة" value="{{ old('numbersession', $sessions->numbersession) }}">
                                                        @error('numbersession')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="persent">نسبة استحقاق الطبيب</label>
                                                            <input type="text" id="persent" name="persent"
                                                                class="form-control" placeholder="ادخل نسبة الطبيب"
                                                                value="{{ old('price', $sessions->persent) }}">
                                                            @error('persent')
                                                                <small
                                                                    class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>

                                        <!-- Buttons -->
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
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
