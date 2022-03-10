<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    @include('partikal.css')
</head>

<body class="animsition">
    <div class="page-wrapper">

    <!-- HEADER MOBILE-->
        @include('partikal.header-mobile')
        <!-- END HEADER MOBILE-->
        

        <!-- MENU SIDEBAR-->
        @include('partikal.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('partikal.header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
           @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    @include('partikal.script')
</body>

</html>
<!-- end document-->
