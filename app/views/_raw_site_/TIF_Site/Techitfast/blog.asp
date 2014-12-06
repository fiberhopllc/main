<!--#include virtual="/includes/system_settings.asp"-->
<link rel="stylesheet" type="text/css" href="<%=root%>public/js/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
<% 
title = "Tech IT Fast | Blog" 
mainHeight = 1650
strArr = Array("Blog","blog.asp","Home","")
layout = "left"
%>
<!--#include virtual="/includes/template/header.asp"-->
<%' ********** ARCHIVE SECTION VARIABLES *********** '

'amount of years of the blog starting in 2012
Dim totalYears : totalYears = year(date) - 2012
Dim months : months = Array("Jan","Feb","Mar","Apr","May","Jun","Jly","Aug","Sep","Oct","Nov","Dec")

'if it is past the 14th, we include this month in the archive
'this only applies to this year
Dim disabledIndex
if day(date) > 14 then
	disabledIndex = month(date)
else
	disabledIndex = month(date)-1
end if

'************************************************* '%>
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div class="title">
					<div class="title_l"></div>
					<div class="title_h">
						<h1>Blog</h1>
<%'********* ARCHIVE SECTION ^^^^^^^^^^^ '
					for y=0 to totalYears	%>
              <div id="fsp">
                <% tyr = year(date) - y %>
                <arc>Archive - <%=tyr%> > </arc>
                <% for ii=0 to ubound(months)
                  strng = "http://techitfast.wordpress.com/" & tyr & "/" & ii+1 &"/"
                  if y < 1 then
                    if ii < disabledIndex then  %>
                <spc><a href="<%=strng%>" target="_blank"><%=months(ii)%></a></spc>
                  <%  end if 
                  else	%>
                <spc><a href="<%=strng%>" target="_blank"><%=months(ii)%></a></spc>
                <% end if
                Next 	%>
						</div>
						<% Next 
'**************************^^^^^^^^^^^ '%>
					</div>
					<div class="title_r"></div>
				</div>
			</div>
			<div class="content_pad_<%=layout%>">
				<div id="blog">
        	<div style="padding-top:<%=totalYears*19%>px;"></div>
					<p>Our goal, through our various postings, is to provide the world with informative and relative information, regarding the ever changing technological world. There are constantly new trends and historical gadgets and equipment being released, tested and analyzed. We strive to create a reliable platform, where the public can discover up to date and accurate news about popular technological events and political outrages. <a href="http://techitfast.wordpress.com/" target="_blank">Visit Our Blog!</a></p>
					<div style="padding:1px;"></div>
          
<%
maxBlogs = 16

Dim content : set content = new Collection

'content.Add("")

content.Add("<p>A picture is worth a thousand words and a chart is even more detailing than a picture. The Washington Post recently republished a comScore chart illustrating Blackberry’s overall rise and fall in the U.S. Smartphone market. This chart also illustrate how extraordinarily quick the U.S. market share became divided with various competitors; such as, Android and iOS.</p><p>Unfortunately, Microsoft Windows Phone Platform has been diminishing as quickly as Blackberry. ComScore’s chart continues through March 2013, according to the market research firm’s latest data Blackberry’s U.S. smartphone market fell to 4.3% in the three-month period ended in July while Windows Phone stayed flat at 3%.</p>")

content.Add("<p>All devices running Android 2.3 and up will be able to utilize Google wallet mobile payment service. Google is again broadening what users can do with wallet, expanding availability of payment service. Google wallet is taking PayPal head on with direct money transfers. With the new updates, users will be able to transfer cash to anyone with an email address in the US, once that email address is linked to a bank account to the service. Funds are also accessible from current Google wallet balance but using a debit or credit card to make payments will result in additional fees.</p>")

content.Add("<p>Earlier this week, Google consciously disrupted some of the functionality of Microsoft’s latest attempt at a native YouTube app for Windows Phone. Google admitted to purpose towards determination that Microsoft had violated YouTube’s terms of service.</p><p>This is no new tactic, the history of the technology industry is plagued with examples of one or more company making unilateral decisions to block others’ features or applications from working with their own, often hindering the users they claim to service.</p><p>Similar incidents occurred, between social media giants Twitter and Instagram. People can argue the integration of posting Instagram photos to Twitter was a big contribution to the growth of the photo service. In addition to, users accustomed with Facebook as well.</p>")

content.Add("<p>As you take a look in the past and comparing it to the present, there is a lot to consider now. We did not have tablets or smart phones nor was the internet as fast as it is today. As technology surpasses time, there must be a sense of acknowledgement that not everything we use is safe and we must know the ins and outs of why security should be a top main concern.</p>")

content.Add("<p>Left-Handers' Day!</p><p>From smearing ink on your hand, to finding left-handed scissors life for left-handers could be rather odd. I myself as a left-hander always had to adjust to the slightest problematical situations  we left-handers face daily.</p><p>Researchers has estimated about 10% of people are left-handed. People who study the brain has shown number of theories explaining why humans are the only species with handedness.</p>")

content.Add("<p>Internet use is accessed by millions of UK resident daily. Millions of people use internet for research, trending topics, social media and online shopping. Unfortunately, the reliability, speed and availability of good internet connection is rarely experienced in rural areas throughout the UK.</p><p>In rural areas in this country, satisfying broadband connections are limited, causing concern among many residents and habitants  in the public sector, specifically within education. Particularly, in Wales, Estyn, the Assembly’s education spokesperson, has filed complaint due to the lack of completed assignments by students with slow internet speeds away from the classroom.</p><p>Member of Parliament, David Nuttall gathered a healthy share of government funding towards improving connections speeds in rural areas. “Those who live in area which have very slow broadband access speeds are seriously disadvantaged in this digital age. Although in recent months we have seen some progress, there is still much to be done.”</p>")

content.Add("<p>Human error occur daily, with the capabilities of modern-day supercomputer available to banks nationwide. One would imagine, human errors are greatly magnified by automated systems and these errors seem to happen regularly. Mistakes such as this take place more often than expected, here are a few examples;</p><p>PayPal created a temporary quadrillionaire by accidentally crediting $92,233,720,368,547,800 to a very surprised Chris Reynolds. The error was corrected quickly, but Reynolds said that if he had been able to keep the money, he would have paid down the national debt and maybe bought the Phillies.</p>")

content.Add("<p>After looking at what cloud-computing has to offer users, Let’s consider the options you have when purchasing an in-house server. When it comes time to upgrade from an older unit or purchase one for the first time, there are a several factors to consider. When going with an in-house setup, we assess the needs of your company and help you choose the most cost-efficient type of server.</p><p>For a first-time buyer there are a wide variety of vendors to choose from. Servers that SMBs purchase are called “dedicated servers.” A dedicated server is a single server that only allows one company access. It is “dedicated” to one client and is not shared with any other clients/companies. The advantage of an in-house server is that it allows you to operate the system the way you see fit, without any restrictions on use. However, routine maintenance and management becomes the responsibility of either the company’s in-house IT department or an independent tech-support company.</p><p>In the past, having an in-house network meant a room full of dedicated servers, switches, and firewalls. The overhead of maintaining several independent servers is significant: not just in equipment prices, but also in cooling and electrical costs. With the advances in technology, this costly option has been replaced by using a single server with software designed to share it’s resources and have the one server operate as if you had multiple servers.</p>")

content.Add("<p>Assessing new technology for our nation’s schools, the quality of technology varies from district to district, school to school. President Obama revealed a new initiative, that in turn should help level technological expenses across the nation. Obama plans to have 99% of our US schools, grades from 3 – 12, access to high speed internet within 5 years. The internet, has been growing by leaps and bounds with various online apps, to heavy content filled websites. Schools are currently dealing with tremendously slow internet speeds, which hinder the education of students.</p><p>With the innovated ideas from companies like Google. Bringing Google fiber, 1 gigabit (Gb) speeds, to cities at a reasonable price seemed ideal. This massive increase of internet speed at a low price, is placing pressure on other competitive internet providers. Companies such as AT&T and Time Warner have both began upgrading their networks in different cities to compete against Google Fiber. Having high speed internet is not just used for large companies, but for other organizations such as industrial and educational facilities.</p>")

content.Add("<p>What is “the Cloud”? It is the internet. Everybody uses it. However, the term “cloud computing” refers to the services that have enabled the cloud to become so prominent in everyday life. For decades, people/businesses from across the world have been using the cloud in a simplest way. Using the internet to send e-mails, school papers, research and more. All of the old services with a lot of extras, new product developments such as Netflix (video streaming), Dropbox, Google Apps, Groupon. These companies are all offering services via the cloud.</p><p>Sadly, the term “cloud-computing” does not have a specific definition to what it is, a true definition of what is the cloud can be argued for days. Lets discuss services in more detail.</p><p>Cloud-computing</p>Think of cloud computing in two stages. Stage one is the user of the computer/device; while stage two will be the centralized servers in one location, containing vital information.</p>")

content.Add("<p>As someone who owns or manages a business, we all know, at times situations can be tiresome and very complex. Many different business owners have came to a point, wondering if their server infrastructure is getting old and outdated.</p><p>Has your equipment been operating at its highest efficiency and now reaching the end of its lifespan? You’re at a point that so many other business owners/managers are facing. The option of, replacing their old server with new equipment or do you transition over to a cloud environment.</p>")

content.Add("<p>Are cell phone discounts coming to an end? Looking at the trend of today’s markets and understanding how the cell phone discounts work. It looks like our low cell phone prices will become a thing of the past. One company that has started this trend in the past year, here in the United States is T-mobile.</p><p>T-mobile’s new marketing campaign, created headed by the new CEO John Legere, are bring back the cool to the carrier. It is the fourth largest cell phone carrier in the US and looks like they are making efforts to get back in competitive position in the mobile industry by adding the iPhone 5 to their lineup.</p>")

content.Add("<p>Bitcoin has been the poster child for “crypto-currency,” digitally created currency protected by powerful cryptography. Bitcoin is a digital currency first described in 2008, as a peer-to-peer, electronic cash system. Bitcoins can be transferred through a computer or smartphone without an intermediate financial institution. This feature alone has propelled Bitcoin as the currency of the future and really exposed additional features of crypto-currency. Crypto-currency is traceable, more portable than paper money and harder to steal.</p>")

content.Add("<p>With smart phones, tablets becoming the norm in mobile devices, they are seen everywhere. Using hand-held devices to look at Facebook pages, people taking pictures and placing them on Instagram to share with their friends and the world.  The obsession with our mobile phones always being nearby, allows users to be able to capture events on camera more frequently than ever before. Sharing with friends a specific moment in our lives that normal text messages just can’t touch.</p><p>Being able to capture video from more than one camera angle takes home videos to the next level. Some even say a professional film crew standard can be achieved from your smart phone (subtracting the quality of the camera). Smart phone cameras, all now have the norm of 8 megapixels or higher, now all handheld cameras concentrating their efforts on video editing. A couple of mobile phone manufactures such as LG and HTC currently have a version of Muvee editing software already installed.</p>")

content.Add("<p>In the technological trend the globe has transitioned into,  tablets, smartphones and  multi-media devices are constantly in use. Modern handheld devices have various use in society online banking, sending private e-mails, sharing and storing sensitive information. Within a work environment, this all begins with network security.</p><p>There is nothing new about it, unwanted network intrusion has been going on since the late 90’s. Prior to the late 90′s, these intrusion where few and far between but in the recent decade, the intrusions are rapidly increasing.")

content.Add("<p>Most of Americans have heard, as of Jan 26, 2013,  Digital Millennium Copyright Act (DMCA), stated that unlocking cell phones would no longer be allowed. Unlocking a cell phone without the phone carrier’s permission, could result in nothing less than $200 and nothing more than $2,500 per violation. If a company unlocks the phone, the fines are quite hefty which can also include jail time of up to 10 years. For some people, this recent law pass will not be affect them due to the fact that they do not require a unlocked cell phone. Though for many others, having an unlocked cell phone offers room for flexibility.")

content.Add("<p>Can you picture it? Imagine, waking up, getting a cup of coffee and strolling over to your computer at home. Logging onto it and start working, while the whole time you’re sitting in your pajamas.  Ahh.. the beauty of working from a home office. Not a dream for some, more of a reality.</p><p>In the United States alone, about 10% of people who work, have or had worked from home at least once a week. While those who’s mainly work from home has increased over the past decades from 2.3% in 1980’s to 4.3% by the end of 2010. Though positions that allowed workers to work from home in the 80’s were usually jobs that were low-skilled, now range from sales assistants, to managers with a wide range of salaries.")

content.Add("<p>In 2012, companies spent around $2 trillion dollars on IT related services/products, while Information and Communication Technologies (ICT) spending rose to about $3.6 trillion. With all the additional spending,  physical server and computer sales decrease for a variety of companies, smart phones outsold the competition for its first time.")

content.Add("<p>In his State of the Union address, on Tuesday early December, President Obama signed an Executive Order to confront our nation’s cyber security needs. This EO will allow Government department agencies along with private agencies to be able to share critical information about possible cyber attacks easier than before.")

content.Add("<p>At no surprise, the Microsoft chairman says Bing and Windows 8 are great products. Mid-day Monday, Microsoft Chairmen Bill Gates told Reddit users, Bing is a “better product” than Goggle and that Windows 8 is a “huge advance.”</p><p>Gates referenced Bing’s recent campaign to prove that it produces results faster than Google search; ""Seriously, Bing is the better product at this point. Try the challenge.""")

Dim blogLinks : set blogLinks = new Collection

'blogLinks.Add("")

blogLinks.Add("http://techitfast.wordpress.com/2013/09/30/blackberrys-history-through-the-u-s-smartphone-history/")
blogLinks.Add("http://techitfast.wordpress.com/2013/09/23/google-wallet-available-for-all-android-phones-and-every-us-carrier/")
blogLinks.Add("http://techitfast.wordpress.com/2013/08/20/google-vs-microsoft-integrate-or-not/")
blogLinks.Add("http://techitfast.wordpress.com/2013/08/17/how-safe-are-we-on-the-internet-e-mail-tablet-smartphones/")
blogLinks.Add("http://techitfast.wordpress.com/2013/08/17/happy-left-handers-day/")
blogLinks.Add("http://techitfast.wordpress.com/2013/08/15/will-satellite-broadband-sustain-the-urge-for-high-speeds-in-uk/")
blogLinks.Add("http://techitfast.wordpress.com/2013/08/06/human-error-and-costly-computer-mistakes/")
blogLinks.Add("http://techitfast.wordpress.com/2013/07/03/in-house-server/")
blogLinks.Add("http://techitfast.wordpress.com/2013/07/02/high-speed-internet-across-the-united-states/")
blogLinks.Add("http://techitfast.wordpress.com/2013/05/29/what-is-the-cloud/")
blogLinks.Add("http://techitfast.wordpress.com/2013/05/21/cloud-vs-in-house-virtualization/")
blogLinks.Add("http://techitfast.wordpress.com/2013/05/10/t-mobile-trying-to-make-a-positve-change-to-stay-competitve/")
blogLinks.Add("http://techitfast.wordpress.com/2013/04/30/bitcoin-currency-the-future/")
blogLinks.Add("http://techitfast.wordpress.com/2013/04/22/new-multi-angle-camera-views-for-tech-smartphones-for-2013/")
blogLinks.Add("http://techitfast.wordpress.com/2013/03/30/next-generation-firewall/")
blogLinks.Add("http://techitfast.wordpress.com/2013/03/11/new-january-2013-digital-millennium-copyright-act-unlocking-mobile-phones/")
blogLinks.Add("http://techitfast.wordpress.com/2013/03/05/does-working-from-home-effect-overall-performance/")
blogLinks.Add("http://techitfast.wordpress.com/2013/02/26/smartphone-and-tablets-a-change-towards-the-future-in-the-i-t-world/")
blogLinks.Add("http://techitfast.wordpress.com/2013/02/20/president-obama-takes-action-involving-cyber-security-while-congress-continue-to-hesitate-on-the-subject/")
blogLinks.Add("http://techitfast.wordpress.com/2013/02/12/bill-gates-supports-and-defends-bing-and-windows-8/")

Dim blogTitles : set blogTitles = new Collection

'blogTitles.Add("")

blogTitles.Add("Blackberry’s Industry Postion through the U.S. smartphone history")
blogTitles.Add("Google Wallet available for ALL Android phones and every US carrier")
blogTitles.Add("Google vs. Microsoft; Integrate or Not")
blogTitles.Add("How safe are we on the internet? E-mail-tablet-smartphones")
blogTitles.Add("Happy Left-Handers Day!")
blogTitles.Add("Can Satellite broadband sustain the urge for high speeds in UK?")
blogTitles.Add("Human Error with Costly Computer Mistakes")
blogTitles.Add("In-house Server")
blogTitles.Add("High Speed Internet across the United States")
blogTitles.Add("What is the “CLOUD”?")
blogTitles.Add("Cloud vs. In-House Virtualization")
blogTitles.Add("T-Mobile trying to make a positve change to stay competitve")
blogTitles.Add("Bitcoin; currency of the future?")
blogTitles.Add("NEW Multi-Angle Camera Views for Tech Smartphones for 2013")
blogTitles.Add("Next Generation Firewall")
blogTitles.Add("New January 2013 Digital Millennium Copyright Act: Unlocking Mobile Phones")
blogTitles.Add("Does working from home effect overall performance?")
blogTitles.Add("Smartphone and Tablets a change towards the FUTURE in the I.T. WORLD?")
blogTitles.Add("President Obama takes action involving cyber security")
blogTitles.Add("Bill Gates supports/defends Bing and Windows 8")

Dim blogDates : set blogDates = new Collection

'blogDates.Add("")

blogDates.Add("September 30, 2013")
blogDates.Add("September 23, 2013")
blogDates.Add("August 20, 2013")
blogDates.Add("August 17, 2013")
blogDates.Add("August 17, 2013")
blogDates.Add("August 15, 2013")
blogDates.Add("August 6, 2013")
blogDates.Add("July 3, 2013")
blogDates.Add("July 2, 2013")
blogDates.Add("May 29, 2013")
blogDates.Add("May 21, 2013")
blogDates.Add("May 10, 2013")
blogDates.Add("April 30, 2013")
blogDates.Add("April 22, 2013")
blogDates.Add("March 30, 2013")
blogDates.Add("March 11, 2013")
blogDates.Add("March 5, 2013")
blogDates.Add("February 26, 2013")
blogDates.Add("February 20, 2013")
blogDates.Add("February 12, 2013")

Dim length : length = content.Count-1
for i=0 to length %>

	<% if i < maxBlogs then %>

    <h2><a class="bloga" rel="BlogPosts" href="#blog<%=i+1%>"><%=blogTitles(i)%></a></h2>
    <date><%=blogDates(i)%></date>
    <div style="display:none">
    <div id="blog<%=i+1%>">
    <div id="blog">
    <h2><%=blogTitles(i)%></h2>
    <date><%=blogDates(i)%></date>
    <%=content(i)%>
    <br /><br /><a target="_blank" href="<%=blogLinks(i)%>">  Continue Reading...</a></p>
    <% if i <> 0 then %><p style="float:left;padding:0px;padding-left:45px;margin:0px;">Prev Blog</p><% end if %>
    <% if i <> length then %><p style="float:right;padding:0px;padding-right:45px;margin:0px;">Next Blog</p><% end if %>
    </div></div></div>
  <% end if %>
<%next%>

					<div style="padding:1px;"></div>
				</div>
			</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/promos.asp"-->
			<!--#include virtual="/includes/template/sidebar/alerts.asp"-->
			<!--#include virtual="/includes/template/sidebar/testimonials.asp"-->
			<!--#include virtual="/includes/template/sidebar/partners.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->
<script type="text/javascript" src="<%=root%>public/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<%=root%>public/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="<%=root%>public/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<%=root%>public/js/blogbox.js"></script>