<!--#include virtual="/includes/system_settings.asp"-->
<% 
title = "Tech IT Fast | Chicago IT Computer Support and Network System Migration"
metaDesc = title 
strArr = Array("Home","")
mainHeight = 240
layout = "center"
%>
<style>
.linkgen_wrapper{width:350px;}
label{float:left;}
input{float:right;}
</style>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
        
        <div class="linkgen_wrapper">
          <form method="post" id="linkGenForm" action="createRedirection.asp">
            <label for="FirstName">Applicant First Name</label>
            <input type="text" name="FirstName" placeholder="First Name"><br /><br />
            <label for="LastName">Applicant Last Name</label>
            <input type="text" name="LastName" placeholder="Last Name"><br /><br />
            <label for="Email">Applicant Email</label>
            <input type="text" name="Email" placeholder="Email"><br /><br />
            <input type="submit" value="Generate Link"/>
          </form>
        </div>
      
      </div>
			<div class="text_bottom_<%=layout%>"></div>
		</div>
		<div class="sidebar_<%=layout%>" style="z-index:1"></div>
	</div>
</div>
<!--#include virtual="/includes/template/footer.asp"-->