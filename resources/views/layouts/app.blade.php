<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Arsip SMK 2 | title</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('core-ui') }}/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('core-ui') }}/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('core-ui') }}/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('core-ui') }}/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('core-ui') }}/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('core-ui') }}/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('core-ui') }}/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('core-ui') }}/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('core-ui') }}/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="{{ asset('core-ui') }}/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('core-ui') }}/css/examples.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('core-ui') }}/plugins/datatable/datatables.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('core-ui') }}/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')



    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <!-- header -->
        @include('layouts.header')

        <!-- content -->
        @yield('content')

        <!-- footer -->
        @include('layouts.footer')

    </div>

    {{-- Jquery --}}
    <script src="{{ asset('core-ui') }}/plugins/jquery/jquery-3.1.0.js"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('core-ui') }}/plugins/datatable/datatables.min.js"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('core-ui') }}/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('core-ui') }}/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('core-ui') }}/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{ asset('core-ui') }}/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{ asset('core-ui') }}/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{ asset('core-ui') }}/js/main.js"></script>
    @stack('js')

</body>

</html>
