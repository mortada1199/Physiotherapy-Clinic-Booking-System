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
                                    <h4 class="card-title" id="basic-layout-form"> استدعاء طبيب </h4>
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
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم المريض </label>
                                                            <input type="text" value="" id="name"
                                                                class="form-control" placeholder="ادخل اسم المريض  "
                                                                name="special">

                                                            @error('special')
                                                                <small class="form-text text-danger">#</small>
                                                            @enderror

                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الغرفة / القسم </label>
                                                            <input type="text" value="" id="room_number"
                                                                class="form-control" placeholder="ادخل رقم الغرفة / القسم "
                                                                name="room_number">

                                                            @error('room_number')
                                                                <small class="form-text text-danger">#</small>
                                                            @enderror
                                                            {{-- <span class="text-danger"> </span> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="priority" class="form-label">درجة الأهمية</label>
                                                        <select id="priority" name="priority" class="form-select">
                                                            <option value="normal">عادية</option>
                                                            <option value="urgent">عاجلة</option>
                                                            <option value="emergency">طارئة</option>
                                                        </select>
                                                    </div>
                                                </div>





                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <label for="requested_by" class="form-label">تم الطلب بواسطة</label>
                                                        <input type="text" id="requested_by" name="requested_by"
                                                            class="form-control" placeholder="اسم الممرض أو الموظف">
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="reason" class="form-label">سبب الاستدعاء <span
                                                                class="text-danger">*</span></label>
                                                        <textarea id="reason" name="reason" class="form-control" rows="3" required
                                                            placeholder="اشرح سبب الاستدعاء باختصار"></textarea>
                                                        <div class="invalid-feedback">الرجاء كتابة سبب الاستدعاء.</div>
                                                    </div>
                                                </div>


                                                 <div class="row">

                                                    <div class="col-md-12">
                                                        <label for="amount" class="form-label">المبلغ  </label>
                                                        <input type="text" id="amount" name="amount"
                                                            class="form-control" placeholder="  المبلغ  ">
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
