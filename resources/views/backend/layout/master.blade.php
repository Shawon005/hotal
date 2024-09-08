<!DOCTYPE html>
<html lang="en">
<head>        
@php $setting=setting(); @endphp
    <title>AS Hotel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/ico" href="{{$setting->fav_logo}}"/>
    <link href="{{asset('')}}backend/css/stylesheets.css" rel="stylesheet" type="text/css" /> 
    <link href="{{asset('')}}backend/css/stylesheets.css" rel="stylesheet" type="text/css" /> 
    

</head>
<body class="bg-img-num1"> 
    
<div class="page-container">
        @include('backend.partials.sidebar')
        @yield('content')  
</div>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery-ui.min.js"></script>   
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/globalize.js"></script>    
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/bootstrap/bootstrap.min.js"></script>

    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/tinymce/tinymce.min.js"></script>
    @yield('js')
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/ibutton/jquery.ibutton.js"></script>
    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/datatables/jquery.dataTables.min.js"></script> 
    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/knob/jquery.knob.js"></script>
    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/sparkline/jquery.sparkline.min.j"></script>
    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/flot/jquery.flot.js"></script>
    <script type='text/javascript' src="{{asset('')}}backend/js/plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins.js"></script>    
    <script type="text/javascript" src="{{asset('')}}backend/js/actions.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/charts.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/jquery.table2excel.js"></script>

    <script type="text/javascript" src="{{asset('')}}backend/js/settings.js"></script>

    <!-- <link rel="icon" type="image/ico" href="favicon.ico" />

<link href="css/stylesheets.css" rel="stylesheet" type="text/css" /> -->


</body>
</html>