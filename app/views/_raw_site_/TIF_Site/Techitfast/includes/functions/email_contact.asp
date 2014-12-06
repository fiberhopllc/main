<%
function CheckRecaptcha()
    Dim VarString

    recaptcha_private_key = "6LdyYdsSAAAAAEtDMiRD4jp9x0aq7t4bB916d7tj"
    rechallenge  = Request("recaptcha_challenge_field")
    reresponse   = Request("recaptcha_response_field")

    VarString = _
            "privatekey=" & recaptcha_private_key & _
            "&remoteip=" & Request.ServerVariables("REMOTE_ADDR") & _
            "&challenge=" & rechallenge & _
            "&response=" & reresponse

    Dim objXmlHttp
    Set objXmlHttp = Server.CreateObject("Msxml2.ServerXMLHTTP")
    objXmlHttp.open "POST", "http://www.google.com/recaptcha/api/verify", False
    objXmlHttp.setRequestHeader "Content-Type", "application/x-www-form-urlencoded"
    objXmlHttp.send VarString

    Dim ResponseString
    ResponseString = split(objXmlHttp.responseText, vblf)
    Set objXmlHttp = Nothing

    if ResponseString(0) = "true" then
    'They answered correctly
        recaptcha_confirm = ""
    else
    'They answered incorrectly
        recaptcha_confirm = ResponseString(1)
    end if

    if recaptcha_confirm <> "" then
        'Wrong!
			theErrors = "Incorrect recaptcha words entered;"
			response.redirect "../../company/contact-invalid.asp?contactErrors=" & theErrors
    else
        CheckUserInput()
    end if
end function

function CheckUserInput()

	Dim cn,em,ph,de
	Dim theErrors:theErrors=""
	
	cn=request.Form("CompanyName")
	em=request.Form("Email")
	ph=request.Form("Phone")
	de=request.Form("Description")
	
	if cn = "" then
		theErrors = "No company name provided;"
	end if
	if em = "" then
		theErrors = theErrors & "No email provided;"
	else
		if isEmailValid(em) = false then
			tbeErrors = theErrors & "Invalid email provided;"
		end if
	end if
	if ph = "" then
		theErrors = theErrors & "No phone number provided;"
	'else
	'	if isPhoneValid(ph) = false then
	'		theErrors = theErrors & "Invalid phone number provided: "&ph&";"
	'	end if
	end if
	
	if theErrors = "" then
		ContactUsEmail()
	else
		response.redirect "../../company/contact-invalid.asp?contactErrors=" & theErrors
	end if
	
end function

Function isEmailValid(usrmail) 
	Set regEx = New RegExp 
	'regEx.Pattern = "^[_a-zA-Z0-9-""'\/]+(\.[_a-zA-Z0-9-""'\/]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))$"
	regEx.Pattern = "^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w{2,}$" 
	isEmailValid = regEx.Test(trim(usrmail)) 
End Function
function isPhoneValid(phnNum)
	replace phnNum,"(",""
	replace phnNum,")",""
	replace phnNum,"-",""
	replace phnNum,"_",""
	replace phnNum,"+",""
	replace phnNum,".",""
	replace phnNum," ",""
	replace phnNum,"  ",""
	
	'if isNumeric(phone) then	
		Set reg = new regexp
		reg.pattern = "((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"
		isPhoneValid = reg.Test(trim(phnNum))
	'else
		'isPhoneValid = false
	'end if
end function 

function ContactUsEmail()
	
	Dim cName,email,phone,desc
	Dim strHTML
	
	cName=request.Form("CompanyName")
	email=request.Form("Email")
	phone=request.Form("Phone")
	desc=request.Form("Description")
	
	strHTML = "<HTML>"
	strHTML = strHTML & "<HEAD>"
	strHTML = strHTML & "<style>"
	strHTML = strHTML & "b{color:#005;}"
	strHTML = strHTML & "#wrap{border:#000 solid thin;padding:12px;}"
	strHTML = strHTML & "#title{background:#005; text-align:center;font-size:16px;}"
	strHTML = strHTML & "</style>"
	strHTML = strHTML & "</HEAD>"
	strHTML = strHTML & "<BODY>"
	strHTML = strHTML & "<div id=""title"">"
	strHTML = strHTML & "Tech IT Fast : Possible Client"
	strHTML = strHTML & "</div>"
	strHTML = strHTML & "<div id=""wrap"">"
	strHTML = strHTML & "<b>Company: </b>" & cName & "<br/><br/>"
	strHTML = strHTML & "<b>Email: </b>" & email & "<br/><br/>"
	strHTML = strHTML & "<b>IP: </b>" & Request.ServerVariables("remote_addr") & "<br/><br/>"
	
	strHTML = strHTML & "<b>Phone: </b>" 
	if phone = "" then
		strHTML = strHTML & "No phone number was provided by the client.<br/><br/>"
	else
		strHTML = strHTML & phone & "<br/><br/>"
	end if
	
	strHTML = strHTML & "<b>Description:</b>" & "<br/>"
	if desc = "" then
		strHTML = strHTML & "No description was provided by this client.<br/><br/><br/>"
	else
		strHTML = strHTML & desc & "<br/></div><br/><br/>"
	end if
	
	strHTML = strHTML & "This message was generated from techitfast.com<br/>"
	strHTML = strHTML & "</BODY>"
	strHTML = strHTML & "</HTML>"

	Set Mail=CreateObject("CDO.Message")
	
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
	'Name or IP of remote SMTP server
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver")="localhost"
	'Server port	
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=25
	Mail.Configuration.Fields.Update
	
	Mail.Subject="Possible New Client: " & cName
	Mail.From="sales@techitfast.com"
	Mail.To="sales@techitfast.com"
	Mail.HTMLBody=strHTML
	
	Mail.Send
	
	set Mail=nothing
	
	response.redirect "../../company/contact-submitted.asp"
end function

'CheckUserInput()
CheckRecaptcha()
%>