<!--#include virtual="/includes/system_settings.asp"-->
<%
title = "Tech IT Fast | Clients"
mainHeight = 300
strArr = Array("Clients","Company/Clients.asp","Company","Company","Home","")
layout = "left"
%>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>">
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div class="title">
					<div class="title_l"></div>
					<div class="title_h">
						<h1>Clients</h1>
					</div>
					<div class="title_r"></div>
				</div>
			</div>
			<div class="content_pad_<%=layout%>">Clients landing page</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/testimonials.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->