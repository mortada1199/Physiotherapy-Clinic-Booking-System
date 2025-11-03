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
                                <li class="breadcrumb-item"><a href=""> الاطباء </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل بيانات طبيب
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل البيانات </h4>
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


                                 @if(Session::has('error'))
                            <div class="alert alert-danger text-center" role="alert">
                                {{Session::get('error')}}
                              </div>
                            @endif

                            <br>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ url('updatedoctor',$doctors ->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الطبيب </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الطبيب </label>
                                                            <input type="text" value="{{$doctors -> name}}" id="name"
                                                                class="form-control" placeholder="ادخل اسم الطبيب  "
                                                                name="name">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> سنوات الخبرة </label>
                                                            <input type="text" value="{{$doctors -> experience}}" id="experience"
                                                                class="form-control" placeholder="ادخل سنوات الخبرة  "
                                                                name="experience">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان </label>
                                                            <input type="text" value="{{$doctors -> address}}" id="address"
                                                                class="form-control" placeholder="ادخل العنوان      "
                                                                name="address">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الهاتف </label>
                                                            <input type="text" value="{{$doctors -> phone}}" id="phone"
                                                                class="form-control" placeholder="كلمة السر "
                                                                name="phone">
                                                            <span class="text-danger"> </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> % نسبة استحقاق الطبيب </label>
                                                            <input type="text" value="{{$doctors -> persent}}" id="persent"
                                                                class="form-control" placeholder="ادخل نسبة الطبيب"
                                                                name="persent">
                                                            @error('persent')
                                                                <small class="form-text text-danger">#</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <label for="projectinput1"> البريد الالكتروني </label>
                                                        <input type="email" value="{{$doctors -> email}}" id="email"
                                                            class="form-control" placeholder="ادخل البريد الالكتروني "
                                                            name="email">
                                                        @error('email')
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
