@extends('layouts.dashbord')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">الرئيسية </a></li>
                            <li class="breadcrumb-item"><a href=""> المرضى </a></li>
                            <li class="breadcrumb-item active">تعديل مريض</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> تعديل مريض </h4>
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
                                <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger text-center">{{ Session::get('error') }}</div>
                            @endif

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ url('updatepatient/'.$patient->id) }}" method="POST">
                                        @csrf
                                        {{-- @method('PUT') --}}
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المريض </h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="referingdoctor_name"> اسم الطبيب المحول </label>
                                                        <input type="text" id="referingdoctor_name" class="form-control"
                                                            placeholder="ادخل اسم الطبيب المحول"
                                                            name="referingdoctor_name" value="{{ old('referingdoctor_name', $patient->referingdoctor_name) }}">
                                                        @error('referingdoctor_name')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name"> اسم المريض </label>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="ادخل اسم المريض"
                                                            name="name" value="{{ old('name', $patient->name) }}">
                                                        @error('name')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                               <div class="col-md-6">
                                                    <label for="session_id" class="form-label"> التخصص</label>
                                                    <input type="text" id="major" class="form-control"
                                                            placeholder="ادخل عدد الجلسات" name="major" value="{{ old('major', $patient->major) }}">
                                                            @error('major')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="numbersession"> عدد الجلسات </label>
                                                        <input type="text" id="numbersession" class="form-control"
                                                            placeholder="ادخل عدد الجلسات"
                                                            name="numbersession" value="{{ old('numbersession', $patient->numbersession) }}">
                                                        @error('numbersession')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
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
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address"> العنوان </label>
                                                        <input type="text" id="address" class="form-control"
                                                            placeholder="ادخل عنوان المريض"
                                                            name="address" value="{{ old('address', $patient->address) }}">
                                                        @error('address')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone"> رقم الهاتف </label>
                                                        <input type="text" id="phone" class="form-control"
                                                            placeholder="ادخل رقم الهاتف"
                                                            name="phone" value="{{ old('phone', $patient->phone) }}">
                                                        @error('phone')
                                                            <small class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="dignosis" class="form-label"> التشخيص <span class="text-danger">*</span></label>
                                                    <textarea id="dignosis" name="dignosis" class="form-control" rows="3" required
                                                        placeholder="اشرح التشخيص باختصار">{{ old('dignosis', $patient->dignosis) }}</textarea>
                                                    @error('dignosis')
                                                        <small class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-actions mt-3">
                                                <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
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
        </div>
    </div>
</div>
@endsection
