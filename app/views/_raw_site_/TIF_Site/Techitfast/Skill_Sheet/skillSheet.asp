<!--#include virtual="/includes/system_settings.asp"-->
<% 
title = "Tech IT Fast | Chicago IT Computer Support and Network System Migration"
metaDesc = title 
strArr = Array("Home","")
mainHeight = 4100
layout = "left"
%>
<style>
.error{color:#F00;}
.success{color:#0C0;}
.lineSpacer{
	background:#000;
	height:2px;
	margin:40px 0px 40px 0px;
}
.fieldContainer{
	width:650px;
	display:inline-block;
	padding:20px;
	/*border:thin dashed #000;*/
}
.skill_Line_Text{
	float:left;
	width:610px;
	margin-bottom:18px;
	border-bottom:1px solid #000;
	padding-bottom:2px;
}
.skill_Num_Box{
	width:16px;
	margin-bottom:14px;
	margin-left:7px;
	margin-right:7px;
	float:right;
}
.skill_Desc_Box{
	float:left;
	width:600px;
	max-width:600px;
	height:60px;
	max-height:60px;
}
.skill_title{
	display:inline-block;
	margin:20px;
	border:thin solid #000;
	font-size:20px;
	padding:2px;
}
textarea {
	resize:none;
}
</style>
<!--#include virtual="/includes/template/header.asp"-->
		<div class="body_<%=layout%>" >
			<div class="text_top_<%=layout%>"></div>
			<div class="content_pad_<%=layout%>">
				
        <% 'Skill Form Wrapper gets replaced upon successful ajax return' %>
        <div class="skillFormWrapper">
          <p>This form is to evaluate your skills and is NOT a test.<br /><br />
          Be honest and straight forward and it will make the hiring process a lot easier for all parties involved.<br />
          We are looking for people of varying skill levels so nothing is an automatic disqualification.<br />
          However if you are not willing to further your knowledge in weaker areas you should look for other employment.</p>
          
          <div class="lineSpacer"></div>
          
          <form id="skillForm" method="post">
            
            <% ' ********************************** EXCHANGE ************************************ ' %>
            <div class="fieldContainer">
              <div class="error" id="exchange"></div>
              <label for="exchange" id="exchange" class="skill_Line_Text">
                <b>Exchange:</b> (9 and above should have experience with installations, migrations and multi tenant)
              </label>
              <input type="text" name="exchange" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <% ' ****************************** ACTIVE DIRECTORY ******************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="activeDir"></div>
              <label for="activeDir" id="activeDir" class="skill_Line_Text">
                <b>Active Directory:</b> (9 and above should have experience with installations and migrations)
              </label>
              <input type="text" name="activeDir" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <% ' ********************************* SHAREPOINT *********************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="sharepoint"></div>
              <label for="sharepoint" class="skill_Line_Text">
                <b>SharePoint:</b> (9 and above should have experience with installations, migrations and multi tenant)
              </label>
              <input type="text" name="sharepoint" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <% ' *********************************** VMWARE ************************************* ' %>
            <div class="fieldContainer">
              <div class="error" id="vmware"></div>
              <label for="vmware" class="skill_Line_Text">
                <b>VMware:</b> (list product and familiarity level)
              </label>
              <input type="text" name="vmware" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="vmwareDesc"></div>
              <textarea name="vmwareDesc" class="skill_Desc_Box"></textarea>
             </div>
             
             <% ' *********************************** LINUX ************************************* ' %>
             <div class="skill_title">Linux</div>
             <div class="fieldContainer">    
              <div class="error" id="L_Ubuntu"></div>
              <label for="L_Ubuntu" class="skill_Line_Text"><b>Ubuntu:</b></label>
              <input type="text" name="L_Ubuntu" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="L_CentOS"></div>
              <label for="L_CentOS" class="skill_Line_Text"><b>CentOS:</b></label>
              <input type="text" name="L_CentOS" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="L_SuSe"></div>
              <label for="L_SuSe" class="skill_Line_Text"><b>SuSe:</b></label>
              <input type="text" name="L_SuSe" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="L_Other"></div>
              <label for="L_Other" class="skill_Line_Text"><b>Other:</b></label>
              <input type="text" name="L_Other" class="skill_Num_Box" maxlength="2" />
                
            </div>
            
            <% ' ******************************** WEB SERVICES ********************************* ' %>
            <div class="skill_title">Web Services</div>
            <div class="fieldContainer">  
              <div class="error" id="WS_iis"></div>
              <label for="WS_iis" class="skill_Line_Text"><b>IIS/FTP:</b></label>
              <input type="text" name="WS_iis" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="WS_apache"></div>
              <label for="WS_apache" class="skill_Line_Text"><b>Apache:</b></label>
              <input type="text" name="WS_apache" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="WS_cpanel"></div>
              <label for="WS_cpanel" class="skill_Line_Text"><b>cPanel:</b></label>
              <input type="text" name="WS_cpanel" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="WS_plesk"></div>
              <label for="WS_plesk" class="skill_Line_Text"><b>Plesk:</b></label>
              <input type="text" name="WS_plesk" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <% ' ************************************* SQL *************************************** ' %>
            <div class="skill_title">SQL</div>
            <div class="fieldContainer">
              <div class="error" id="SQL_ms"></div>
              <label for="SQL_ms" class="skill_Line_Text"><b>MS SQL:</b></label>
              <input type="text" name="SQL_ms" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="SQL_my"></div>
              <label for="SQL_my" class="skill_Line_Text"><b>My SQL:</b></label>
              <input type="text" name="SQL_my" class="skill_Num_Box" maxlength="2" />
            </div>
            
            <% ' ********************************* RAID ARRAY ************************************ ' %>
            <div class="fieldContainer">
              <div class="error" id="raidArray"></div>
              <label for="raidArray" class="skill_Line_Text">
                <b>(RAID) Arrays:</b> (List RAID levels experienced with)
              </label>
              <input type="text" name="raidArray" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="raidArrayDesc"></div>
              <textarea name="raidArrayDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ******************** Server Hardware and Support Familiarity ******************** ' %>
            <div class="skill_title">Server Hardware and Support Familiarity</div>
            <div class="fieldContainer">
              <div class="error" id="serverSMicro"></div>
              <label for="serverSMicro" class="skill_Line_Text">
                <b>Supermicro:</b>
              </label>
              <input type="text" name="serverSMicro" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="serverSMicroDesc"></div>
              <textarea name="serverSMicroDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="serverDell"></div>
              <label for="serverDell" class="skill_Line_Text">
                <b>Dell:</b>
              </label>
              <input type="text" name="serverDell" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="serverDellDesc"></div>
              <textarea name="serverDellDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="serverHP"></div>
              <label for="serverHP" class="skill_Line_Text">
                <b>HP:</b>
              </label>
              <input type="text" name="serverHP" class="skill_Num_Box" maxlength="2" />
              <div class="error" id=""></div>
              <textarea name="serverHPDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ********************************** FIREWALL *********************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="firewallUTM"></div>
              <label for="firewallUTM" class="skill_Line_Text">
                <b>Firewall/UTM Brand Familiarity:</b> (List appliance and familiarity level)
              </label>
              <input type="text" name="firewallUTM" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="firewallUTMDesc"></div>
              <textarea name="firewallUTMDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <div class="fieldContainer">
              <div class="error" id="skillVPN"></div>
              <label for="skillVPN" class="skill_Line_Text">
                <b>VPN:</b> (List type(s) and familiarity level)
              </label>
              <input type="text" name="skillVPN" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillVPNDesc"></div>
              <textarea name="skillVPNDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ************************************* MAC *************************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillMac"></div>
              <label for="skillMac" class="skill_Line_Text">
                <b>MACS/APPLE:</b>
              </label>
              <input type="text" name="skillMac" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillMacDesc"></div>
              <textarea name="skillMacDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ********************************** BACKUPS ************************************* ' %>
            <div class="fieldContainer">
              <div class="error" id="skillBackups"></div>
              <label for="skillBackups" class="skill_Line_Text">
                <b>Backups/Disaster Recovery:</b>
              </label>
              <input type="text" name="skillBackups" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillBackupsDesc"></div>
              <textarea name="skillBackupsDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ****************************** MANAGED SERVICES ******************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillMServices"></div>
              <label for="skillMServices" class="skill_Line_Text">
                <b>Managed Services:</b> (List the brand/provider with familiarity level)
              </label>
              <input type="text" name="skillMServices" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillMServicesDesc"></div>
              <textarea name="skillMServicesDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ********************************* TICKETING *********************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillTicketing"></div>
              <label for="skillTicketing" class="skill_Line_Text">
                <b>Ticketing Systems:</b> (List the brand/provider with familiarity level)
              </label>
              <input type="text" name="skillTicketing" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillTicketingDesc"></div>
              <textarea name="skillTicketingDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' *********************************DATACENTER *********************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillDatacenter"></div>
              <label for="skillDatacenter" class="skill_Line_Text">
                <b>Datacenter:</b> (List facility and experience/skill)
              </label>
              <input type="text" name="skillDatacenter" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillDatacenterDesc"></div>
              <textarea name="skillDatacenterDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ************************************ NAS ************************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillSanNas"></div>
              <label for="skillSanNas" class="skill_Line_Text">
                <b>SAN/NAS STORAGE:</b> (List appliance and experience/skill)
              </label>
              <input type="text" name="skillSanNas" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillSanNasDesc"></div>
              <textarea name="skillSanNasDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ********************************** CLOUD ************************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillCloud"></div>
              <label for="skillCloud" class="skill_Line_Text">
                <b>CLOUD:</b> (List provider and or experience/skill)
              </label>
              <input type="text" name="skillCloud" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillCloudDesc"></div>
              <textarea name="skillCloudDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ************************************* CDN *************************************** ' %>
            <div class="fieldContainer">
              <div class="error" id="skillCDN"></div>
              <label for="skillCDN" class="skill_Line_Text">
                <b>Content Delivery Networking:</b> (List provider and or experience/skill)
              </label>
              <input type="text" name="skillCDN" class="skill_Num_Box" maxlength="2" />
              <div class="error" id="skillCDNDesc"></div>
              <textarea name="skillCDNDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <% ' ********************************** OPTIONAL ************************************ ' %>
            <div class="skill_title">Optional/Not Required</div>
            
            <div class="fieldContainer">
              <label for="skillOptional" class="skill_Line_Text">
                <b>Web development or programming skills:</b> (List provider and or experience/skill)
              </label>
              <input type="text" name="skillOptional" class="skill_Num_Box" maxlength="2" />
              <textarea name="skillOptionalDesc" class="skill_Desc_Box"></textarea>
            </div>
            
            <input type="submit" value="Submit Skills"/>
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

<script type="text/javascript" src="<%=root%>Skill_Sheet/skillSheet.js"></script>