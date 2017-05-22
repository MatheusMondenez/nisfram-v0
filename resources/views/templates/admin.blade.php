<!DOCTYPE html>
<html>
    <head>
        
        <title>{{$title or 'NISFRAM'}} :: NISFRAM</title>
        
        <!-- Morris Charts JavaScript -->
        <script src="{{url('assets/sb-admin/js/plugins/morris/raphael.min.js')}}"></script>
        <script src="{{url('assets/sb-admin/js/plugins/morris/morris.min.js')}}"></script>
        <script src="{{url('assets/sb-admin/js/plugins/morris/morris-data.js')}}"></script>

        <!-- Morris Charts CSS -->
        <link href="{{url('assets/sb-admin/css/plugins/morris.css')}}" rel="stylesheet">

        <meta name="_token" content="{{ csrf_token() }}" />
        
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
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    
    <script>
    
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    
    </script>
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>

        toastr.info('Bem vindo de volta Matheus');

    </script>

    
    </body>
</html>