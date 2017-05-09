<!DOCTYPE html>
<html>
    <head>
        
        <title>{{$title or 'NISFRAM'}} :: NISFRAM</title>
        
        <script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>      
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>      
        <script src="{{url('assets/js/custom.js')}}"></script>      

        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <!--<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-theme.min.css')}}"> Tema com degradêzinho-->
        <link rel="stylesheet" href="{{url('assets/sb-admin/css/sb-admin.css')}}">
        <link rel="stylesheet" href="{{url('assets/sb-admin/font-awesome/css/font-awesome.min.css')}}">
        
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