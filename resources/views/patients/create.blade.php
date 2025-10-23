@extends('layouts.dashbord')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> المرضى </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة مريض
                                </li>
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة مريض </h4>
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
                                <br>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="#" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المريض </h4>
<div class="row">
                                                    <div class="col-md-6">
                                                        <label for="blood_type" class="form-label">اسم الطبيب</label>
                                                        <select id="blood_type" name="blood_type" class="form-select">
                                                            <option value="" selected disabled>اختر اسم الطبيب
                                                            </option>
                                                            <option value="A+">ali</option>
                                                            <option value="A-">mohamed</option>
                                                            <option value="B+">khalid</option>

                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="blood_type" class="form-label">اسم التخصص</label>
                                                        <select id="blood_type" name="blood_type" class="form-select">
                                                            <option value="" selected disabled>اختر اسم التخصص
                                                            </option>
                                                            <option value="A+">عظام</option>
                                                            <option value="A-">راس</option>
                                                            <option value="B+">ارجل</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المريض </label>
                                                            <input type="text" value="" id="name"
                                                                class="form-control" placeholder="ادخل اسم المريض     "
                                                                name="name">

                                                            @error('name')
                                                                <small class="form-text text-danger"> # </small>
                                                            @enderror

                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="dob" class="form-label">تاريخ الميلاد</label>
                                                        <input type="date" id="dob" name="dob"
                                                            class="form-control">
                                                    </div>
                                                </div>


                                                

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label d-block">الجنس</label>
                                                        <div class="btn-group" role="group" aria-label="Gender">
                                                            <input type="radio" class="btn-check" name="gender"
                                                                id="gender_m" value="male" autocomplete="off" checked>
                                                            <label class="btn btn-outline-secondary"
                                                                for="gender_m">ذكر</label>

                                                            <input type="radio" class="btn-check" name="gender"
                                                                id="gender_f" value="female" autocomplete="off">
                                                            <label class="btn btn-outline-secondary"
                                                                for="gender_f">أنثى</label>

                                                            <input type="radio" class="btn-check" name="gender"
                                                                id="gender_o" value="other" autocomplete="off">
                                                            <label class="btn btn-outline-secondary"
                                                                for="gender_o">أخرى</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التشخيص</label>
                                                            <input type="text" value="" id="name"
                                                                class="form-control" placeholder="ادخل  التشخيص     "
                                                                name="name">

                                                            @error('name')
                                                                <small class="form-text text-danger"> # </small>
                                                            @enderror

                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان </label>
                                                            <input type="text" value="" id="name"
                                                                class="form-control" placeholder="ادخل عنوان المريض     "
                                                                name="addrees">

                                                            @error('addrees')
                                                                <small class="form-text text-danger">#</small>
                                                            @enderror
                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الهاتف </label>
                                                            <input type="text" value="" id="name"
                                                                class="form-control" placeholder=" ادخل رقم الهاتف  " "
                                                                                           name="phone">
                                                                                           @error('phone')
        <small class="form-text text-danger">#</small>
    @enderror
                                                                                    {{-- <span class="text-danger"> </span> --}}
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
