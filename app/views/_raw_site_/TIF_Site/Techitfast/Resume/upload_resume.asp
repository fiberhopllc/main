<!--#include virtual="/includes/system_settings.asp"-->
<!-- #include file="FreeAspUpload.asp" -->
<% 
title = "Tech IT Fast | Chicago IT Computer Support and Network System Migration"
metaDesc = title 
strArr = Array("Home","")
mainHeight = 1600
layout = "left"
%>
<style>
#resume_file{display:block;width:260px;height:30px;}
.error{color:#F00;}
.success{color:#0C0;}
</style>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">

      	<p class="success">Thank you for your resume.
        <br/>Someone will be in touch. </p>
      
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