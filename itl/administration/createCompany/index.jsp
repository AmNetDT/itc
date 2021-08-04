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
<script src="ext/intNode.js"></script>
<script src="administration/jlib/jquery-uis.1.10.7.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.min.js"></script>



<div id="body_general">
<div id="accounttile">Create Company
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<div id="fix_pabePanel">
<div class="menu-wrapper">
               <ul>
                  <li class="" > <a href="#" class="actives"  id="d1" lang="af" xml:lang="af"> <span class="tab"> <span>&nbsp;&nbsp;&nbsp;Create Company &nbsp;&nbsp;&nbsp;</span> </span> </a> </li>
              
                   <li class="" > <a href="#" title="Region" class="noneactives"  id="d3" lang="af" xml:lang="af"> <span class="tab"> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </span> </a> </li>
                </ul>
              </div>

</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div  class="dialog"  id="d11">
  <form id="cnpProfile">
<table  border="0" cellpadding="0" id="tableSpance" style="margin-bottom:10PX;">
  <tr>
    <td width="186"><div id="inputName">Company Code:</div></td>
    <td width="214"><div id="formInputsSame">
      <select name="select" id="cnpCode">
      </select>
    </div></td>
    <td width="81" rowspan="8" valign="top">
        <div id="listButs_pt">
          <input name="submit" type="submit" value="ADD" />
          <br />
          <input name="submit" type="submit" value="UPDATE" />
          <br />
          <input name="submit" type="submit" value="DELETE" />
          <br />
          <input name="submit" type="submit" value="CLOSE" />
        </div>
    </td>
    </tr>
  <tr>
    <td><div id="inputName">Comapany Name:</div></td>
    <td><div id="formInputsSam"><input type="text" value="" readonly="readonly" id="cnpName"/></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Branch Name:</div></td>
    <td><div id="formInputsSame">
      <select name="select" id="brhName">
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Region:</div></td>
    <td><div id="formInputsSame">
      <select name="select" id="brnRegion">
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Default Inter Branch GL No.: </div></td>
    <td><div id="formInputsqm" class="staticParent">
      <input name="text" type="text" value=""  class="InterNode" id="brnGlno"/>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Default Inter Branch A/C No.:</div></td>
    <td><div id="formInputsqm" class="staticParent">
      <input name="text" type="text" value="" class="InterNode" id="brnAcno"/>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Central Bank Branch Code:</div></td>
    <td><div id="formInputsqm" class="staticParent">
      <input name="text" type="text" value="" class="InterNode" id="cbBranch"/>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName"></div></td>
    <td><div id="formInputsqm" class="staticParent">
      <input name="text" type="text" value="" class="InterNode" id="int_acNo"/>
    </div></td>
    </tr>
</table>
<br />
<div id="overflock">
<table width="700" border="1" id="membrs_tablessr"  >
  <tr>
    <td width="299" align="left" valign="top">
	 <table class="datatable" id="genericTableFormtable" summary="System Resources" style=" width:820px;">
          <tbody>
            <tr >
              <th width="120"><div id="datatableColcontent">Company Code</div></th>
              <th width="250"><div id="datatableColcontent">Company Name</div></th>
              <th width="230"><div id="datatableColcontent">Branch Name</div></th>
			  <th width="100"><div id="datatableColcontent">Region</div></th>
			  <th width="120"><div id="datatableColcontent">GL No. A/C No.</div></th>
			  <th width="100"><div id="datatableColcontent">A/C No.</div></th>
			  <th width="100"><div id="datatableColcontent"></div></th>
             </tr>
            </tbody>
          </table>
		  <div id="table_resultscnp">
           <table class="datatable" id="genericTableFormtable" summary="System Resources" lang="af" style=" width:820px;">
 <tbody >
  <c:forEach items="${comList}" var="cnp" > 
    <tr  class="rowOdd"  data-row-id="" id="${cnp.cpCode}" lang="${cnp.cpCode}af" name="at" > 
    <td width="144">${cnp.cpCode}</td>
	<td width="255">${cnp.cpName}</td>
	<td width="230">${cnp.cpBrnName}</td>
	<td width="120">${cnp.cpRegion}</td>
	<td width="125">${cnp.cpBrnGL}</td>
	<td width="100">${cnp.cpBrnAC}</td>
    <td width="90">${cnp.INIT_AC_NO}</td>
    </tr>
  </c:forEach>	
   <tbody>
 </table>
          </div>
    </td>
  </tr>
</table>
</div>

<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="" name="userGroupVas" id="userGrouper" />
<input type="hidden" value="" name="trowvals" id="tRaws" />
</form>
</div>





<div  class="dialog"  id="d12">
  <form id="enableUsersApps">
<div id="indidual_general">

<table width="580" border="0" id="tableSpance">
  <tr>
    <td width="60"><div id="inputName">Region:</div></td>
    <td width="510"><div id="formInputs"><input type="text" value="" style="width:200px;"/></div></td>
    </tr>
</table>
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
</div> 
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="" name="userGroupVas" id="userGroupQ" />
</form>
</div>