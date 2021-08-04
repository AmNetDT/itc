<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
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




 <table class="datatable" id="genericTableFormtable" summary="System Resources" lang="af">
 <tbody >
  <c:forEach items="${fetchmeutitle}" var="fetchmeutitleTable" > 
    <tr  class="rowOdd" id="${fetchmeutitleTable.gGroupSERIAL_NO}" data-row-id="${fetchmeutitleTable.gGroupSERIAL_NO}"> 
    <td width="428">${fetchmeutitleTable.gGroupmenuTilte}</td>
    <td width="63">&nbsp;
    <input   value="${fetchmeutitleTable.gGroupSERIAL_NO}"  type="checkbox" class="sub_chk" data-id="${fetchmeutitleTable.gGroupSERIAL_NO}" name="disableCk"/>
    </td>
    </tr>
   </c:forEach>
   <tbody>
 </table>