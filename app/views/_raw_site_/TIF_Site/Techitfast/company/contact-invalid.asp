<!--#include virtual="/includes/system_settings.asp"-->
<%
title = "Tech IT Fast | Invalid Contact"
mainHeight = 560
strArr = Array("Contact Us","Company/contact-us.asp","Company","Company","Home","")
layout = "left"
%>
<script type="text/javascript">
function goBack(){window.history.back()}
</script>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>">
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div class="title">
					<div class="title_l"></div>
					<div class="title_h">
						<h1>Invalid Contact</h1>
					</div>
					<div class="title_r"></div>
				</div>
			</div>
			<div class="content_pad_<%=layout%>"> <br/>
				<p>The contact information you provided was rejected for the following reasons:</p>
				<ul>
					<%
			e = split(request.QueryString("contactErrors"),";")
			for i=0 to ubound(e)-1
				response.Write("<li>" & e(i) & "</li><br/>")
			next
			%>
					<input type="button" value="Return To Contact Form" onclick="goBack()">
				</ul>
			</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/promos.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->