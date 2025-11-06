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
                                <li class="breadcrumb-item"><a href=""> استدعاء </a>
                                </li>
                                <li class="breadcrumb-item active">استدعاء طبيب
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
                                    <h4 class="card-title" id="basic-layout-form"> اضافة جلسة </h4>
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
                                        <form class="form" action="{{ url('storesession/' . $patient->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المريض </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="exectingdoctor_name" class="form-label">اسم الطبيب
                                                            المنفذ</label>
                                                        <select id="exectingdoctor_name" name="exectingdoctor_name"
                                                            class="form-select">
                                                            <option value="" selected disabled>اختر اسم الطبيب
                                                            </option>
                                                            @foreach ($doctors as $val)
                                                                <option value="{{ $val->name }}">{{ $val->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المريض </label>
                                                            <input type="text" value="{{ $patient->name }}"
                                                                id="name" class="form-control"
                                                                placeholder="ادخل اسم المريض  " name="name">

                                                            @error('special')
                                                                <small class="form-text text-danger">{{ $message }}</small>
                                                            @enderror

                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الجلسة </label>
                                                            <input type="text" value="" id="numbersession"
                                                                class="form-control" placeholder="ادخل رقم الجلسة  "
                                                                name="numbersession">

                                                            @error('numbersession')
                                                                <small class="form-text text-danger">{{ $message }}</small>
                                                            @enderror
                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="projectinput1"> اسم الجلسة </label>
                                                        <input type="text" value="" id="session_name"
                                                            class="form-control" placeholder="ادخل اسم الجلسة  "
                                                            name="session_name">

                                                        @error('session_name')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                        {{-- <span class="text-danger"> </span> --}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="call_doctor_checkbox">
                                                            <label class="form-check-label" for="call_doctor_checkbox">
                                                                استدعاء
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2" id="call_location_container"
                                                        style="display:none;">
                                                        <label for="roomnumber" class="form-label">مكان الاستدعاء</label>
                                                        <input type="text" id="roomnumber" name="roomnumber"
                                                            class="form-control" placeholder="ادخل مكان الاستدعاء">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('call_doctor_checkbox');
        const locationField = document.getElementById('call_location_container');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                locationField.style.display = 'block';
            } else {
                locationField.style.display = 'none';
            }
        });
    });
</script>
