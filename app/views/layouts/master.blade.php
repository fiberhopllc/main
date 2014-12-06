<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->
<head>
    <!-- Basic meta tags -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- css -->
    <link href="/assets/stylesheets/min/application.css" rel="stylesheet" media="screen">
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
                <a href="@yield('facebook_url')" data-toggle="tooltip" class="t-tips" data-original-title="Facebook"><img src="/assets/images/social/facebook.png" width="30" height="30" alt=""></a>
                <a href="@yield('googleplus_url')" data-toggle="tooltip" class="t-tips" data-original-title="Google Plus"><img src="/assets/images/social/google-plus.png" width="30" height="30" alt=""></a>
                <a href="@yield('twitter_url')" data-toggle="tooltip" class="t-tips" data-original-title="Twitter"><img src="/assets/images/social/twitter.png" width="30" height="30" alt=""></a>
                <a href="@yield('youtube_url')" data-toggle="tooltip" class="t-tips" data-original-title="YouTube"><img src="/assets/images/social/youtube.png" width="30" height="30" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Older IE Message -->
<!--[if lt IE 8]>
<div class="ie-block">
    <h1 class="Ops">Ooops!</h1>
    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><!-- jQuery from Google CDN -->
<script>window.jQuery || document.write('<script src="/assets/javascripts/min/jquery-1.8.3.min.js"><\/script>')</script><!-- jQuery Local if CDN failed -->
<script src="/assets/javascripts/min/application.js"></script><!-- All jQuery functions and callings -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>