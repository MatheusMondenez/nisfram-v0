<!DOCTYPE html>
<html>
    <head>
        
        <title>{{$title or 'NISFRAM'}} :: NISFRAM</title>
        
        <!--<meta name="_token" content="{{ csrf_token() }}" />-->
        
        <script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>      
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>      
        <script src="{{url('assets/sweet-alert/sweetalert.min.js')}}"></script>      
        <script src="{{url('assets/js/custom.js')}}"></script>      
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        @stack('scripts')

        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <!--<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-theme.min.css')}}"> Tema com degradêzinho-->
        <link rel="stylesheet" href="{{url('assets/sb-admin/css/sb-admin.css')}}">
        <link rel="stylesheet" href="{{url('assets/sb-admin/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/sweet-alert/sweetalert.css')}}">
        <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
        
    </head>
    <body> 
        
        <div id="wrapper">

            @include('templates.includes.navigation')

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    </body>
</html>