<!--#include virtual="/includes/system_settings.asp"-->
<% title = "Tech IT Fast | Careers"
mainHeight = 600
strArr = Array("About Us","Company/about-us.asp","Company","Company","Home","")
layout = "left"
%>
<style>
#resume_file {
	display:block;
	width:500px;
	height:25px;
}
.submit_resume input[type="file"]{
	border:1px solid #000;
}
.submit_resume input[type="submit"]{
	margin-top:5px;
}
.error {
	color:#F00;
}
</style>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>">
			<div class="text_top_<%=layout%>" style="margin-top:0"></div>
			<div class="content_pad_<%=layout%>">
				<h1 style="font-size:24pt">Careers</h1>
				<% width=0 %>
				<!--#include virtual="/includes/template/elements/spacer_h.asp"-->
			</div>
			<div class="content_pad_<%=layout%>">
			<div>
			Seeking a career with a fast-growing information technology company? Great! Tech IT Fast is a fast growing Chicago based information technology firm, focused on providing our customers with full line of hassle-free IT support.<p/>

We are currently seeking Tier 2 and Tier 3 Technicians, Graphics and Web Developers, and Sales Representatives. We also have paid internships available for budding Tier 1 Technicians who are willing to learn. We have both onsite and offsite positions.<p/>

We are always looking for talented, hard working, and dedicated people to join our team. If this is you - please upload your resume below.<p/>

Thanks for your interest in Tech IT Fast.<p/>

<span style="font-size:8pt">Please, no phone calls or recruiters.</span><p/>
			</div>
			<div class="submit_resume">
					<p class="error" id="submit_response"><br/>
					</p>
					<form name="submit_resume" id="submit_resume" method="post" enctype="multipart/form-data" 
accept-charset="utf-8">
						<label for="resume_file"><h2 style="margin-bottom:0; margin-top:0">Resume</h2></label>
						<input type="file" name="resume_file" id="resume_file" />
						<input type="hidden" id="resume_ext" name="resume_ext" value="im a value" />
						<input type="submit" value="Submit Resume" />
					</form>
				</div>
			</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>	
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/promos.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->
<script type="text/javascript" src="http://www.techitfast.com/public/js/resume.js"></script>