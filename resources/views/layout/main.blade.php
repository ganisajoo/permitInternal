<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DC Balitower Permit System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("lte/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">

    <link rel="stylesheet"
        href="{{ asset("lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/daterangepicker/daterangepicker.css") }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css") }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset("lte/plugins/select2/css/select2.min.css") }}">
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset("lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css") }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("lte/dist/css/adminlte.min.css") }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset("/dist/img/user1-128x128.jpg") }}"
                                    alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset("lte/dist/img/user8-128x128.jpg") }}"
                                    alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset("lte/dist/img/user3-128x128.jpg") }}"
                                    alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="view/tabelPermit" class="brand-link">
                <span class="col brand-text font-weight-bold">DC Permit Internal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a class="">Administrator</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url ('/tabelPermit') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Permit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url ('/tabelKartu') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel Peminjaman Kartu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url ('/tabelUser') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabel User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendar
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/e-commerce.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-commerce</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/projects.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project-add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project-edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project-detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Detail</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/contacts.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('table_title')</h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            @yield('content')
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.0.5
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset("lte/plugins/jquery/jquery.min.js") }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset("lte/plugins/bootstrap/js/bootstrap.bundle.min.js") }}">
        </script>
        <!-- Select2 -->
        <script src="{{ asset("lte/plugins/select2/js/select2.full.min.js") }}"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script
            src="{{ asset("lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js") }}">
        </script>
        <!-- InputMask -->
        <script src="{{ asset("lte/plugins/moment/moment.min.js") }}"></script>
        <script src="{{ asset("lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js") }}">
        </script>
        <!-- date-range-picker -->
        <script src="{{ asset("lte/plugins/daterangepicker/daterangepicker.js") }}"></script>
        <!-- bootstrap color picker -->
        <script
            src="{{ asset("lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") }}">
        </script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script
            src="{{ asset("lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}">
        </script>
        <!-- Bootstrap Switch -->
        <script src="{{ asset("lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}">
        </script>
        <!-- DataTable -->
        <script src="{{ asset("lte/plugins/datatables/jquery.dataTables.min.js") }}"></script>
        <script
            src="{{ asset("lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}">
        </script>
        <script
            src="{{ asset("lte/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}">
        </script>
        <script
            src="{{ asset("lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}">
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset("lte/dist/js/adminlte.min.js") }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset("lte/dist/js/demo.js") }}"></script>
        <!-- page script -->
        <script>
            var row = 1;
            $(function () {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservationdate').datetimepicker({
                    format: 'L'
                });
                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                                .subtract(1, 'month').endOf('month')
                            ]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function (start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                            'MMMM D, YYYY'))
                    }
                )

                //Timepicker
                $('#timepicker').datetimepicker({
                    format: 'LT'
                })

                //Bootstrap Duallistbox
                $('.duallistbox').bootstrapDualListbox()

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                $('.my-colorpicker2').on('colorpickerChange', function (event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                });

                $("input[data-bootstrap-switch]").each(function () {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                });

                $('#datetimepicker5').datetimepicker();
                $("#addRow").click(function () {
                    var html = '';
                    html += '<div class="row" id="inputFormRow">';
                    html += '<div class="form-group col-3">';
                    html +=
                        '<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">';
                    html += '</div>';
                    html += '<div class="form-group col-2">';
                    html +=
                        '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NIK or ID Number">';
                    html += '</div>';
                    html += '<div class="form-group col-3">';
                    html +=
                        '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">';
                    html += '</div>';
                    html += '<div class="form-group col-3">';
                    html += '<select class="form-control select2" style="width: 100%;">';
                    html += '<option selected="selected">Building Management</option>';
                    html += '<option>IP-Core</option>';
                    html += '<option>IT-Infrastruktur</option>';
                    html += '<option>IT-Network & Security</option>';
                    html += '<option>IT-Server</option>';
                    html += '<option>IT-Oracle</option>';
                    html += '</select>';
                    html += '</div>';
                    html += '<div>';
                    html +=
                        '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                    $('#newRow').append(html);
                });

                $("#addDeviceRow").click(function () {
                    var html = '';
                    html += '<div class="row" id="inputFormRow">';
                    html += '<div class="form-group col-3">';
                    html += '<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Device Name">';
                    html += '</div>';
                    html += '<div class="form-group col-4">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Brand Name">';
                    html += '</div>';
                    html += '<div class="form-group col-3">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Serial Number">';
                    html += '</div>';
                    html += '<div class="form-group col-1">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qty">';
                    html += '</div>';
                    html += '<div>';
                    html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                    $('#newDeviceRow').append(html);
                });

                $("#addRiskRow").click(function () {
                    var html = '';
                    html += '<div class="row" id="inputFormRow">';
                    html += '<div class="form-group col-3">';
                    html += '<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Risk Name">';
                    html += '</div>';
                    html += '<div class="form-group col-2">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Posibility">';
                    html += '</div>';
                    html += '<div class="form-group col-2 ">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Impact">';
                    html += '</div>';
                    html += '<div class="form-group col-4">';
                    html += '<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mitigation Plan">';
                    html += '</div>';
                    html += '<div>';
                    html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                    $('#newRiskRow').append(html);
                });

                // remove row
                $(document).on('click', '#removeRow', function () {
                    $(this).closest('#inputFormRow').remove();
                });

            });
        </script>
</body>

</html>
