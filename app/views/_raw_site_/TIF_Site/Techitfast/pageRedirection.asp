<!--#include virtual="includes/functions/security/encryption.asp"-->
<%
AMOUNT_OF_DAYS = 1
'amt of hours applies if amt of days is 0
AMOUNT_OF_HOURS = 8

fLink = request.QueryString(encode("skillsheet"))

for dc = 0 to 10
	fLink = Decode(fLink)
next
linkI = split(fLink,",")
linkI(2) = replace(linkI(2),"*","/")
linkI(3) = replace(linkI(3),"*",":")

ssLink = false

dd = DateDiff("d",linkI(2),Date())

if dd <= AMOUNT_OF_DAYS then
	if dd = AMOUNT_OF_DAYS then
		if Time() < linkI(3) then ssLink = true
	else
		ssLink = true
	end if
end if

if ssLink = false then 
	Server.Execute("/CredCheck/linkExpired.asp")
else
	Server.Execute("/Skill_Sheet/skillSheet.asp")
end if
%>