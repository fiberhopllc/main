<!--#include virtual="/includes/system_settings.asp"-->
<%
title = "Tech IT Fast | Promotions" 
mainHeight = 780
strArr = Array("Promotions","promotions.asp","Home","")
layout = "left"
%>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>">
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div class="title">
					<div class="title_l"></div>
					<div class="title_h">
						<h1>Promotions</h1>
					</div>
					<div class="title_r"></div>
				</div>
			</div>
			<div class="content_pad_<%=layout%>">
				<div class="promo_icon"> <img src="public/images/promo_icon.png" width="220" height="220"/>
					<p><span style="color:#009;">Tech IT Fast, Inc</span> <span style="font-weight:100; font-size:17px;">provides promotional deals year around with a few seasonal deals. All of our promotions</span> can <span style="font-weight:100;">be applied to new or current projects, as well as prospective clients.</span> <br/>
						<br/>
						<br/>
						<span style="font-weight:100; font-size:17px;">Our promotions enable our clients to utilize all of our services at a possible </span>discounted rate.</p>
					<div class="promo_sidepic"> <img src="public/images/security-series-investor-relations-1.jpg" /> </div>
					<ul>
						<li>Up to 50% OFF initial project</li>
						<ul>
							<div id="thinText">
								<li>1-2 year agreement required</li>
							</div>
						</ul>
					</ul>
					<ul>
						<li>First Month FREE HOSTING (ANY Hosted Services)</li>
						<ul>
							<div id="thinText">
								<li>6 month minimum commitment</li>
							</div>
						</ul>
					</ul>
					<ul>
						<li>2 HOURS FREE Maintenance Hours</li>
						<ul>
							<div id="thinText">
								<li>4 month minimum commitment</li>
							</div>
						</ul>
					</ul>
					<ul>
						<li>Customer Referral Program</li>
						<ul>
							<div id="thinText">
								<li>current clients are awarded for referring prospective clients</li>
							</div>
						</ul>
					</ul>
				</div>
			</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/promos.asp"-->
			<!--#include virtual="/includes/template/sidebar/testimonials.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->