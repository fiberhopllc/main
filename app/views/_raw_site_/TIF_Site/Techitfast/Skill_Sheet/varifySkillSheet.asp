<%
Dim logs(),ids()
ReDim logs(-1)
ReDim ids(-1)
responseObject = ""
htmlIn = false
finalHtml = ""
eic = 0
cnt = 0
cnt2 = 0

sub verifyField(val, id)
	val = replace(val," ","")
	if len(val)<1 or val = """""" then
		Select Case id
			Case "skillOptional","skillOptionalDesc"
				st = ""
			Case else
				st = "-- " & id & " Is Required! " & " --"
				eic = eic + 1
		End Select
	else
		st = ""
		if instr(id,"Desc") = false then
			if isNumeric(val) = false then
				st = "-- "&id&" Must Be A Numeric Value (0-10) --"
				eic = eic + 1
			end if
		end if
	end if
	
	if eic = 0 then 
		call logHtml(id,val)
	else
		finalHtml = ""
	end if
	logError(st)
	addID(id)
end sub
sub logHtml(id,val)
	if htmlIn = false then 
		finalHtml = "<html><head></head><body>"
		htmlIn = true
	end if
	finalHtml = finalHtml & "<h2>" & id & "</h2><p>" & val & "</p>"
end sub
sub logError(str)
	str = replace(str,"Desc"," Description")
	str = replace(str,"skill","")
	str = replace(str,"server","")
	str = replace(str,"SQL_","SQL ")
	str = replace(str,"L_","Linux ")
	str = replace(str,"WS_","Web Services ")
	if cnt = 0 then redim logs(0)
	logs(cnt) = str
	cnt = cnt + 1
	redim preserve logs(cnt)
End sub
sub addID(id)
	if cnt2 = 0 then redim ids(0)
	ids(cnt2) = id
	cnt2 = cnt2 + 1
	redim preserve ids(cnt2)
end sub

sub createResponseObject()	
	Response.ContentType = "application/json"	
	if eic <> 0 then
		responseObject = "{""response"":["
		for i=0 to ubound(logs) - 1
				responseObject = responseObject & "{""error"":""" & logs(i) & """ , ""id"":""" & ids(i) & """ },"
		next
		responseObject = left(responseObject,len(responseObject)-1)
		responseObject = responseObject & "] }"	
	else
		Dim Mail
		Set Mail=CreateObject("CDO.Message")
	
		Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
		Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver")="localhost"
		Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=25
		Mail.Configuration.Fields.Update
		
		Mail.Subject="Skill Sheet - Tech IT Fast"
		Mail.From="sales@techitfast.com"
		Mail.To="cnesbitt@techitfast.com"
		Mail.HTMLBody = finalHtml & "</body></html>"
		
		Mail.Send
		
		set Mail=nothing
		
		responseObject = "{""response"":[{""error"":"""" ,""success"":""Thank you for filling out our skills form, we will contact you soon.""}]}"
	end if
	eic = 0
	Response.Write(responseObject)
end sub

For Each Item In Request.Form
	fieldName = Item
	fieldValue = Request.Form(Item)
	call verifyField(fieldValue,fieldName)
next

createResponseObject()
%>