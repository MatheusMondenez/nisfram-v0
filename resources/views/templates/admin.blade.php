<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'NISFRAM'}} :: NISFRAM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../resources/assets/sb-admin/css/sb-admin.css">
        <link rel="stylesheet" href="../../resources/assets/sb-admin/js/jquery.min.js">
        
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