<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" href="{{ asset('admin/images/ico/logo.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/ico/logo.jpeg') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/plugins/animate/animate.css') }}">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css"
        integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/vendors/css/forms/toggle/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/pages/chat-application.css') }}">
    <!-- MODERN CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/custom-rtl.css') }}">
    <!-- PAGE LEVEL CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/datedropper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/extensions/timedropper.min.css') }}">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/style-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css-rtl/report.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu 2-columns" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- HEADER -->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="">
                            <!--img class="brand-logo" alt="admin logo" src="/admin/images/logo/one.jpeg"-->
                            <h4 class="brand-text"> المركز الدولي للعلاج الطبيعي والتأهيل  </h4>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
                        </li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online">
                                    <img class="brand-logo" style="height:40px;" src="/admin/images/logo/one.jpeg"
                                        alt="Livestock"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                        class="ft-user"></i> تعديل الملف الشحصي </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout"><i class="ft-power"></i> تسجيل الخروج</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END HEADER -->

    <!-- SIDEBAR -->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <!-- الرئيسية -->
            <li class="nav-item active">
                <a href="{{url('Repo')}}">
                    <i class="la la-dashboard"></i>
                    <span class="menu-title">الرئيسية</span>
                </a>
            </li>

            <!-- الأطباء -->
            <li class="nav-item">
                <a href="{{url('viewdoctor')}}">
                    <i class="la la-user-md"></i>
                    <span class="menu-title">الأطباء</span>
                    <span class="badge badge-info badge-pill float-right mr-2">
                        {{ App\Models\Doctor::count() ?? 0}}
                    </span>
                </a>
            </li>

            <!-- الجلسات -->
            <li class="nav-item">
                <a href="{{url('viewspetial')}}">
                    <i class="la la-stethoscope"></i>
                    <span class="menu-title">الجلسة</span>
                    <span class="badge badge-info badge-pill float-right mr-2">
                        {{ App\Models\SessionDoctor::count() ?? 0 }}
                    </span>
                </a>
            </li>

            <!-- المرضى -->
            <li class="nav-item">
                <a href="{{url('viewpatient')}}">
                    <i class="la la-wheelchair"></i>
                    <span class="menu-title">المرضى</span>
                    <span class="badge badge-info badge-pill float-right mr-2">
                        {{ App\Models\Patient::count() ?? 0 }}
                    </span>
                </a>
            </li>

            <!-- التقارير -->
            <li class="nav-item">
                <a href="#">
                    <i class="la la-bar-chart"></i>
                    <span class="menu-title">عرض التقارير</span>
                    <span class="badge badge-info badge-pill float-right mr-2">1</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="#">عرض الكل</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>


    <!-- MAIN CONTENT -->
    <div class="py-4">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; {{ date('Y') }} <a href=""
                    target="_blank">###</a> </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"> done <i
                    class="ft-heart pink"></i></span>
        </p>
    </footer>

    <!-- JS VENDOR -->
    <script src="{{ asset('admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/forms/toggle/bootstrap-switch.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/forms/switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL JS -->
    <script src="{{ asset('admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/extensions/datedropper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/extensions/timedropper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/pages/chat-application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/customizer.js') }}" type="text/javascript"></script>

    <script src="{{ asset('admin/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/extensions/date-time-dropper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/core/Chart.min.js') }}" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- DataTable Arabic Translation & TimeDropper Init -->
    <script>
        $(document).ready(function () {
            $('.datatable').DataTable({
                "language": {
                    "sProcessing": "جارٍ التحميل...",
                    "sLengthMenu": "أظهر _MENU_ مدخلات",
                    "sZeroRecords": "لم يعثر على أية سجلات",
                    "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مدخل)",
                    "sSearch": "بحث:",
                    "oPaginate": {
                        "sFirst": "الأول",
                        "sPrevious": "السابق",
                        "sNext": "التالي",
                        "sLast": "الأخير"
                    }
                },
                "pageLength": 10,
                "order": [[0, "asc"]]
            });

            for (let i = 1; i <= 14; i++) {
                $('#meridians' + i).timeDropper({
                    meridians: true,
                    setCurrentTime: false
                });
            }
        });
    </script>

</body>

</html>
