<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adaptif E-learning System | @yield('page')</title>
    <link rel="icon" href="{{ asset('assets/img/gomit.svg') }}" type="image/png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/application/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/application/bower_components/Ionicons/css/ionicons.min.css') }}">
    {{-- Toast Notification Asset --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <link rel="stylesheet"
        href="{{ asset('assets/application/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/application/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/application/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/application/plugins/pace/pace.min.css') }}">

    {{-- Select2 --}}
    <link href="{{ asset('assets/select2/dist/css/select2.css') }}" rel="stylesheet"type="text/css" />

    <script src="{{ asset('assets/ckeditor/build/ckeditor.js') }}"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/application/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/application/dist/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .button-container {
            display: flex;
            /* Mengubah container menjadi flexbox */
            justify-content: flex-end;
            /* Mengatur agar isi container tersusun di ujung kanan */
        }

        .button-container form,
        .button-container a {
            margin-left: 1px;
            /* Memberi jarak antara setiap tombol */
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            /* Atur jarak antara tombol */
            align-items: center;
            /* Agar tombol sejajar secara vertikal */
        }

        .button-container2 {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Jarak antara tombol */
        }

        .button-container2.btn,
        .button-container2form {
            flex: 11calc(50% - 10px);
            /* Dua tombol per baris dengan jarak 10px */
            box-sizing: border-box;
            /* Menghitung padding dan border dalam lebar elemen */
            margin: 0;
        }

        .list-group-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 5px;
            padding: 10px;
        }

        .list-group-item:last-child {
            margin-bottom: 0;
        }

        .btn-delete {
            padding: 2px 6px;
            margin-left: 10px;
            width: auto;
            /* Tombol hapus tidak mengambil lebar penuh */
        }

        .text-center .btn-add {
            display: block;
            width: 100%;
            /* Tombol Add mengambil lebar penuh */
            padding: 5px 10px;
            margin-top: 10px;
        }

        #checkAll {
            cursor: pointer;
        }

        /* Memastikan Select2 container mengisi lebar penuh kolom form */
        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
            height: calc(2.25rem + 2px) !important;
            /* Sesuaikan tinggi sesuai dengan elemen form lainnya */
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><i class="fa fa-home"></i></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg" style="font-size:16px;"><b>ADAPTIF E-LEARNING</b>&nbsp;SYSTEM</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{-- @if (auth()->user()->hasRole('administrator'))
                                        <img src="{{ asset('admin.png') }}" class="user-image" alt="User Image">
                                    @else --}}
                                {{-- <img src="{{ asset('storage/' . auth()->user()->photo) }}" class="user-image" alt="User Image"> --}}
                                {{-- @endif --}}
                                <span class="hidden-xs">{{ auth()->user()->nama_lengkap }}</span>
                            </a>
                        </li>
                        <!-- Logout Button -->
                        <li class="bg-red">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                <span>{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel" style="padding: 14px 10px !important;">
                    <div class="pull-left image">
                        <img src="{{ asset('assets/img/logo-bg.jpg') }}"
                            style="height: 120px !important; width:100% !important; max-width:100% !important "
                            alt="User Image">
                    </div>

                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    @yield('sidebar')
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    E-Learning, Universitas Bengkulu
                    <small>Sistem Informasi Pembelajaran Online</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Application</a></li>
                    <li class="active">@yield('page')</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b><a href="{{ config('app.url') }}" target="_blank">E-Learning Universitas Bengkulu</a></b>
            </div>

            <strong>Copyright © {{ Carbon\Carbon::now()->year }} <a href="{{ config('app.url') }}">Adaptif
                    E-Learning by Rumah Ilmu</a>.</strong>
        </footer>

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->


        <!-- jQuery 3 -->
        <script src="{{ asset('assets/application/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('assets/application/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('assets/application/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

        <script
            src="{{ asset('assets/application/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
        </script>
        <script src="{{ asset('assets/application/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('assets/application/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/application/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ asset('assets/application/bower_components/PACE/pace.min.js') }}"></script>

        <!-- FastClick -->
        <script src="{{ asset('assets/application/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/application/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('assets/application/dist/js/demo.js') }}"></script>
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/055120b175.js" crossorigin="anonymous"></script>
        {{-- Toastr Notification --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        {{-- Select2 --}}
        <script src="{{ asset('assets/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/ckeditor/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.sidebar-menu').tree()
            });

            // Toast Notification Setting
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch (type) {
                    case 'info':
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "10000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "10000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'success':
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "10000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "10000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        };
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    responsive: true
                });
                $('#table2').DataTable({
                    responsive: true
                });
                $('#table3').DataTable({
                    responsive: true
                });
                $('#table4').DataTable({
                    responsive: true
                });
                $('#table5').DataTable({
                    responsive: true
                });
            });
        </script>
        <script>
            $(document).ajaxStart(function() {
                Pace.restart()
            })
        </script>
        @stack('scripts')
</body>

</html>
