<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("title") }}</title>
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ voyager_asset('css/animate.min.css') }}">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin_bg_image"), config('voyager.assets_path') . "/images/bg.jpg" ) }}');
            background-color: {{ Voyager::setting("admin_bg_color", "#FFFFFF" ) }};
        }
        .register-sidebar:after {
            background: linear-gradient(-135deg, {{config('voyager.login.gradient_a','#ffffff')}}, {{config('voyager.login.gradient_b','#ffffff')}});
            background: -webkit-linear-gradient(-135deg, {{config('voyager.login.gradient_a','#ffffff')}}, {{config('voyager.login.gradient_b','#ffffff')}});
        }
        .register-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }

    </style>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-8 col-md-9">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                        <?php $admin_logo_img = Voyager::setting('admin_icon_image', ''); ?>
                        @if($admin_logo_img == '')
                        <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                        <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                        <div class="copy animated fadeIn">
                            <h1>{{ Voyager::setting('admin_title', 'SecureIT') }}</h1>
                            <p>We want to make you feel secure</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3 register-sidebar animated fadeInRightBig">

            <div class="register-container animated fadeInRightBig">

                <h2>Register:</h2>

                <form action="{{ route('register')}}" method="POST">
                {{ csrf_field() }}
                <div class="group">      
                  <input type="text" name="name" value="{{ old('name') }}" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-user"></i><span class="span-input"> Username</span></label>
                </div>
                <div class="group">      
                  <input type="text" name="email" value="{{ old('email') }}" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-envelope"></i><span class="span-input"> E-mail</span></label>
                </div>
                <div class="group">      
                  <input type="text" name="phone" value="{{ old('phone') }}" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-earphone"></i><span class="span-input"> Phone Number</span></label>
                </div>

                <div class="group">      
                  <input type="password" name="password" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-lock"></i><span class="span-input"> Password</span></label>
                </div>
                <div class="group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                  <label><i class="glyphicon glyphicon-pencil"></i><span class="span-input"> Confirm Password</span></label>
                        </div>

                <button type="submit" class="btn btn-block register-button">
                    <span class="signingin hidden"><span class="glyphicon glyphicon-refresh"></span> Registering</span>
                    <span class="signin">Register</span>
                </button>
               
              </form>

              @if(!$errors->isEmpty())
              <div class="alert alert-black">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach                
                </ul>
              </div>            
              @endif

            </div> <!-- .register-container -->
            
        </div> <!-- .register-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
</script>
</body>
</html>

