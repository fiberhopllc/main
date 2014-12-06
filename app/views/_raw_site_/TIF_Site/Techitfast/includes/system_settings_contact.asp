<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>

<!--#include virtual="/includes/template/redirect_https.asp"-->
<%
Dim metaDesc : metaDesc = "Innovative Chicago networking and computer support firm, providing I.T. services with FREE consultations designed specifically to reduce overall cost and maintain a secure networking infrastructure."
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />
<!-- //FONTS -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name="AUTHOR" content="Tech It Fast Inc." />
<meta name="description" content="<%=metaDesc%>" />
<meta name="robots" content="index, follow" />
<meta name="google-site-verification" content="CthK2ETqNzGlVzrDCg60p0bWQbsC9mgNfSnccTGRWNQ" />

<%
strArr = Array()
mainHeight = 1150
'root = "../../../../../../../../../"
root = "https://www.techitfast.com/"
layout = "left"
%>

<link rel="stylesheet" type="text/css" href="<%=root%>public/css/style.css" />
<link rel="stylesheet" type="text/css" href="<%=root%>public/css/alt_content.css" />
<link rel="stylesheet" type="text/css" href="<%=root%>public/css/jquery-ui-1.10.1.custom.min.css" />

<!--#include virtual="/includes/functions/page_functions.asp"-->