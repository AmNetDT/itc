<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="security.csrf" %>
<% 
  String sessionid = request.getSession().getId(); 
  request.setCharacterEncoding("UTF-8");
  response.setCharacterEncoding("UTF-8");
  response.setContentType("text/html;charset=UTF-8");
  response.addHeader("Cache-Control", "no-cache, no-store, must-revalidate");
  response.addDateHeader("Expires", -1);
  response.addHeader("X-XSS-Protection", "1; mode=block");
  response.addHeader("X-Content-Security-Policy", "default-src 'self'");
  response.addHeader("X-Frame-Options", "SAMEORIGIN");
  response.setHeader("SET-COOKIE", "JSESSIONID=" + sessionid + "; HttpOnly");
  //response.setHeader("SET-COOKIE", "JSESSIONID=" + sessionid + "; Secure; HttpOnly");
%>
<% 
  csrf rToken = new csrf();
  String en   = rToken.secureRands();
  String se   = rToken.encode(en);
 
  HttpSession sess =  request.getSession();
  sess.setAttribute("ODwOE0OTQU2NzUgTADcUrEyNzgNTc4MDjA2MjEYgFwMzI0ODAxNTMyODYTwN1NTg==",en); //request verifications 
%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>InfoBank Login Console</title>
        <link rel="stylesheet" type="text/css" href="ext/addex.css"/>
	<script src="ext/jquery.js"></script>
	<script src="ext/jquery-uis.1.10.7.js"></script>
	<script src="ext/jquery-uis.1.10.2.js"></script>
	<script src="ext/jquery-uis.1.10.2.min.js"></script>
    </head>
<body>
<div id="app_cpb">
<div  id="pwsd_con">
  <div id="chpwsd">Change your password</div>
  <div>
  <form>
  <table width="200" border="1">
  <tr>
    <td>
     <div id="pwsdtext">New password</div>
     <div id="pwsdinput"><input type="password" /></div>
     <div id="pwsdtext">Confirm new password</div>
     <div id="pwsdinput"><input type="password" /></div>	
     <input type="hidden" value="${TyuRMg2YgII0c4MDU2NiHgtfFHjE0OYYGEW}">
     <input type="hidden" value="<%= se %>">
     <div id="butossPws"><button>Change Password</button></div>
    </td>
  </tr>
</table>
</form>
  </div>
</div>

</div>

</div>
</body>
</html>