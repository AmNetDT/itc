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
 <table class="datatable" id="genericTableFormtable" summary="System Resources">
   <tbody>
      <c:forEach items="${userRight}" var="right" varStatus="status">
      <tr  class="rowOdd">
      <td width="190">${right.mnupopup}</td>
      <td width="286">${right.menutitle}</td>
      <td width="53">
      <input   value="${right.mnuidbar}" <c:if  test="${right.pubv1 =='0'}">checked="checked"</c:if> type="checkbox"  name="grps"  />
      <input type="hidden" value="${right.mnuidbar}" name="mniudbar">
      </td>
      </tr>
	  </c:forEach>
     </tbody>
  </table>
  <input type="hidden" value="${colum_no}" name="colum_no"  />
  <input type="hidden" value="${userRightGroup}" name="userRightGrop"  />
  <input type="hidden" value="${requestToken}" name="csrf"/>
  <input type="hidden" value="2" name="userGroupVas"/>