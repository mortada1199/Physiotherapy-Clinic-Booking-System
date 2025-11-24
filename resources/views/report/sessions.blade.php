@extends('layouts.dashbord')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">تقرير الجلسات</h3>
                </div>
            </div>

            <div class="content-body">
                <form method="GET" action="{{ route('reportsessions') }}" class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="date" name="from" class="form-control" value="{{ request('from') }}">
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="to" class="form-control" value="{{ request('to') }}">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">عرض التقرير</button>
                        </div>
                    </div>
                </form>

                <table class="table display nowrap table-striped scroll-horizontal table-bordered">
                    <thead>
                        <tr>
                            <th> #</th>
                            <th>رقم المريض</th>
                            <th>اسم المريض</th>
                            <th>الطبيب المحول</th>
                            <th>الطبيب المنفذ</th>
                            <th>نوع الجلسة</th>
                            <th> نظرة</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $session)
                            <tr>
                                <td>{{ $session->id }}</td>
                                <td>{{ $session->patientnumber }}</td>
                                <td>{{ $session->name }}</td>
                                <td>{{ $session->referingdoctor_name }}</td>
                                <td>{{ $session->exectingdoctor_name }}</td>
                                <td>{{ $session->type }}</td>
                                <td><a href="{{ route('patienthistory', $session->name) }}" class="btn btn-outline-dark  btn-sm"
                                        title="الجلسات السابقة">
                                        <i class="la la-history "></i>
                                    </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if ($sessions->isEmpty())
                    <p class="text-center mt-3">لا توجد بيانات في هذا النطاق الزمني.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
