<!--#include virtual="/includes/system_settings.asp"-->
<%
title = "Tech IT Fast | Contact Us"
mainHeight = 640
strArr = Array("Contact Us","Company/contact-us.asp","Company","Company","Home","")
layout = "left"
contact = false
%>
<script type="text/javascript">
$(document).ready(function(){
    $(".contact_full").Show();
);
</script>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" style="margin-top:-3px">
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				<h1 style="font-size:24pt;">Contact Us</h1>
				<% width=52 %>
				<!--#include virtual="/includes/template/elements/spacer_h.asp"-->
				<div class="contact_full">
					<div id="title">General Inquiries</div>
					<form name="ContactUs" id="contactUs" method="post" action="<%=root%>includes/functions/email_contact.asp">
						<ul>
							<li>
								<label for="CompanyName">Company Name</label>
								<input type="text" name="CompanyName" placeholder="Company Name" value="">
							</li>
							<div id="label_border"></div>
							<li>
								<label for="Email">Email</label>
								<input type="text" name="Email" placeholder="example@ex.com" value="">
							</li>
							<div id="label_border"></div>
							<li>
								<label for="Phone">Phone</label>
								<input type="text" name="Phone" placeholder="(555)555-5555" value="">
							</li>
							<div id="label_border"></div>
							<li>
								<label for="Description">Description</label>
								<textarea name="Description" placeholder="Enter Description"></textarea>
							</li>
                            
							<%
                            '<div id="label_border"></div>
			                '<li>
			                '	<div style="margin-top:110px; margin-bottom:-20px;"> Human Verification
			                '		<div style="width:160px; margin-left:8px; margin-top:4px; margin-bottom:4px;">
			                '			 <!--#include virtual="includes/functions/tifcha.asp"-->
			                '		</div>
			                '		<span style="font-size:10pt; color:#555">Drag all the way to the right</span> </div>
			                '</li>
                            %>
						</ul>
						
                        <div style="clear:both">
                            <script type="text/javascript">
                                var RecaptchaOptions = {
                                    theme: 'red',
                                    tabindex: 0
                                };
                            </script>
                            <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LdyYdsSAAAAAHuql-Gag8ZHKsz0yG-1XD8hDscn"></script>
                            <noscript>
                            <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LdyYdsSAAAAAHuql-Gag8ZHKsz0yG-1XD8hDscn" frameborder="1"></iframe>
                                <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                                <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
                            </noscript>
                        </div>

						<input id="contactSubmit" type="submit" value="Submit"/>
						<div style="padding:28px;"></div>
					</form>
				</div>
				<div class="address">
				<h3>Sales and Support</h3>
				312.470.6430<br/><br/>				
				<h3>Main Office</h3>
				850 W. Jackson Blvd, Suite 305<br/>
				Chicago, Illinois 60607<br/><br/>
				<h3>Schaumburg Office</h3>
				800 Lunt Ave<br/>
				Schaumburg, Illinois 60193<br/><br/>
				</div>
				<div style="height:380px;"></div>
			</div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1">
			<!--#include virtual="/includes/template/sidebar/promos.asp"-->
		</div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->