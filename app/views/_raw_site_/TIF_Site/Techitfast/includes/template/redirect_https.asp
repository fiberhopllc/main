<%

if Request.ServerVariables("HTTPS") = "off" then 
	
	RedirectToProperURL()
	
else
	
	if  Left(Request.ServerVariables("HTTP_HOST"), 4) <> "www." Then
		RedirectToProperURL()
	end if

end if

function RedirectToProperURL()
	
	Dim uri
	Dim url
	
	url = Request.ServerVariables("URL")
	if url = "/Default.asp" then
		url = ""
	end if
	
	uri = "https://www.techitfast.com" & url
	
	If Request.ServerVariables("QUERY_STRING") <> "" Then
		uri = uri & "?" & Request.ServerVariables("QUERY_STRING")
	End If
	
	Response.Status="301 Moved Permanently"
	Response.Redirect(uri)
	'Response.AddHeader "Location",uri
	
end function

%>