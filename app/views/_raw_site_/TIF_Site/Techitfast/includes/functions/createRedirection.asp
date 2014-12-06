<!--#include virtual="/includes/functions/security/encryption.asp"-->
<%
	
Dim fName,lName,nPage,fLink

fName = request.Form("FirstName")
lName = request.Form("LastName")
email = request.Form("Email")

d = Date()
t = Time()
d = replace(d,"/","*")
t = replace(t,":","*")

fLink = fName & "," & lName & "," & d & "," & t

for ec = 0 to 10
	fLink = Encode(fLink)
next

fLink = "http://www.techitfast.com/pageRedirection.asp?" & encode("skillsheet") & "=" & fLink
%>
<html>
<body>
<h1><b>Link:</b></h1>
<p><%=fLink%></p>
</body>
</html>