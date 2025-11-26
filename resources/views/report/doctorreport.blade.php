@extends('layouts.dashbord')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-3">
                <div class="content-header-left col-md-6 col-12">
                    <h3 class="content-header-title">📊 تقارير الأطباء</h3>
                </div>
            </div>

            <div class="card p-3 shadow-sm">
                <form action="{{ route('doctreports') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label>من تاريخ:</label>
                            <input type="date" name="from" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>إلى تاريخ:</label>
                            <input type="date" name="to" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>الطبيب:</label>
                            <select name="doctor_id" class="form-control" required>
                                <option value="">اختر الطبيب</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100" type="submit">عرض التقرير</button>
                        </div>
                    </div>
                </form>
            </div>

            @isset($sessions)
                <div class="card mt-4 p-3 shadow-sm">
                    <h5 class="mb-3">
                        تقرير الطبيب: <strong>{{ $selectedDoctor->name }}</strong>
                        {{-- من <strong>{{ $request->from }}</strong> إلى <strong>{{ $request->to }}</strong> --}}
                    </h5>

                    <div class="row text-center mb-3">
                        <div class="col-md-6">
                            <div class="card bg-light p-3">
                                <h6>عدد الجلسات</h6>
                                <h3 class="text-primary">{{ $totalSessions }}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light p-3">
                                <h6>إجمالي المبلغ</h6>
                                <h3 class="text-success">{{ number_format($totalAmount, 2) }} SDG</h3>
                            </div>
                        </div>
                    </div>

                    {{-- <table class="table table-bordered">// --}}
                    <table class="table datatable">
                        <thead class="table-secondary  text-center">
                            <tr>
                                <th>#</th>
                                <th>تاريخ الجلسة</th>
                                <th>اسم المريض</th>
                                <th>نوع الجلسة</th>
                                <th>المبلغ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sessions as $index => $session)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $session->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $session->name }}</td>
                                    <td>{{ $session->session_name }}</td>
                                    <td>{{ number_format($session->sessionprice, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            @endisset
        </div>
    </div>
@endsection
