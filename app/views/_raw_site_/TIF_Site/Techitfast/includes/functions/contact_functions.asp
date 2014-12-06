<script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
    $("#contact_button").click(function(){
    $("#popout_contact").slideToggle();
    });
	if($( "#contactSubmit" ).css( "cursor" )=="default")
	{
		
	}
	else
	{
		$("#contactSubmit").click(function(){
		$("#popout_contact").slideToggle();
		});
	};
});
</script>
<!-- Contact Form Pop Out -->

<div class="contact_tab"><img id="contact_button" src="<%=root%>public/images/contact-tab.png" alt="Contact Us"/></div>
<div class="contact_form" id="popout_contact" style="font-family:'Muli', sans-serif;">
	<form name="ContactUs" id="contactUs" method="post" action="<%=root%>includes/functions/email_contact.asp">
		<ul>
			<li>
				<label for="CompanyName">Company Name</label>
				<br/>
				<input type="text" name="CompanyName" value="" />
			</li>
			<li>
				<label for="Email">Email</label>
				<br/>
				<input type="text" name="Email" value="" />
			</li>
			<li>
				<label for="Phone">Phone</label>
				<br/>
				<input type="text" name="Phone" value="" />
			</li>
			<li>
				<label for="Description">Description</label>
				<br/>
				<textarea name="Description" cols="1" rows="1"></textarea>
			</li>
            <%
			'<li>
			'	<div style="margin-top:110px; margin-bottom:-20px;"> Human Verification
			'		<div style="width:160px; margin-left:8px; margin-top:4px; margin-bottom:4px;">
			'			 <!--#include virtual="includes/functions/tifcha.asp"-->
			'		</div>
			'		<span style="font-size:10pt; color:#555">Drag all the way to the right</span> </div>
			'</li>
            %>
		</ul>
		<input id="contactSubmit" type="submit" value="Submit"/>

        <div style="position:absolute;left:200px;top:0px;">
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
	</form>
</div>
