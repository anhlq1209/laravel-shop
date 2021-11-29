<!DOCTYPE html>
<html lang="vn">

    <head>
        
        @include('admin.layouts.head')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../template/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <div class="wrapper">

            @include('admin.layouts.navbar')

            @include('admin.layouts.sidebar')

            <div class="content-wrapper">

                @include('admin.layouts.header')

                @yield('content')

            </div>
            
        </div>

        @include('admin.layouts.footer')

    </body>

</html>