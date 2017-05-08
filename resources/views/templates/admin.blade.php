<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'NISFRAM'}} :: NISFRAM</title>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Morris Charts JavaScript -->
        <script src="{{url('assets/sb-admin/js/plugins/morris/raphael.min.js')}}"></script>
        <script src="{{url('assets/sb-admin/js/plugins/morris/morris.min.js')}}"></script>
        <script src="{{url('assets/sb-admin/js/plugins/morris/morris-data.js')}}"></script>
                          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- Morris Charts CSS -->
        <link href="{{url('assets/sb-admin/css/plugins/morris.css')}}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{url('assets/sb-admin/css/sb-admin.css')}}">
        <link rel="stylesheet" href="{{url('assets/sb-admin/font-awesome/css/font-awesome.min.css')}}">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
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