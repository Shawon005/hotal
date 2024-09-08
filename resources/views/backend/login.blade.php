<!DOCTYPE html>
<html lang="en">
<head>        
    <title>AS Hotel</title>
    @php $setting=setting(); @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="icon" type="image/ico" href="{{$setting->fav_logo}}"/>
    
    <link href="{{asset('')}}backend/css/stylesheets.css" rel="stylesheet" type="text/css" />        
    
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery-ui.min.js"></script>   
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/jquery/globalize.js"></script>    
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/bootstrap/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type="text/javascript" src="{{asset('')}}backend/js/plugins.js"></script>    
    <script type="text/javascript" src="{{asset('')}}backend/js/actions.js"></script>
    <script type="text/javascript" src="{{asset('')}}backend/js/settings.js"></script>
</head>
<body class="bg-img-num1"> 
    
    <div class="container">        
  
        <div class="registration-block">
            <div class="block block-transparent">
                <div class="head tac">                    
                    <a href="{{route('home')}}"><img src="{{$setting->logo_light}}"/></a>
                </div>
                <div class="content controls npt">
                    <form action="{{route('auth.store')}}"method="post">           
                        @csrf
                        <div class="form-row" style="margin-top: 10px;">
                            
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail"/>
                                </div>
                            </div>
                            </div>
                            <div class="form-row" style="margin-top: 10px;">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="icon-lock"></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                                </div>
                            </div>
                        </div>                    
       
                        <div class="form-row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-block btn-clean">Sign In</button>
                            </div>
                        </div> 
                    </form>   
                    <!-- <div class="form-row">
                        <div class="col-md-12 tac"><strong>OR USE</strong></div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-info btn-block"><span class="icon-facebook"></span> &nbsp; Facebook</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary btn-block"><span class="icon-twitter"></span> &nbsp; Tweeter</a>
                        </div>
                    </div>                     -->
                </div>
            </div>
        </div>

    </div>

</body>
</html>