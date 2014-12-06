<%
maxBlogs = 6
blogCount = 0

Dim titles : set titles = new Collection

'titles.Add("")
titles.Add("Blackberry’s Industry Postion through the U.S. smartphone history")
titles.Add("Google Wallet available for ALL Android phones and every US carrier")
titles.Add("Google vs. Microsoft; Integrate or Not")
titles.Add("How safe are we on the internet? E-mail-tablet-smartphones")
titles.Add("Happy Left-Handers Day!")
titles.Add("Can Satellite broadband sustain the urge for high speeds in UK?")
titles.Add("Human Error with Costly Computer Mistakes")
titles.Add("In-house Server")
titles.Add("High Speed Internet across the United States")
titles.Add("What is the “CLOUD”?")
titles.Add("Cloud vs. In-House Virtualization")
titles.Add("T-Mobile trying to stay competitve")
titles.Add("Bitcoin; currency of the future?")
titles.Add("NEW Multi-Angle Camera Views for Tech Smartphones for 2013")
titles.Add("Next Generation Firewall")
titles.Add("New January 2013 Digital Millennium Copyright Act:")
titles.Add("Does working from home effect overall performance?")
titles.Add("Smartphone and Tablets a change towards the FUTURE")
titles.Add("President Obama takes action involving cyber security")

Dim alertType : set alertType = new Collection

'alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")
alertType.Add("blog")

Dim desc : set desc = new Collection

'desc.Add("")

desc.Add("A picture is worth a thousand words and a chart is even more detailing than a picture. The Washington Post recently republished a comScore chart illustrating Blackberry’s overall rise and fall in the U.S. Smartphone market. This chart also illustrate how extraordinarily quick the U.S. market share became divided with various competitors; such as, Android and iOS.")

desc.Add("All devices running Android 2.3 and up will be able to utilize Google wallet mobile payment service. Google is again broadening what users can do with wallet, expanding availability of payment service. Google wallet is taking PayPal head on with direct money transfers.")

desc.Add("Earlier this week, Google consciously disrupted some of the functionality of Microsoft’s latest attempt at a native YouTube app for Windows Phone. Google admitted to purpose towards determination that Microsoft had violated YouTube’s terms of service.")

desc.Add("As you take a look in the past and comparing it to the present, there is a lot to consider now. We did not have tablets or smart phones nor was the internet as fast as it is today. As technology surpasses time, there must be a sense of acknowledgement that not everything we use is safe and we must know the ins and outs of why security should be a top main concern.")

desc.Add("From smearing ink on your hand, to finding left-handed scissors life for left-handers could be rather odd. I myself as a left-hander always had to adjust to the slightest problematical situations  we left-handers face daily.  ")

desc.Add("Internet use is accessed by millions of UK resident daily. Millions of people use internet for research, trending topics, social media and online shopping. Unfortunately, the reliability, speed and availability of good internet connection is rarely experienced in rural areas throughout the UK.")

desc.Add("Human error occur daily, with the capabilities of modern-day supercomputer available to banks nationwide. One would imagine, human errors are greatly magnified by automated systems and these errors seem to happen regularly. Mistakes such as this take place more often than expected, here are a few examples;")

desc.Add("After looking at what cloud-computing has to offer users, Let’s consider the options you have when purchasing an in-house server. When it comes time to upgrade from an older unit or purchase one for the first time, there are a several factors to consider. When going with an in-house setup, we assess the needs of your company and help you choose the most cost-efficient type of server.")

desc.Add("Assessing new technology for our nation’s schools, the quality of technology varies from district to district, school to school. President Obama revealed a new initiative, that in turn should help level technological expenses across the nation. Obama plans to have 99% of our US schools, grades from 3 – 12, access to high speed internet within 5 years.")

desc.Add("What is “the Cloud”? It is the internet. Everybody uses it. However, the term “cloud computing” refers to the services that have enabled the cloud to become so prominent in everyday life. For decades, people/businesses from across the world have been using the cloud in a simplest way. Using the internet to send e-mails, school papers, research and more.")

desc.Add("As someone who owns or manages a business, we all know, at times situations can be tiresome and very complex. Many different business owners have came to a point, wondering if their server infrastructure is getting old and outdated.")

desc.Add("Are cell phone discounts coming to an end? Looking at the trend of today’s markets and understanding how the cell phone discounts work. It looks like our low cell phone prices will become a thing of the past. One company that has started this trend in the past year, here in the United States is T-mobile.")

desc.Add("Bitcoin has been the poster child for “crypto-currency,” digitally created currency protected by powerful cryptography. Bitcoin is a digital currency first described in 2008, as a peer-to-peer, electronic cash system.")

desc.Add("With smart phones, tablets becoming the norm in mobile devices, they are seen everywhere. Using hand-held devices to look at Facebook pages, people taking pictures and placing them on Instagram to share with their friends and the world.")

desc.Add("In the technological trend the globe has transitioned into,  tablets, smartphones and  multi-media devices are constantly in use. Modern handheld devices have various use in society online banking, sending private e-mails, sharing and storing sensitive information.")

desc.Add("Most of Americans have heard, as of Jan 26, 2013,  Digital Millennium Copyright Act (DMCA), stated that unlocking cell phones would no longer be allowed. Unlocking a cell phone without the phone carrier’s permission, could result in nothing less than $200 and nothing more than $2,500 per violation.")

desc.Add("Can you picture it? Imagine, waking up, getting a cup of coffee and strolling over to your computer at home. Logging onto it and start working, while the whole time you’re sitting in your pajamas.  Ahh.. the beauty of working from a home office. Not a dream for some, more of a reality.")

desc.Add("In 2012, companies spent around $2 trillion dollars on IT related services/products, while Information and Communication Technologies (ICT) spending rose to about $3.6 trillion.")

desc.Add("In his State of the Union address, on Tuesday early December, President Obama signed an Executive Order to confront our nation’s cyber security needs.")
%>

<div class="alerts" style="margin-top:1px">
	<div class="alerts-grid-box">
  
<% for i=0 to titles.Count-1 %>
	<% if i < maxBlogs then %>
    <li><h2><%=titles(i)%></h2><br/>
    <% if alertType(i) = "blog" then %>
    <img src="<%=root%>public/images/blog_sml.png" />
    <% end if %>
    <p><%=desc(i)%>
    <% if alertType(i) = "blog" then
    blogCount = blogCount + 1 %>
    <a href="<%=root%>blog.asp#blog<%=blogCount%>"> Continue Reading...</a>
    <% end if %>
    </p></li>  
	<% end if %>
<% next %>
   
	</div>
</div>