@extends('layouts.dashbord')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <!-- العنوان -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title font-weight-bold text-primary">لوحة التحكم</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Repo">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الصفحة الرئيسية</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- المحتوى -->
        <div class="content-body">
            <section id="dom">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <!-- كروت الإحصائيات -->
                        <div class="row text-center">

                            <!-- عدد المرضى -->
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-3">
                                <div class="card border-0 shadow-lg rounded-3">
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <div class="bg-primary text-white rounded-circle p-3">
                                                <i class="ft-users font-large-2"></i>
                                            </div>
                                        </div>
                                        <h5 class="text-primary font-weight-bold mb-1">عدد المرضى</h5>
                                        <h2 class="font-weight-bolder text-dark">{{ $patientsCount ?? 0 }}</h2>
                                    </div>
                                </div>
                            </div>

                            <!-- عدد الأطباء -->
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-3">
                                <div class="card border-0 shadow-lg rounded-3">
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <div class="bg-success text-white rounded-circle p-3">
                                                <i class="ft-user font-large-2"></i>
                                            </div>
                                        </div>
                                        <h5 class="text-success font-weight-bold mb-1">عدد الأطباء</h5>
                                        <h2 class="font-weight-bolder text-dark">{{ $doctorsCount ?? 0 }}</h2>
                                    </div>
                                </div>
                            </div>

                            <!-- عدد الجلسات -->
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-3">
                                <div class="card border-0 shadow-lg rounded-3">
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <div class="bg-warning text-white rounded-circle p-3">
                                                <i class="ft-activity font-large-2"></i>
                                            </div>
                                        </div>
                                        <h5 class="text-warning font-weight-bold mb-1">عدد الجلسات</h5>
                                        <h2 class="font-weight-bolder text-dark">{{ $sessionsCount ?? 0 }}</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- صورة تجميلية -->
                        {{-- <div class="text-center mt-4">
                            <img src="/admin/images/home/cow.jpg" alt="home" class="img-fluid rounded shadow-sm" style="max-width: 80%;">
                        </div> --}}

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
