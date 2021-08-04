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

<div id="accounttile">Define Mandatory/Unique Customer Additional Fields
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<div  class="dialog"  id="d11" >
<form id="pub_MADATE">
<div id="indidual_general">

 <table width="548" border="0" cellpadding="0" cellspacing="0" style=" margin-left:50px;" >
        <tr>
          <td width="233"><div id="perIndicator" style="text-align:left">Mandatory Fields</div></td>
          <td width="315" colspan="2"><div id="perIndicator" style="text-align:left">Unique Fields</div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="68"  <c:if test="${PUB_USER_LV68 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="68" name="pub_uniq_replace">
            Postal Address</div></td>
          <td colspan="2"><div id="inputName" style="text-align:left">
             <input name="pub_uniq_Customer"   value="86"  <c:if test="${PUB_USER_LV86 =='0'}">checked="checked"</c:if> type="checkbox" />
			 <input type="hidden" value="86" name="pub_uniq_replace">
            Ref. No. </div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="69"  <c:if test="${PUB_USER_LV69 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="69" name="pub_uniq_replace">
            Registration Date</div></td>
          <td colspan="2"><div id="inputName" style="text-align:left">
             <input name="pub_uniq_Customer"   value="87"  <c:if test="${PUB_USER_LV87 =='0'}">checked="checked"</c:if> type="checkbox" />
			 <input type="hidden" value="87" name="pub_uniq_replace">
            ID Card </div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="70"  <c:if test="${PUB_USER_LV70 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="70" name="pub_uniq_replace">
            Sex</div></td>
          <td colspan="2"><div id="inputName" style="text-align:left">
             <input name="pub_uniq_Customer"   value="88"  <c:if test="${PUB_USER_LV88 =='0'}">checked="checked"</c:if> type="checkbox" />
			 <input type="hidden" value="88" name="pub_uniq_replace">
            Voucher No. </div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="71"  <c:if test="${PUB_USER_LV71 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="71" name="pub_uniq_replace">
            Area Code</div></td>
          <td colspan="2"><div id="inputName" style="text-align:left">
             <input name="pub_uniq_Customer"   value="89"  <c:if test="${PUB_USER_LV89 =='0'}">checked="checked"</c:if> type="checkbox" />
			 <input type="hidden" value="89" name="pub_uniq_replace">
            User ID </div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
           <input name="pub_uniq_Customer"   value="72"  <c:if test="${PUB_USER_LV72 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="72" name="pub_uniq_replace">
            Customer Category 1</div></td>
          <td colspan="2"><div id="inputName" style="text-align:left"></div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="73"  <c:if test="${PUB_USER_LV73 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="73" name="pub_uniq_replace">
            Ref No.</div></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="74"  <c:if test="${PUB_USER_LV74 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="74" name="pub_uniq_replace">
            Phone No.</div></td>
          <td colspan="2" rowspan="2" valign="bottom"><div id="perIndicator" style="text-align:left">Customer Additional Fields</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="75"  <c:if test="${PUB_USER_LV75 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="75" name="pub_uniq_replace">
            Mobile No.</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="76"  <c:if test="${PUB_USER_LV76 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="76" name="pub_uniq_replace">
            Date of Birth</div></td>
          <td colspan="2" rowspan="10" valign="top">
          <table width="268" border="0" cellpadding="0" cellspacing="0" style="width:350px;">
            <tr>
              <td width="156"><div id="inputName" style="text-align:left">User Definable Field 1:</div></td>
              <td width="194"><div id="formInputs">
                <input name="User_Definable_Field_1" type="text" value="${PUB_USER_LV64}" />
              </div></td>
            </tr>
            <tr>
              <td width="156"><div id="inputName" style="text-align:left">User Definable Field 2:</div></td>
              <td width="194"><div id="formInputs">
                <input name="User_Definable_Field_2" type="text" value="${PUB_USER_LV65}" />
              </div></td>
            </tr>
            <tr>
              <td width="156"><div id="inputName" style="text-align:left">User Definable Field 3:</div></td>
              <td width="194"><div id="formInputs">
                <input name="User_Definable_Field_3" type="text" value="${PUB_USER_LV66}" />
              </div></td>
            </tr>
            <tr>
              <td width="156"><div id="inputName" style="text-align:left">User Definable Field 4:</div></td>
              <td width="194"><div id="formInputs">
                <input name="User_Definable_Field_4" type="text" value="${PUB_USER_LV67}" />
              </div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="77"  <c:if test="${PUB_USER_LV77 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="77" name="pub_uniq_replace">
            ID Card</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="78"  <c:if test="${PUB_USER_LV78 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="78" name="pub_uniq_replace">
            Sub-Group Code</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="79"  <c:if test="${PUB_USER_LV79 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="79" name="pub_uniq_replace">
            Voucher No.</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
           <input name="pub_uniq_Customer"   value="80"  <c:if test="${PUB_USER_LV80 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="80" name="pub_uniq_replace">
            Collateral</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="81"  <c:if test="${PUB_USER_LV81 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="81" name="pub_uniq_replace">
            Monthly Meeting Date</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="82"  <c:if test="${PUB_USER_LV82 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="82" name="pub_uniq_replace">
            User ID</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="83"  <c:if test="${PUB_USER_LV83 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="83" name="pub_uniq_replace">
            Photo File
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"   value="84"  <c:if test="${PUB_USER_LV84 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="84" name="pub_uniq_replace">
            Signature File</div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">
            <input name="pub_uniq_Customer"  value="85"  <c:if test="${PUB_USER_LV85 =='0'}">checked="checked"</c:if> type="checkbox" />
			<input type="hidden" value="85" name="pub_uniq_replace">
            Other Bank Cheque Details
          </div></td>
        </tr>
      </table>
<div id="butoss" style=" margin-left:50px; margin-top:30px;">
  <button id="pub_MAND_BOTTON"><img src="administration/image/savebuttons.png" /> Save</button> 
  <input type="submit" value="Close"/>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="15" name="userGroupVas" id="userGroupVas"/>
 </div>
<form>
</div>

