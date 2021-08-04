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

 
<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/normarizr.js"></script>
<script src="administration/jlib/jquery-uis.1.10.7.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.min.js"></script>



<div id="body_general">

<div id="accounttile">System User Right
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<div id="fix_pabePanel">

<div class="menu-wrapper">
               <ul>
               
                <li class="" > 
                 <a href="#"  class="actives"     id="d1" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;User Group Right&nbsp;&nbsp;&nbsp;</span> </span> </a> 
                </li>
              
                <li class="" > 
                 <a href="#"  class="noneactives"  id="d2" lang="af" xml:lang="af"><span class="tab"><span> &nbsp;&nbsp;&nbsp;&nbsp;User Right&nbsp;&nbsp;&nbsp;&nbsp;</span></span></a>
                </li>
   
    </ul>
  </div>
              
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div  class="dialog"  id="d13">
<div id="indidual_general">
<form id="sysUserRight_UserRight">
<table width="273" border="0" cellpadding="0" cellspacing="0"  id="tableSpance">
  <tr>
    <td width="105"><div id="inputName">User Group:</div></td>
    <td width="168">
	<div id="formInputs">
      <select name="userGroupRightEvent" id="userGroupEvent">
        <option value="0" selected="selected"><--Select Group--></option>
		 <c:forEach items="${userGroup}" var="groupusers" >
                <option value="${groupusers.groupvalue}">${groupusers.groupname}</option>
         </c:forEach>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >User Name:</div></td>
    <td><div id="formInputs">
      <select name="userNameRights" id="userNameRights_Right">
	  </select>
    </div></td>
    </tr>
    <tr>
    <td><div id="inputName" >Menu Title:</div></td>
    <td><div id="formInputs">
      <select name="userMenusTitles">
	  <c:forEach items="${selectMenuTiles}" var="nMenuTiles" >
	    <option value="${nMenuTiles.uSERmnuidbar}:${nMenuTiles.uSERmenutitle}">${nMenuTiles.uSERmnupopup} | ${nMenuTiles.uSERmenutitle}</option>
	  </c:forEach>
	  </select>
     </div>
    </td>
    </tr>
</table>
<div id="butoss" class="sysUserRight_UserRight_Buttons"><button id="saveButtonsUserRights"> Add</button> 
  <button id="removeDisable" title="membrs_tables"> Remove </button>  <input type="submit" value="Close"/>
</div>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="3" name="userGroupVas" id="userGroupVas"/>
<input type="hidden" value="0" name="alternateVal" id="alternateVal" />

<table width="700" border="1" id="membrs_tables">
  <tr>
    <td width="299" align="left" valign="top">
	 <table class="datatable" id="genericTableFormtable" summary="System Resources" style="margin-bottom:-5px; width:703px;">
          <tbody>
            <tr >
              <th width="577"><div id="datatableColcontent">Menu Item (Disable) </div></th>
              <th width="114"><div id="datatableColcontent"> Remove</div></th>
              </tr>
            </tbody>
          </table>
		   
      <div id="table_results_disable">
	
	  </div>
    </td>
  </tr>
</table>

</form>
</div>
</div>





<div  class="dialog"  id="d11" >
<div id="indidual_general">


<form id="userGroupRequest">
<table width="278" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="105"><div id="inputName">User Group:</div></td>
    <td width="173"><div id="formInputs">
      <select name="groupname" id="groupChange">
        <option value="0" selected="selected"><--Select Group--></option>
		 <c:forEach items="${userGroup}" var="groupusers" >
                <option value="${groupusers.groupvalue}">${groupusers.groupname}</option>
         </c:forEach>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Menu Title:</div></td>
    <td><div id="formInputs">
      <select  name="menutitle" id="chagemeuTile">
        <option value="0">All Menu Items</option>
		<option value="1">Customers Management</option>
		<option value="2">Transaction</option>
		<option value="3">EOP (End of Period)</option>
		<option value="4">Stock</option>
		<option value="5">Report</option>
		<option value="6">Admin (Administration)</option>
      </select>
	  <input type="hidden" value="<%= se %>" name="csrf"/>
	  <input type="hidden" value="1" name="userGroupVar" id="valChange"/>
	  <input type="hidden" value="1" name="userGroupVas"/>
    </div></td>
    </tr>
</table>
</form>

<form id="saveUserGroup">
<div id="butoss" ><button id="saveButtons" class="cos"><img src="administration/image/savebuttons.png" /> Save</button> 
<button><img src="administration/image/print.png" /> Print </button>  <input type="submit" value="Close"/>
 </div>
<table width="700" border="1" id="membrs_tables">
  <tr>
    <td width="299" align="left" valign="top">
	 <table class="datatable" id="genericTableFormtable" summary="System Resources" style="margin-bottom:-5px; width:703px;">
          <tbody>
            <tr >
              <th width="183"><div id="datatableColcontent">Menu Description</div></th>
              <th width="270"><div id="datatableColcontent">Menu Item</div></th>
              <th width="70"><div id="datatableColcontent">User Right?</div></th>
             </tr>
            </tbody>
          </table>
      <div id="table_results"></div>
    </td>
  </tr>
</table>
</form>
</div>
</div>





