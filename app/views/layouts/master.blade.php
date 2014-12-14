<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->
<head>
    <!-- Basic meta tags -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- css -->
    {{ HTML::style("/assets/stylesheets/bootstrap.css") }}
    {{ HTML::style("/assets/stylesheets/bootstrap-responsive.css") }}
    {{ HTML::style("/assets/stylesheets/bootstrap-theme.css") }}
    {{ HTML::style("/assets/stylesheets/flexslider.css") }}
    {{ HTML::style("/assets/stylesheets/font-awesome.css") }}
    {{ HTML::style("/assets/stylesheets/socialist.css") }}
    {{ HTML::style("/assets/stylesheets/piro-box.css") }}
    {{ HTML::style("/assets/stylesheets/style.css") }}
    <!--<link href="/assets/stylesheets/sprite.css" rel="stylesheet" media="screen">-->
</head>

<body>
@yield('content')
<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <p class="span8">Copyright &copy; 2014 FiberHop LLC. All rights reserved.</p>

            <div class="span4 pull-right t-right">
                <a href="@yield('facebook_url')" data-toggle="tooltip" class="t-tips"
                   data-original-title="Facebook"><img src="/assets/images/social/facebook.png" width="30" height="30"
                                                       alt=""></a>
                <a href="@yield('googleplus_url')" data-toggle="tooltip" class="t-tips"
                   data-original-title="Google Plus"><img src="/assets/images/social/google-plus.png" width="30"
                                                          height="30" alt=""></a>
                <a href="@yield('twitter_url')" data-toggle="tooltip" class="t-tips" data-original-title="Twitter"><img
                        src="/assets/images/social/twitter.png" width="30" height="30" alt=""></a>
                <a href="@yield('youtube_url')" data-toggle="tooltip" class="t-tips" data-original-title="YouTube"><img
                        src="/assets/images/social/youtube.png" width="30" height="30" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Older IE Message -->
<!--[if lt IE 8]>
<div class="ie-block">
    <h1 class="Ops">Ooops!</h1>

    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to
        access the maximum functionality of this website. </p>
    <ul class="browsers">
        <li>
            <a href="https://www.google.com/intl/en/chrome/browser/">
                <img src="img/browsers/chrome.png" alt="">

                <div>Google Chrome</div>
            </a>
        </li>
        <li>
            <a href="http://www.mozilla.org/en-US/firefox/new/">
                <img src="img/browsers/firefox.png" alt="">

                <div>Mozilla Firefox</div>
            </a>
        </li>
        <li>
            <a href="http://www.opera.com/computer/windows">
                <img src="img/browsers/opera.png" alt="">

                <div>Opera</div>
            </a>
        </li>
        <li>
            <a href="http://safari.en.softonic.com/">
                <img src="img/browsers/safari.png" alt="">

                <div>Safari</div>
            </a>
        </li>
        <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                <img src="img/browsers/ie.png" alt="">

                <div>Internet Explorer(New)</div>
            </a>
        </li>
    </ul>
    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
</div>
<![endif]-->

<!-- Javascript -->
{{ HTML::script("/assets/javascripts/min/application.js") }}
{{ HTML::script("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js") }}
<!-- jQuery from Google CDN -->
<script>window.jQuery || document.write('<script src="/assets/javascripts/min/jquery-1.8.3.min.min.js"><\/script>')</script>
<!-- jQuery Local if CDN failed -->
{{ HTML::script("/assets/javascripts/min/bootstrap.min.js") }}
<!-- Bootstrap  -->
{{ HTML::script("/assets/javascripts/min/jquery.flexslider-min.min.js") }}
<!-- Flex Slider -->
{{ HTML::script("/assets/javascripts/min/waypoints.min.min.js") }}
<!-- Sticky Menu -->
{{ HTML::script("/assets/javascripts/min/modernizr.custom.min.js") }}
<!--  To detact CSS3 & HTML5-->
{{ HTML::script("/assets/javascripts/min/jquery.stapel.min.js") }}
<!-- Portfolio -->
{{ HTML::script("/assets/javascripts/min/jquery.socialist.min.js") }}
<!-- Social Feeds -->
{{ HTML::script("/assets/javascripts/min/enscroll.min.min.js") }}
<!-- Custom Scrollbar -->
{{ HTML::script("/assets/javascripts/min/jquery-ui-1.8.2.custom.min.min.js") }}
<!-- Jquery UI -->
{{ HTML::script("/assets/javascripts/min/pirobox_extended_min.min.js") }}
<!-- Lightbox popup -->
{{ HTML::script("/assets/javascripts/min/jquery.masonry.min.js") }}
<!-- Masonry(Testimonials) -->
{{ HTML::script("/assets/javascripts/min/functions.min.js") }}
<!-- All jQuery functions and callings -->

<!--[if lt IE 9]>
{{ HTML::script("http://html5shim.googlecode.com/svn/trunk/html5.js") }}
<![endif]-->

<!-- TODO -->
<!--
http://code.tutsplus.com/tutorials/building-a-customer-management-app-using-angularjs-and-laravelDASHDASHcms-22234
-->
</body>
</html>