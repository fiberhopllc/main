<title><%=title%></title>
<link rel="shortcut icon" href="<%=root%>public/images/icons/favicon2.ico" />
</head><body>
<% If contact = True Then %>
	<!--#include virtual="includes/functions/contact_functions.asp"-->
<% End If %>
<div id="header_main">
	<div class="wrapper" id="header_wrapper">
		<div id="logo_header"><a href="<%=root%>" rel="nofollow"><img src="<%=root%>public/images/logo_medium.png" alt="Tech IT Fast" /></a></div>
		<div id="number_header">
		<a href="<%=root%>company/contact-us.asp"><img src="<%=root%>public/images/number.png" alt="contact us for live tech support" /></a> 
			<div id="bbb_logo" style="position:relative; top:-4px;">
				<iframe src="https://seal-chicago.bbb.org/logo/rbhzbus/iframe/tech-it-fast-88584633.html" width="100" height="38" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				<a href="<%=root%>Client_Resources.asp" style="margin-left:10px;top:2px;position:relative;">
					<img src="<%=root%>public/images/client-portal.png" alt="Client Resources" width="114px" height="40px" />
				</a>
				<!--<a href="http://www.bbb.org/chicago/business-reviews/information-technology-services/tech-it-fast-in-chicago-il-88584633#bbblogo?"><img src="<%=root%>public/images/bbb_sm.png" alt="Better Business Bureau"/></a>-->
			</div> 
		</div>
		<div class="navigation_panel">
			<div class="nav">
				<ul id="menu" class="menu">
					<li id="link1"> <a href="<%=root%>services/">Services</a>
						<ul>
							<li><a href="<%=root%>services/Cloud-Network-Solutions.asp">Cloud Network Solutions</a></li>
							<li><a href="<%=root%>services/IT-Consulting.asp">IT Consulting</a></li>
							<li class="submenu"><a href="<%=root%>services/Managed-Services.asp">Managed Services</a>
								<ul>
									<li><a href="<%=root%>services/Cloud-Network-Solutions/File-Sharing-and-Storage.asp">File Sharing/Storage</a></li>
								</ul>
							</li>
							<li><a href="<%=root%>services/Networking-and-Servers.asp">Network Support &amp; Servers</a></li>
							<li class="submenu"><a href="<%=root%>services/Onsite-and-Remote-Support.asp">Onsite &amp; Remote Support</a>
								<ul>
									<li><a href="<%=root%>services/Onsite-and-Remote-Support/Onsite-Support.asp">Onsite Support</a></li>
									<li><a href="<%=root%>services/Onsite-and-Remote-Support/Remote-Support.asp">Remote Support</a></li>
									<li><a href="<%=root%>services/Onsite-and-Remote-Support/Basic-Services.asp">Basic Services</a></li>
								</ul>
							</li>
							<li><a href="<%=root%>services/Total-Care-IT-Management.asp">Total Care IT Management</a></li>
							<li><a href="<%=root%>services/VoIP-and-Telecom.asp">VoIP and Telecom</a></li>
							<li><a href="<%=root%>services/Website-Design-and-SEO.asp">Website Design &amp; SEO</a></li>
							<li><a href="<%=root%>services/Wiring-Phone-and-Data.asp">Wiring Phone &amp; Data</a></li>
						</ul>
					</li>
					<li id="link2"> <a href="<%=root%>News.asp">News</a></li>
					<li id="link3"> <a href="<%=root%>Blog.asp">Blog</a></li>
					<li id="link4"> <a href="<%=root%>industries/">Industries</a></li>
					<li id="link5"> <a href="<%=root%>company/">Company</a>
						<ul>
							<li><a href="<%=root%>company/about-us.asp">About Us</a></li>
							<li><a href="<%=root%>company/Careers.asp">Careers</a></li>
							<li><a href="<%=root%>company/Clients.asp">Clients</a></li>
							<li><a href="<%=root%>company/Contact-Us.asp">Contact Us</a></li>
							<li><a href="<%=root%>company/Referral-Program.asp">Referral Program</a></li>
							<li><a href="<%=root%>company/Testimonials.asp">Testimonials</a></li>
							<li><a href="<%=root%>company/Why-Tech-IT-Fast.asp">Why Tech IT Fast</a></li>
						</ul>
					</li>
					<li id="link6"> <a href="<%=root%>Our-Method/default.asp">Our Method</a>
						<ul>
							<li><a href="<%=root%>Our-Method/First-Contact-is-Made.asp">First Contact is Made</a></li>
						</ul>
					</li>
					<li id="link7"> <a href="<%=root%>FAQs.asp">FAQs</a></li>
					<li id="link8"> <a href="<%=root%>Promotions.asp">Promotions</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover', speed:9});
</script>
<div id="scroller_main">
	<div class="wrapper" id="scroller_wrapper">
		<div class="internal_wrapper">
			<div class="slider-wrapper theme-dark">
				<div id="slider" class="nivoSlider"> 
					<img src="<%=root%>public/images/scroller/IT-and-Network-Support.jpg" alt="IT and Network Support" /> 
					<img src="<%=root%>public/images/scroller/Servers-And-Network-Solution.jpg" alt="Servers and Network Solution" /> 
					<img src="<%=root%>public/images/scroller/Virtualization.jpg" alt="Virtualization" /> 
					<img src="<%=root%>public/images/scroller/ITmon.jpg" alt="ITmon" />
					<img src="<%=root%>public/images/scroller/Web-Design-and-SEO.jpg" alt="Total Care IT" /> 
				</div>
			</div>
		</div>
	</div>
</div>
<div id="body_main">
<div class="wrapper" id="body_wrapper" style="height:<%=mainHeight%>px">
<div class="internal_wrapper" id="body_content">
<div class="body_utilities">
	<div id="breadcrumbs">
		<%
Dim rng : rng = Ubound(strArr)
ii = 0
for i = 0 to rng Step 2
%>
		<div class="breadcrumb_ends"><img src="<%=root%>public/images/breadcrumbs/l<%= ii+1 %>_fro.png" width="21" height="26" alt="Breadcrumb" /></div>
		<div class="breadcrumb_l<%= ii+1 %> breadcrumb_text"><a href="<%=root & strArr(i+1)%>" class="bread" rel="nofollow"><%= strArr(i) %></a></div>
		<%
	if i = rng-1 then
%>
		<div class="breadcrumb_ends"><img src="<%=root%>public/images/breadcrumbs/l<%= ii+1 %>_end.png" width="21" height="26" alt="Breadcrumb" /></div>
		<%
	end if
	ii = ii+1
next
%>
	</div>
</div>
