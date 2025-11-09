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
                            <li class="breadcrumb-item"><a href="#">استدعاء</a></li>
                            <li class="breadcrumb-item active">استدعاء طبيب</li>
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
                                <h4 class="card-title" id="basic-layout-form">إضافة جلسة</h4>
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

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="{{ url('updatesession', $patient->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المريض</h4>

                                            <!-- كروت الإحصائيات -->
                                            <div class="row justify-content-center text-center mb-4">
                                                <!-- الكارد الأول -->
                                                <div class="col-md-3 col-sm-6 mb-3">
                                                    <div class="card stat-card" style="background: linear-gradient(135deg, #4e73df, #224abe);">
                                                        <div class="card-content">
                                                            <h6 class="fw-bold mb-1">إجمالي الجلسات</h6>
                                                            <h3 id="totalSession" class="fw-bold mb-0">{{ $patient->totalsession ?? 0 }}</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- الكارد الثاني -->
                                                <div class="col-md-3 col-sm-6 mb-3">
                                                    <div class="card stat-card" style="background: linear-gradient(135deg, #1cc88a, #13855c);">
                                                        <div class="card-content">
                                                            <h6 class="fw-bold mb-1">الجلسات المنفذة</h6>
                                                            <h3 id="executedSession" class="fw-bold mb-0">{{ $patient->excutedsession ?? 0 }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="exectingdoctor_name" class="form-label">اسم الطبيب المنفذ</label>
                                                    <select id="exectingdoctor_name" name="exectingdoctor_name" class="form-select">
                                                        <option value="" selected disabled>اختر اسم الطبيب</option>
                                                        @foreach ($doctors as $val)
                                                            <option value="{{ $val->name }}">{{ $val->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">اسم المريض</label>
                                                        <input type="text" value="{{ $patient->name }}" id="name"
                                                            class="form-control" name="name" placeholder="ادخل اسم المريض">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox" id="call_doctor_checkbox">
                                                        <label class="form-check-label" for="call_doctor_checkbox">استدعاء</label>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-2" id="roomnumber" style="display:none;">
                                                    <label for="roomnumber" class="form-label">مكان الاستدعاء</label>
                                                    <input type="text" id="roomnumber" name="roomnumber" class="form-control"
                                                        placeholder="ادخل مكان الاستدعاء">
                                                </div>
                                            </div>

                                            <div class="form-actions mt-3">
                                                <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>

                                                {{-- زر الحفظ --}}
                                                @if(($patient->totalsession ?? 0) > ($patient->excutedsession ?? 0))
                                                    <button id="saveButton" type="submit" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> حفظ
                                                    </button>
                                                @endif
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

<!-- تنسيقات CSS -->
<style>
    .stat-card {
        width: 150px;
        height: 150px;
        border: none;
        border-radius: 50%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 0 auto;
    }

    .stat-card:hover {
        transform: scale(1.08);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .card-content h6 {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    .card-content h3 {
        font-size: 1.6rem;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('call_doctor_checkbox');
        const locationField = document.getElementById('roomnumber');
        const total = parseInt(document.getElementById('totalSession').textContent);
        const executed = parseInt(document.getElementById('executedSession').textContent);
        const saveBtn = document.getElementById('saveButton');

        checkbox.addEventListener('change', function() {
            locationField.style.display = checkbox.checked ? 'block' : 'none';
        });

        // إخفاء الزر إذا تساوى العددان
        if (total === executed && saveBtn) {
            saveBtn.style.display = 'none';
        }
    });
</script>
@endsection
