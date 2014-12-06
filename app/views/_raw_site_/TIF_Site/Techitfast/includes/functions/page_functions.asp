<script type="text/javascript" src="<%=root%>public/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<%=root%>public/js/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript" src="<%=root%>public/js/tinydropdown.js"></script>
<script type="text/javascript" src="<%=root%>public/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<%=root%>public/js/s3Slider.js"></script>
<script type="text/javascript" src="<%=root%>public/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<%=root%>public/js/jcarousellite.js"></script>
<script type="text/javascript">	
$(window).load(function() {
	$('#alt_partnerships').jcarousel({
		vertical: true,
		scroll: 1,
		wrap: "circular",
		auto:10,
		animation:1000
	});
});
</script>
<script type="text/javascript" src="<%=root%>public/js/xbMarquee.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			directionNav: false,
			effect: "fade",
			slices: 20,
			animSpeed: 700,
			pauseTime: 10000,
			randomStart: true
		});
    });
</script>

<script type="text/javascript">
	$(window).load(function(){
		jQuery(".alt_testimonials").jCarouselLite({
			vertical: true,
			auto:3,
			speed:5000
		});
	});
</script>
<script type="text/javascript" src="<%=root%>public/js/hoverIntent.js"></script>
<script type="text/javascript" src="<%=root%>public/js/superfish.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$(function(){
		$('ul.alt_menu').superfish();
	});
});
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34145839-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21366435-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<%
Dim title
%>