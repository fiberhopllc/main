@extends('layouts.master')

@section('title', 'Home')

@section('facebook_url',    'https://www.facebook.com/fiberhopllc')
@section('googleplus_url',  'https://plus.google.com/u/2/b/117124704233597801013/117124704233597801013/about/p/pub')
@section('twitter_url',     'https://twitter.com/fiberhopllc')
@section('youtube_url',     'https://www.youtube.com/channel/UCcEYoVuG9J-v48pd6uori6g')

@section('content')
<!-- Page loading -->
<div id="p-load" class="dark">
    <div class="loader"><i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <span>Page is loading.....</span></div>
</div>
<!-- End Page loading -->

<!-- Section Home -->
<section id="home" class="light">
<h2>&nbsp;</h2>
<!-- Header -->
<header id="header" class="container">

    <!-- Social feeds -->
    <div class="feeds hidden-phone hidden-tablet" id="feeds-display">
        <div class="feeds-content">
            <div class="overflow">
                <div>Test</div>
            </div>
        </div>
    </div>
    <!--<div class="feeds-toggle hidden-phone hidden-tablet" id="feed-display"> <span class="down"></span> </div>-->
    <!-- End Social feeds -->

    <div class="row">
        <div class="span9">
            <!-- Logo + Slogan -->
            <div class="logo"><img src="/assets/images/logo.png" width="250" height="125" alt="FiberHop LLC Logo : 197x74"></div>

            <!-- end Logo + Slogan -->
        </div>

        <!-- Social links -->
        <div class="span3 hidden-phone">
            <ul class="social">
                <li><a href="@yield('facebook_url')"><img src="/assets/images/social/facebook.png" width="30"
                                                          height="30" alt=""></a></li>
                <li><a href="@yield('googleplus_url')"><img src="/assets/images/social/google-plus.png" width="30"
                                                            height="30" alt=""></a></li>
                <li><a href="@yield('twitter_url')"><img src="/assets/images/social/twitter.png" width="30"
                                                         height="30" alt=""></a></li>
                <li><a href="@yield('youtube_url')"><img src="/assets/images/social/youtube.png" width="30"
                                                         height="30" alt=""></a></li>
            </ul>
        </div>
        <!-- Social links -->
    </div>

    <!-- Navigation Menu -->
    <div class="nav-container">
        <nav class="navbar">
            <div class="navbar-inner container">
                <div class="collapse-nav"><span class="collapse-nav-title">NAVIGATION</span>

                    <div class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </div>
                </div>
                <div class="nav-collapse collapse">
                    <ul class="nav" id="navigation">
                        <li><a class="active" href="#home">FiberHOP LLC</a></li>
                        <li><a href="#about-us">Consulting</a>
                            <ul>
                                <li><a href="#">DC Design</a></li>
                                <li><a href="#">System & Cloud Architecture</a></li>
                                <li><a href="#">Network Architecture</a></li>
                                <li><a href="#">Layered Security</a></li>
                                <li><a href="#">Migrations</a></li>
                                <li><a href="#">System Integration</a></li>
                                <li><a href="#">Systems & Network Support</a></li>
                                <li><a href="#">VoIP</a></li>
                            </ul>
                        </li>
                        <li><a href="#development">Development</a>
                            <ul>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Java</a></li>
                                <li><a href="#">C# (C-Sharp)</a></li>
                                <li><a href="#">ASP.NET</a></li>
                                <li><a href="#">PHP</a></li>
                            </ul>
                        </li>
                        <li><a href="#hosting">Hosting</a>
                            <ul>
                                <li><a href="#">Colocation</a></li>
                                <li><a href="#">VDI</a></li>
                                <li><a href="#">Virtual Machines(VM)</a></li>
                                <li><a href="#">Dedicated</a></li>
                                <li><a href="#">Virtual Hosting</a></li>
                                <li><a href="#">Transit</a></li>
                                <li><a href="#">Direct Internet Access (DIA)</a></li>
                                <li><a href="#">Load Balancing (LB)</a></li>
                            </ul>
                        </li>
                        <li><a href="#services">Managed Services</a>
                            <ul>
                                <li><a href="#">DC Design</a></li>
                                <li><a href="#">System & Cloud Architecture</a></li>
                                <li><a href="#">Network Architecture</a></li>
                                <li><a href="#">Layered Security</a></li>
                                <li><a href="#">Migrations</a></li>
                                <li><a href="#">System Integration</a></li>
                                <li><a href="#">Systems & Network Support</a></li>
                                <li><a href="#">VoIP</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navigation Menu -->

</header>
<!-- End Header -->

<!-- Image Slider -->
<div class="flexslider">
    <ul class="slides">

        <li><img src="/assets/images/slider/8.jpg" alt="" class="lazy" data-original="/assets/images/slider/8.jpg"/></li>
        <li><img src="/assets/images/slider/4.jpg" alt="" class="lazy" data-original="/assets/images/slider/4.jpg"/></li>
        <li><img src="/assets/images/slider/2.jpg" alt="" class="lazy" data-original="/assets/images/slider/2.jpg"/></li>
        <li><img src="/assets/images/slider/6.jpg" alt="" class="lazy" data-original="/assets/images/slider/6.jpg"/></li>
        <li><img src="/assets/images/slider/3.jpg" alt="" class="lazy" data-original="/assets/images/slider/3.jpg"/></li>
        <li><img src="/assets/images/slider/7.jpg" alt="" class="lazy" data-original="/assets/images/slider/7.jpg"/></li>
        <li><img src="/assets/images/slider/9.jpg" alt="" class="lazy" data-original="/assets/images/slider/9.jpg"/></li>
        <li><img src="/assets/images/slider/1.jpg" alt="" class="lazy" data-original="/assets/images/slider/1.jpg"/></li>
        <li><img src="/assets/images/slider/9.png" alt=""/></li>
    </ul>
    <div class="container highlights hidden-phone hidden-tablet">
        <div class="row">
            <article class="span6 h-block pull-right">
                <h2 class="hbg-l">Sample heading goes here</h2>

                <div class="clearfix"></div>
                <p>Jvu gravida diam volutpat sit amet. Etiam elit lorem, gravida diam volutpat sit amet mattis in
                    congue at, lacinia bibendum nisi fermentum in arcu. Donec ullamcorper felis at eros malesuada at
                    bibendum nisi fermentum.</p>
            </article>
        </div>
    </div>
</div>
<!-- End Image Slider -->

<div class="container">
    <h1 class="welcome-text">Welcome to Fiber<span>Hop</span></h1>
    <hr/>
    <p>More than 12 million customers count on us to help them find the right name and turn it into a one-of-a-kind
        digital identity.</p>

    <div class="v-space-15"></div>

    <!-- Latest Projects -->
    <div class="hidden-tablet hidden-phone">
        <h2 class="hbg-d">Fast, secure, reliable, industry trusted.</h2>

        <div class="row t-center">


            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">John Gilbert</h4>
                        <h4 class="hbg-l post">CHIEF TECHNICAL OFFICER</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt.
                            <a class="info-popup-jgilbert">&gt;&gt;</a>
                        </p>
                    </div>
                </div>
                <img src="/assets/images/Portrait-Outline.jpg" alt=""></article>


            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Joshua Abbott</h4>
                        <h4 class="hbg-l post">CHIEF INFORMATION OFFICER</h4>

                        <p>Dedicated 14+ year IT professional with strong background in developing and executing mission-critical IT development projects
                           to successful conclusion. <a class="info-popup-jabbott">&gt;&gt;</a>
                        </p>
                    </div>
                </div>
                <img src="/assets/images/Portrait-Outline.jpg" alt=""></article>


            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Matthew Nieciunski</h4>
                        <h4 class="hbg-l post">CHIEF OFFICER</h4>

                        <p>Double-majored in Political Science & I.T. from the Univ. of St. Francis.
                            Managed and Facilitated one of the fastest growing therapy company's transition into going paperless.
                            <a class="info-popup-mnieciunski">&gt;&gt;</a>
                        </p>
                    </div>
                </div>
                <img src="/assets/images/Portrait-Outline.jpg" alt=""></article>


            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Chasen Nesbitt</h4>
                        <h4 class="hbg-l post">MICROSOFT DEVELOPER</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt.
                            <a class="info-popup-cnesbitt">&gt;&gt;</a>
                        </p>
                    </div>
                </div>
                <img src="/assets/images/Portrait-Outline.jpg" alt=""></article>


        </div>
    </div>
    <!-- End Latest Projects -->
</div>
<div class="v-space-25"></div>
</section>
<!-- End Section Home -->
<div id="about-us" style="width:100%; height:0px;"></div>
<!-- Section About Us -->
<section class="dark">
    <h2>&nbsp;</h2>

    <div class="v-space-25"></div>
    <div class="container">
        <div class="quote"><h2>Consulting</h2>
            Nam id odio et dui vestibulum gravida. Praesent felis augue, placerat a congue id, auctor at ligula. Quisque
            ac quam in nisi tincidunt consectetur quis vitae elit. Mauris eget elit
        </div>
        <div class="v-space-25"></div>
        <div class="row"><img src="/assets/images/about/1.jpg" class="span4" alt=""/> <img
                src="/assets/images/about/2.jpg" class="span4 hidden-phone" alt=""/> <img
                src="/assets/images/about/3.jpg" class="span4 hidden-phone" alt=""/></div>
        <div class="v-space-25"></div>
        <p>Nam id odio et dui vestibulum gravida. Praesent felis augue, placerat a congue id, auctor at ligula. Quisque
            ac quam in nisi tincidunt consectetur quis vitae elit. Mauris eget elit quis odio dapibus varius eu in nisi.
            Nullam quis nisl sapien. Integer lobortis vulputate diam, vel porttitor neque commodo ac. Mauris a magna sit
            amet purus varius dapibus. Pellentesque vestibulum faucibus nunc, et scelerisque ante dapibus at. Maecenas
            venenatis sem vitae augue fringilla sit amet elementum sapien ornare.</p>

        <p>Fusce a porttitor leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis, nunc eu
            dapibus suscipit, ligula ligula eleifend felis, vel imperdiet lorem leo a tortor. Aliquam mi nisl,
            scelerisque vitae rutrum et, rutrum consectetur neque. Nulla leo turpis, consequat in faucibus nec, ultrices
            molestie eros. Vivamus id enim vel justo egestas congue et sed quam. Morbi adipiscing tincidunt bibendum.
            Cras eget tempus quam.</p>

        <div class="v-space-25"></div>

        <!-- Services -->

        <!-- End Services -->
    </div>
    <div class="v-space-15"></div>
</section>
<!-- End About Us -->

<!-- Section Team -->
<section class="light">
    <h2>&nbsp;</h2>

    <div class="v-space-15"></div>
    <div class="container">
        <p>In hac habitasse platea dictumst. Pellentesque auctor vulputate ante eget aliquam. Pellentesque eu nunc et
            libero tristique pharetra vel aliquet diam. Sed id malesuada neque. Nullam ipsum metus, euismod quis porta
            et, accumsan nec augue. Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris,
            scelerisque nec condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
            Pellentesque vitae mi enim, quis gravida sem. Suspendisse sodales convallis purus, eget pellentesque tortor
            aliquet ac. Suspendisse nec eros erat.</p>

        <div class="v-space-5"></div>
        <div class="row t-center">
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Malinda Hollaway</h4>
                        <h4 class="hbg-l post">CHEIF EXECUTIVE OFFICER</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/1.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Margery Elmendorf</h4>
                        <h4 class="hbg-l post">Multimedia Manager</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/2.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Lilly Elizabath</h4>
                        <h4 class="hbg-l post">Software Developer</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/3.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Cameron White</h4>
                        <h4 class="hbg-l post">Business Analyst</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/4.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Wendy Mitchell</h4>
                        <h4 class="hbg-l post">Web Designer</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/5.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Wega Amanda</h4>
                        <h4 class="hbg-l post">UX Designer & Analyst</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/6.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Daffie Greenhalgh</h4>
                        <h4 class="hbg-l post">Software Engineer</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/7.jpg" alt=""></article>
            <article class="span3 t-items"><a href="#" class="fb"><i class="icon-facebook"></i></a> <a href="#"
                                                                                                       class="twt"><i
                        class="icon-twitter"></i></a>

                <h2>&nbsp;</h2>

                <div class="t-block">
                    <div class="t-info dark">
                        <h4 class="name">Gweneth Viglionese</h4>
                        <h4 class="hbg-l post">Web Developer & Designer</h4>

                        <p>Sed lobortis ullamcorper turpis accumsan tincidunt. Aenean tellus mauris, scelerisque nec
                            condimentum et, scelerisque eu urna. In interdum luctus metus, ac feugiat nulla aliquam a.
                            Pellentesque vitae mi enims</p>
                    </div>
                </div>
                <img src="/assets/images/team/8.jpg" alt=""></article>
        </div>
    </div>
    <div class="v-space-15"></div>
</section>
<!-- End Section Team -->
<div id="development" style="width:100%; height:15px;"></div>
<!-- Section Testimonials -->
<section class="dark">
    <h2>&nbsp;</h2>

    <div class="v-space-25"></div>
    <div class="container">
        <div class="quote">
            <h2>Development</h2>
            Whether its UX Strategy & Design, Web Application Development, Mobile Apps. WordPress.com sites, or Video & Motion Graphics,
            FiberHop LLC excels in providing the best, highest quality, and most affordable media in the industry.
        </div>
        <div class="v-space-25"></div>
        <div id="masonry">
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/html.jpg" alt="">

                    <p class="testimonial">
                        Hypertext Markup Language (HTML) is a standardized system for tagging text files to achieve
                        font, color, graphic, and hyperlink effects on World Wide Web pages. <br /><br /><br /><br /><br/>
                    </p>
                </div>
                <div class="testimony"><span class="testimony-name">HTML</span> <span
                        class="testimony-post">Get a quote</span></div>
            </article>
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/html5.jpg" alt="">

                    <p class="testimonial">
                        HTML5 is a core technology markup language of the Internet used for structuring and presenting
                        content for the World Wide Web.
                        As of October 2014 [update] this is the final and complete fifth revision of the HTML standard
                        of the World Wide Web Consortium (W3C).
                    </p>
                </div>
                <div class="testimony"><span class="testimony-name">HTML5</span> <span class="testimony-post">Get a quote</span>
                </div>
            </article>
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/asp-dot-net.jpg" alt="">

                    <p class="testimonial">ASP.NET is an open source server-side Web application framework designed for
                        Web development to produce dynamic Web pages.
                        It was developed by Microsoft&trade; to allow programmers to build dynamic web sites, web
                        applications and web services. <br /><br />
                    </p>
                </div>
                <div class="testimony"><span class="testimony-name">ASP.NET</span> <span class="testimony-post">Get a quote</span>
                </div>
            </article>
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/php.jpg" alt="">

                    <p class="testimonial">
                        PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source
                        general-purpose scripting language that is especially suited for web development and can be
                        embedded into HTML. <br /><br /><br />
                    </p>
                </div>
                <div class="testimony"><span class="testimony-name">PHP</span>
                    <span class="testimony-post">Get a quote</span></div>
            </article>
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/c-sharp.jpg" alt="">

                    <p class="testimonial"> C# is a multi-paradigm programming language encompassing strong typing,
                        imperative, declarative, functional, generic, object-oriented (class-based),
                        and component-oriented programming disciplines. It was developed by Microsoft within its .NET
                        initiative.
                        C# is intended to be a simple, modern, general-purpose, object-oriented programming
                        language. </p>
                </div>
                <div class="testimony"><span class="testimony-name">C#</span> <span
                        class="testimony-post">Get a quote</span></div>
            </article>
            <article class="ts-items">
                <h2>&nbsp;</h2>

                <div class="ts-info"><img src="/assets/images/java.jpg" alt="">

                    <p class="testimonial"> Java is a general-purpose computer programming language that is concurrent,
                        class-based, object-oriented, and specifically designed to have as few implementation
                        dependencies as possible.
                        It is intended to let application developers "write once, run anywhere" (WORA), meaning that
                        code that runs on one platform does not need to be recompiled to run on another. <br /><br />
                    </p>
                </div>
                <div class="testimony"><span class="testimony-name">Java</span> <span
                        class="testimony-post">Get a quote</span></div>
            </article>
        </div>
    </div>
    <div class="v-space-15"></div>
</section>
<!-- End Section Testimonials -->

<!-- Section Portfolio -->
<section id="hosting" class="light">
    <h2>&nbsp;</h2>

    <div class="v-space-20"></div>
    <div class="container">
        <p>Hosting Packages</p>

        <div class="p-header">
            <h2 id="p-name" class="hbg-d">Get the best hosting packages from Fiber HOP</h2>
            <span id="close" class="back"><i class="icon-angle-left"></i>&nbsp;&nbsp;BACK TO CATEGORIES</span></div>
        <div class="v-space-25"></div>


    </div>
    <div class="v-space-20"></div>
</section>
<!-- End Section Portfolio -->


<section id="services" class="dark">
    <h2>&nbsp;</h2>

    <div class="v-space-20"></div>
    <div class="container">


        <div class="services">
            <h2 class="welcome-text">WE PROVIDE THE BEST MANAGED SERVICES</h2>

            <div class="v-space-25"></div>
                <div class="row">
                <article class="s-items span4">
                    <h3>System & Cloud Architecture</h3>

                    <div class="s-ico"><i class="icon-signal"></i></div>
                    <p>Are you trying to achieve the <strong>highest level of functionality, manageability and
                            efficiency</strong> on everything from your desktop, server, cloud and beyond? FiberHop LLC
                        can turn all this and more into a reality.
                        With <strong>virtualization</strong>, an entire closet full of servers can be consolidated to
                        just a handful, allowing your business to minimize IT expenses and opening up a host of advanced
                        disaster recovery options.</p>
                </article>
                <article class="s-items span4">
                    <h3>Layered Security</h3>

                    <div class="s-ico"><i class="icon-flag"></i></div>
                    <p>Layered security refers to security systems that use multiple components to protect operations on multiple levels, or layers.
                        This term can also be related to the term defense in depth, which is based on a slightly different idea where multiple strategies
                        and resources are used to slow, block, delay or hinder a threat until it can be completely neutralized. </p>
                </article>
                <article class="s-items span4">
                    <h3>Migrations</h3>

                    <div class="s-ico"><i class="icon-bullhorn"></i></div>
                    <p> Server migration is a process in which data is moved from one server to another.
                        Data may be moved between servers for security reasons, because equipment is being replaced, and for any number of other reasons.
                        This process is performed by our team of specialists who work specifically with the origin and target server architectures and have a combined knowledge-base of
                        35 years in the field. </p>
                </article>
                </div>
                <div class="row">
                <article class="s-items span4">
                    <h3>Network Architecture</h3>

                    <div class="s-ico"><i class="icon-beaker"></i></div>
                    <p> Design Services help you create a flexible, resilient, scalable architectural foundation to support your business solutions by developing designs
                        for your IT and network infrastructure, applications, operations processes, and network management. They enable you to: </p>
                    <ul>
                        <li>Improve your network infrastructure performance, security, and scalability</li>
                        <li>Accelerate adoption of new technologies and improve return on investment</li>
                        <li>Reduce expensive and time-consuming redesign</li>
                        <li>Strengthen the proficiency of your deployment team and operations team</li>
                    </ul>
                </article>
                <article class="s-items span4">
                    <h3>Systems Integration</h3>

                    <div class="s-ico"><i class="icon-retweet"></i></div>
                    <p> In our 35+ years of experience, we have found that integrating technology systems can be one of the most frustrating technical hurdles facing many organizations.
                        Voids existing between sophisticated applications can mean tremendous productivity loss as well as untold opportunity costs.
                        It is also one of the most difficult things to fix - causing many organizations to limp along with systems that don't interconnect well to each other.</p>
                </article>
                <article class="s-items span4">
                    <h3>DC Design</h3>

                    <div class="s-ico"><i class="icon-cogs"></i></div>
                    <p>FiberHop is dedicated to help you design a state of the art datacenter
                        in record breaking time. It is no longer practical or cost-effective to completely engineer all aspects of a unique data center.
                        Re-use of proven, documented subsystems or complete designs is a best practice for both new data centers and
                        for upgrades to existing ones. Adopting a well-conceived design can have a positive impact on both the project itself,
                        as well as on the operation of the data center over its lifetime.</p>
                </article>
                </div>
                <div class="row">
                <article class="s-items span4">
                    <h3>Systems & Network Support</h3>

                    <div class="s-ico"><i class="icon-cogs"></i></div>
                    <p>FiberHop, LLC. is setup to support both Remote and Onsite issues. With A+ certified
                        technicians working around the clock that can guarantee that your issues are resolved or
                        a solution designed to solve the issues as quickly and efficiently as possible 24 hours a
                        day / 7 days a week.  </p>
                </article>
                <article class="s-items span4">
                    <h3>VoIP</h3>

                    <div class="s-ico"><i class="icon-signal"></i></div>
                    <p>Voice-over-IP (VoIP) telephones are becoming more popular and are very cost effective. FiberHop
                        LLC offers the latest in telephone and PBX equipment: online call management, call recording,
                        caller ID, automated assistant, long and local distance calling, call forwarding, voicemail, and
                        much more.</p>
                </article>
                </div>
            <div class="v-space-25"></div>
        </div>


    </div>
    <div class="v-space-15"></div>
</section>


<!-- Section Contact -->
<section id="contact" class="light">
    <h2>&nbsp;</h2>

    <div class="v-space-0"></div>
    <div class="container">
        <div class="quote">
            We would love to hear from you. Please complete the form below and we will be in touch with you as soon as possible.
        </div>
        <div class="v-space-25"></div>
        <div class="contact row-fluid">
            <iframe class="my-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.3535661094766!2d-88.00271739999998!3d41.518281400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e68a4bc3f91cf%3A0xaa7bf44e74801cef!2s222+Stone+Ct%2C+New+Lenox%2C+IL+60451!5e0!3m2!1sen!2sus!4v1416724917896"></iframe>
            <div class="c-form span4">
                <h4 class="hbg-d">Send us a message</h4>

                <form method="post" id="contact-form" action="php/process.php">
                    <input class="span12" name="name" placeholder="Full Name" type="text" id="name">
                    <input class="span12" name="email" placeholder="Email Address" type="text" id="email">
                    <textarea rows="5" class="span12" placeholder="Message" name="message" id="message"></textarea>
          <span id="formSubmit">
          <input type="submit" class="submit" value="Send">
          </span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- Contact Address -->
        <div class="row">
            <div class="span3">
                <h4 class="hbg-l">For General Inquiries</h4>

                <div class="clearfix"></div>
                Phone: (312) 878-1212<br/>
                Email: info@fiberhop.com
            </div>
            <div class="span3">
                <h4 class="hbg-l">For Customer Support</h4>

                <div class="clearfix"></div>
                Phone: (312) 878-1212 x2<br/>
                Email: support@fiberhop.com
            </div>
            <div class="span3">
                <h4 class="hbg-l">For Sales Inquiries</h4>

                <div class="clearfix"></div>
                Phone: (312) 878-1212 x1<br/>
                Email: sales@fiberhop.com
            </div>
            <div class="span3">
                <h4 class="hbg-l">Head Office - Illinois</h4>

                <div class="clearfix"></div>
                <address>
                    222 Stone Court,<br/>
                    New Lenox, Illinois,<br/>
                    60451-1598, US, (312) 878-1212
                </address>
            </div>
        </div>
    </div>
    <div class="v-space-10"></div>

</section>
<!-- End Section Contact -->

@stop