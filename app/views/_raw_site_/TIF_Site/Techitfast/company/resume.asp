<!--#include virtual="/includes/system_settings.asp"-->
<% 
title = "Tech IT Fast | Chicago IT Computer Support and Network System Migration"
metaDesc = title 
strArr = Array("Home","")
mainHeight = 1600
layout = "left"
%>
<style>
#resume_file {
	display:block;
	width:260px;
	height:30px;
}
.error {
	color:#F00;
}
.success {
	color:#0C0;
}
</style>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<div class="submit_resume">
					<p class="error" id="submit_response"><br/>
					</p>
					<form name="submit_resume" id="submit_resume" method="post" enctype="multipart/form-data" 
accept-charset="utf-8">
						<label for="resume_file">Resume</label>
						<input type="file" name="resume_file" id="resume_file" />
						<input type="hidden" id="resume_ext" name="resume_ext" value="im a value" />
						<input type="submit" />
					</form>
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
<script type="text/javascript" src="resume.js"></script>