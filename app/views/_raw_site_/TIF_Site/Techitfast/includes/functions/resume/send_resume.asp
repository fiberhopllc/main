<!-- #include file="FreeAspUpload.asp" -->
<%
if request.QueryString("f") = "0" then
	Response.ContentType = "application/json"
	
	Dim responseObject, extension
	
	responseObject = "{""response"":[{""error"":"""
	extension = request.Form("resume_ext")
	upload = false
	
	Select Case extension
		case "pdf","doc","docx","txt","rtf"
			responseObject = responseObject & """,""success"":""http://www.techitfast.com/includes/functions/resume/send_resume.asp?f=ul""}]}"
		case else
			if extension = "" then
				responseObject = responseObject & "No file to upload""}]}"
			else
				responseObject = responseObject & "Unsupported File Type: "&extension&"<br><br> Supported File Types: doc, docx, pdf, txt, rtf""}]}"
			end if
	End Select
	
	Response.Write(responseObject)
	
elseif request.QueryString("f") = "ul" then

	Dim ResumeFolder : ResumeFolder = "/Resume/Uploaded Resumes"
	Dim Upload : Set Upload = New FreeASPUpload
	
	Upload.Save(Server.MapPath(ResumeFolder))
	
	files = Upload.Files
					
	strHTML = "<HTML>"
	strHTML = strHTML & "<HEAD>"
	strHTML = strHTML & "</HEAD>"
	strHTML = strHTML & "<BODY>"
	strHTML = strHTML & "<p>New Resume</p>"
	strHTML = strHTML & "This message was generated from techitfast.com<br/>"
	strHTML = strHTML & "</BODY>"
	strHTML = strHTML & "</HTML>"
	
	Set Mail=CreateObject("CDO.Message")
	
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver")="localhost"
	Mail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=25
	Mail.Configuration.Fields.Update
	
	Mail.Subject="Resume - Tech IT Fast"
	Mail.From="sales@techitfast.com"
	Mail.To="sales@techitfast.com"
	Mail.HTMLBody=strHTML
	Mail.AddAttachment(Server.MapPath(ResumeFolder & "/" & files(0).filename))
	
	Mail.Send
	
	set Mail=nothing
	
	dim fs
	Set fs=Server.CreateObject("Scripting.FileSystemObject")
	fs.DeleteFile(Server.MapPath(ResumeFolder & "/" & files(0).filename))
	set fs=nothing
	
	response.Redirect("upload_resume.asp")
end if
%>