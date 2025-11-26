@extends('layouts.dashbord')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 mb-2 text-center">
                    <h3 class="content-header-title fw-bold">📊 التقارير المالية</h3>
                    <p class="text-muted">عرض ملخص الإيرادات والجلسات خلال فترة محددة</p>
                </div>
            </div>

            <div class="content-body">

                <!-- فلتر التاريخ -->
                <form method="GET" action="{{ route('reportfinance') }}" class="mb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-6 mb-2">
                            <input type="date" name="from" class="form-control text-center"
                                value="{{ request('from') }}">
                        </div>
                        <div class="col-md-3 col-sm-6 mb-2">
                            <input type="date" name="to" class="form-control text-center"
                                value="{{ request('to') }}">
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="la la-search"></i> عرض التقرير
                            </button>
                        </div>
                    </div>
                </form>

                @if ($sessions->isEmpty())
                    <div class="alert alert-warning text-center">
                        لا توجد بيانات في هذا النطاق الزمني 📅
                    </div>
                @else
                    <!-- الكروت الإحصائية -->
                    <div class="row text-center mb-4">
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow-lg border-0 bg-gradient-success text-white">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">💵 اجمالي الإيرادات</h6>
                                    <h3>{{ number_format($totalRevenue, 2) }} SDG</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow-lg border-0 bg-gradient-success text-white">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">💵 صافي الإيرادات</h6>
                                    <h3>{{ number_format($netRevenue, 2) }} SDG</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow-lg border-0 bg-gradient-info text-white">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">🩺 الجلسات المنفذة</h6>
                                    <h3>{{ $executedSessions }}</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow-lg border-0 bg-gradient-warning text-white">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-1">📅 مجمل الجلسات</h6>
                                    <h3>{{ $totalSessions }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- جدول التفاصيل -->
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>رقم المريض</th>
                                    <th>اسم المريض</th>
                                    <th>اسم الجلسة</th>
                                    <th>سعر الجلسة (SDG)</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sessions as $index => $session)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $session->patientnumber }}</td>
                                        <td>{{ $session->name }}</td>
                                        <td>{{ $session->session_name }}</td>
                                        <td>{{ number_format($session->sessionprice, 2) }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #1cc88a, #13855c);
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #36b9cc, #258391);
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f6c23e, #dda20a);
        }

        .card h3 {
            font-weight: 700;
        }

        table th,
        table td {
            vertical-align: middle !important;
        }
    </style>
@endsection
