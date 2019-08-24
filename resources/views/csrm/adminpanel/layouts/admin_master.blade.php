<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="description" content="The National Web Portal of Bangladesh (বাংলাদেশ) is the single window of all information and services for citizens and other stakeholders. Here the citizens can find all initiatives, achievements, investments, trade and business, policies, announcements, publications, statistics and others facts" />
    <link rel="shortcut icon" href="{{ asset('assets/adminpanel/img/favicon1.ico') }}" type="img/x-icon" />
    <!-- <title>
        বাংলাদেশ (Bangladesh) জাতীয় তথ্য বাতায়ন | গণপ্রজাতন্ত্রী বাংলাদেশ সরকার | People's Republic of Bangladesh
    </title> -->
    <title>@yield('page-title')</title>
    <!-- DataTables -->
    <link href="{{ asset('assets/adminpanel/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/adminpanel/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/adminpanel/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="{{ asset('assets/adminpanel/css/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!---------- google fonts ---------->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900,Playfair+Display:400,700,700i,900" rel="stylesheet">
    <!---------- bangla font ---------->
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <!-- Font Icons CSS-->
    <link href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css" rel="stylesheet">
    <!---------- fontawesome ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/adminpanel/css/normalize.min.css') }}">
    <link href="{{ asset('assets/adminpanel/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/adminpanel/css/icon-font.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/adminpanel/css/bootstrap.min.css') }}">
    <!---------- animated css ---------->
    <link rel="stylesheet" href="{{ asset('assets/adminpanel/css/animate.min.css') }}">
    <!--For all browser support -->
    <link href="{{ asset('assets/adminpanel/css/reset.css') }}" rel="stylesheet">
    <!-- theme css-->
    <link href="{{ asset('assets/adminpanel/css/style.css') }}" id="theme-stylesheet" rel="stylesheet">
    <!-- Custom css - for your changes-->
    <link href="{{ asset('assets/adminpanel/css/custom.css') }}" rel="stylesheet">
    @yield("page-style")
</head>

<body>
<div class="page home-page">
    <!-- Main Navbar-->
    @include("csrm.adminpanel.header.header")
    <div class="page-content d-flex align-items-stretch">

        <!-- Side Navbar -->
        @include("csrm.adminpanel.menu.sidebar_menu")


        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">@yield('page-header-title')</h2>
                </div>
            </header><!-- Dashboard Counts Section-->

            {{--<div class="container-fluid">--}}
                <ul class="breadcrumb">
                    <div class="container-fluid">
                    @yield("breadcrumb")
                    </div>
                </ul>
            {{--</div>--}}

            @yield("page-main-content")

            <!-- Page Footer-->
            @include("csrm.adminpanel.footer.footer")
        </div>
    </div>
</div>
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="{{ asset('assets/adminpanel/js/tether.min.js') }}">
</script>
<script src="{{ asset('assets/adminpanel/js/bootstrap.min.js') }}">
</script>
<script src="{{ asset('assets/adminpanel/js/jquery.cookie.js') }}">
</script>
<script src="{{ asset('assets/adminpanel/js/jquery.validate.min.js') }}">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
</script>
<script src="{{ asset('assets/adminpanel/js/charts-home.js') }}">
</script>
<script src="{{ asset('assets/adminpanel/js/front.js') }}">
</script>
<script src="{{ asset('assets/adminpanel/js/popper.min.js') }}"></script>
<!-- replace it by local Font Awesome-->
<script src="https://use.fontawesome.com/99347ac47f.js"></script>
<script src="{{ asset('assets/adminpanel/js/fontawesome.com/8918b93e7b.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/fontawesome.js') }}"></script>
<script src="https://kit.fontawesome.com/8918b93e7b.js"></script>
<!-- Required datatable js -->
<script src="{{ asset('assets/adminpanel/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/adminpanel/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/buttons.print.min.js') }}"></script>
<!-- Key Tables -->
<script src="{{ asset('assets/adminpanel/js/dataTables.keyTable.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/adminpanel/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Selection table -->
<script src="{{ asset('assets/adminpanel/js/dataTables.select.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/adminpanel/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/adminpanel/js/jquery.app.js') }}"></script>

<!-- for custom.js -->
<script src="{{ asset('assets/adminpanel/js/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
</script>

@yield("page-script")
</body>

</html>