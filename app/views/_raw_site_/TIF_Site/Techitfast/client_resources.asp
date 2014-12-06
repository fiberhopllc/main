<!--#include virtual="/includes/system_settings.asp"-->
<% 
title = "Tech IT Fast | Chicago IT Computer Support and Network System Migration"
metaDesc = title 
strArr = Array("Client Resources", "client_resources.asp", "Home","")
mainHeight = 380
layout = "center"
%>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div style="width:940px; margin-left:-3px; margin-top:8px; height:264px;">
					<div class="portal"><a href="http://itmon.techitfast.com/"><img src="<%=root%>public/images/portal_itmon.jpg" alt="ITmon™ Managed Services Solution" /></a></div>
					<div class="portal"><a href="http://fastsupport.com/"><img src="<%=root%>public/images/portal_citrix.jpg" alt="Remote Desktop" /></a><br/><br/>
						<span style="width: 280px; font-size:10pt; color:#F33">
							<strong>Important!</strong> Your Java must be up to date in order to establish a session.<br/>
							Click <a href="http://www.java.com/en/download/"> here</a> to download the latest version.
						</span>
					</div>
					<div class="portal"><a href="https://www.myconnectwise.net/techitfast"><img src="<%=root%>public/images/portal_connectwise.jpg" alt="Ticketing Portal" /></a></div>
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