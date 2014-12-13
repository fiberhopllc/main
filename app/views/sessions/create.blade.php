<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <meta charset="UTF-8">
    <title>Customer Area</title>
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="icon" type="image/ico" href="favicon.ico">

    {{ HTML::generateCSS('login.css') }}

    <!-- jQuery framework -->
    <script src="assets/javascripts/min/jquery-1.8.3.min.min.js"></script>
    <!-- validation -->
    <script src="assets/javascripts/min/lib/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
        (function(a){a.fn.vAlign=function(){return this.each(function(){var b=a(this).height(),c=a(this).outerHeight(),b=(b+(c-b))/2;a(this).css("margin-top","-"+b+"px");a(this).css("top","50%");a(this).css("position","absolute")})}})(jQuery);(function(a){a.fn.hAlign=function(){return this.each(function(){var b=a(this).width(),c=a(this).outerWidth(),b=(b+(c-b))/2;a(this).css("margin-left","-"+b+"px");a(this).css("left","50%");a(this).css("position","absolute")})}})(jQuery);
        $(document).ready(function() {
            if($('#login-wrapper').length) {
                $("#login-wrapper").vAlign().hAlign()
            };
            if($('#login-validate').length) {
                $('#login-validate').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    rules: {
                        login_name: { required: true },
                        login_password: { required: true }
                    }
                })
            }
            if($('#forgot-validate').length) {
                $('#forgot-validate').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    rules: {
                        forgot_email: { required: true, email: true }
                    }
                })
            }
            $('#pass_login').click(function() {
                $('.panel:visible').slideUp('200',function() {
                    $('.panel').not($(this)).slideDown('200');
                });
                $(this).children('span').toggle();
            });
        });
    </script>

</head>
<body>
<div id="login-wrapper" class="clearfix">
    <div class="main-col">
        <img src="img/login-logo.png" alt="" class="logo_img" />
        <div class="panel">
            <p class="heading_main">Account Login</p>
            {{ Form::open(array('route' => 'sessions.store', 'id' => 'login-validate')) }}
                <label for="login_name">Login</label>
                <input type="text" id="login_name" name="login_name" value="josh@gobyweb2.com" />
                <label for="login_password">Password</label>
                <input type="password" id="login_password" name="login_password" value="password" />
                <label for="login_remember" class="checkbox"><input type="checkbox" id="login_remember" name="login_remember" /> Remember me</label>
                <div class="submit_sect">
                    <button type="submit" class="btn btn-gobyweb-3">Login</button>
                </div>
            {{ Form::token() }}
            {{ Form::close() }}
        </div>
        <div class="panel" style="display:none">
            <p class="heading_main">Can't sign in?</p>
            {{ Form::open(array('url' => 'forgot_password', 'id' => 'forgot-validate')) }}
                <label for="forgot_email">Your email adress</label>
                <input type="text" id="forgot_email" name="forgot_email" />
                <div class="submit_sect">
                    <button type="submit" class="btn btn-gobyweb-3">Request New Password</button>
                </div>
            {{ Form::token() }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="login_links">
        <a href="javascript:void(0)" id="pass_login"><span>Forgot password?</span><span style="display:none">Account login</span></a>
    </div>
</div>
</body>
</html>