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


<link rel="stylesheet" type="text/css" href="administration/sQuery/Aristo.css"/>
<script src="ext/intNode.js"></script>
<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/normarizr.js"></script>
<script src="administration/jlib/jquery-uis.1.10.7.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.min.js"></script>
<script>

$(function(){
  $("#date_pickers_onex").datepicker({dateFormat: '${PUB_USER_LV117}' });
  $("#date_pickers_twox").datepicker({dateFormat: '${PUB_USER_LV117}' });
  $("#spinners").spinner({min:5, max:20,step:1 });
  $("#usernameCharacters").spinner({min:5, max:12,step:1 });
  $("#passwordCharacters").spinner({min:5, max:12,step:1 });
  $("#passwordExpired").spinner({min:7, max:999,step:1 });
  $("#vppassword").spinner({min:1, max:5,step:1 });
  $("#maxAtempt").spinner({min:3, max:10,step:1 });
  $("#hActiveBlock").spinner({min:1, max:72,step:1 });
})


</script>


<div id="body_general">

<div id="accounttile">Genaral Configuration
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<div id="fix_pabePanel">

<div class="menu-wrapper">
               <ul>
               
                <li class="" > 
                 <a href="javascript:void(0)"  class="actives"     id="d1" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. General&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </span> </a> 
                </li>
              
                <li class="" > 
                 <a href="javascript:void(0)"  class="noneactives"  id="d2" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Default&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></a>
                </li>
                   
                <li class="" > 
                  <a href="javascript:void(0)"  class="noneactives"  id="d3" lang="af" xml:lang="af"><span class="tab"><span>3. Other Settings</span></span></a>
                </li>
                    
                <li class="" > 
                 <a href="javascript:void(0)"   class="noneactives"  id="d4" lang="af" xml:lang="af"><span class="tab"><span>4. Loan Frequency</span></span></a>
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

<form id="GcongButtons_form">
<div  class="dialog"  id="d14" style="height:450px;">
<div id="indidual_general">
<div id="uppers">
<table width="399" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:750px;">
  <tr>
    <td width="399" valign="top">
      <table width="685" border="0" cellpadding="0" cellspacing="0" style="width:600px; padding:5px;" >
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  1:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              </select> 
             
               <select name="select" s>
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>

              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
              </select>
            </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  2:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  3:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  4:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  5:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  6:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">User Defined Loan Frequency  7:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  8:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
           <tr>
          <td><div id="inputName" style="text-align:left">User Defined Loan Frequency  9:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
           </tr>
        <tr>
          <td width="243"><div id="inputName" style="text-align:left">User Defined Loan Frequency  10:</div></td>
          <td width="357"><div id="formInputs" style="width:300px;">
            <select name="select" style="width:50px;float:left; margin-right:6px;">
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name="select" s="s">
              <option value="5">DAILY</option>
              <option value="6">WEEKLY</option>
              <option value="7">BI WEEKLY</option>
              <option value="8">ONCE EVERY 4 WEEKS</option>
              <option value="9">HALF MONTHLY</option>
              <option value="10">MONTHLY</option>
              <option value="11">BI MONTHLY</option>
              <option value="12">QUARTERLY</option>
              <option value="12">SEMI YEARLY</option>
              <option value="12">YEARLY</option>
            </select>
          </div></td>
          </tr>
        </table>
      </td>
  </tr>
</table>
</div> 
</div>
</div>




<div  class="dialog"  id="d12" style="height:450px;">
<div id="indidual_general">
<div id="uppers">
<table width="399" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:750px;">
  <tr>
    <td width="399" valign="top">
      <table width="504" border="0" cellpadding="0" cellspacing="0" style="width:500px; padding:5px;" >
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">Minimum No. of Character  for User Name:</div></td>
          <td width="152"><div id="formInputs">
            <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="usernameCharacters" value="${PUB_USER_LV126}" style="width:70px;"/>
            </div></td>
          </tr>
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">Minimum No. of Character  for Password:</div></td>
          <td width="152"><div id="formInputs">
            <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="passwordCharacters" value="${PUB_USER_LV127}" style="width:70px;"/>
            </div></td>
          </tr>
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">No. of Day for Password  Expiration:</div></td>
          <td width="152"><div id="formInputs">
           <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="passwordExpired" value="${PUB_USER_LV128}" style="width:70px;"/>
            </div></td>
          </tr>
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">Verify Previously Entered  No. of Password:</div></td>
          <td width="152"><div id="formInputs">
             <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="vppassword" value="${PUB_USER_LV129}" style="width:70px;"/>
            </div></td>
          </tr>
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">Max No. of Attempts to  Login:</div></td>
          <td width="152"><div id="formInputs">
            <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="maxAtempt" value="${PUB_USER_LV130}" style="width:70px;"/>
            </div></td>
          </tr>
		    <tr>
          <td width="348"><div id="inputName" style="text-align:left">No. of Hours to Activate Blocked/Disabled User:</div></td>
          <td width="152"><div id="formInputs">
             <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="hActiveBlock" value="${PUB_USER_LV131}" style="width:70px;"/>
            </div></td>
        </tr>
        <tr>
          <td width="348"><div id="inputName" style="text-align:left">Block/Disable User When  Login Exceeds No. of Attempts:</div></td>
          <td width="152"><div id="inputName" style="text-align:left">
             <input name="PUV_GEN_CONFIG"   value="115"  <c:if test="${PUB_USER_LV115 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="115" name="PUV_GEN_CONFIG_REPLACE">
            </div></td>
        </tr>
        <tr>
          <td><div id="inputName" style="text-align:left">Login with one time password (OTP):</div></td>
          <td><div id="inputName" style="text-align:left">
             <input name="PUV_GEN_CONFIG"   value="116"  <c:if test="${PUB_USER_LV116 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="116" name="PUV_GEN_CONFIG_REPLACE">
          </div></td>
        </tr>
      
        </table>
      </td>
  </tr>
</table>
</div> 
</div>
</div>




<div  class="dialog"  id="d13" style="height:450px;">
<div id="indidual_general">
<div id="uppers">
<table width="855" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:750px;">
  <tr>
    <td width="400"><div id="inputName" style="text-align:left">CALCULATION OF LOAN PROVISION:</div></td>
    <td width="455" colspan="3" rowspan="3" valign="top"><table width="359" border="0" cellpadding="0" cellspacing="0" style="width:400px; padding:5px;" >
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Decimal Degits:</div></td>
        <td width="143"><div id="formInputs">
      <select name="select" style="width:50px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3" selected="selected">3</option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">1000 Seperator:</div></td>
        <td width="143"><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Decimal Seperator:</div></td>
        <td width="143"><div id="formInputs">
    <input name="text" type="text" value="" />
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left"></div></td>
        <td width="143"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">GL A/C Width:</div></td>
        <td width="143"><div id="formInputs">
      <select name="select" style="width:50px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3" selected="selected">3</option>
      </select>
    </div></td>
        </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">GL A/C Format:</div></td>
        <td width="143"><div id="formInputs">
          <input name="text" type="text" value="" />
        </div></td>
        </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">A/C No. Width:</div></td>
        <td width="143"><div id="formInputs">
          <select name="select" style="width:50px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected="selected">3</option>
          </select>
        </div></td>
        </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">A/C No. Format:</div></td>
        <td width="143"><div id="formInputs">
          <input name="text" type="text" value="" />
        </div></td>
        </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Day of Clear Cheque:</div></td>
        <td width="143"><div id="formInputs">
          <select name="select" style="width:50px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected="selected">3</option>
          </select>
        </div></td>
        </tr>
       <tr>
        <td width="216"><div id="inputName" style="text-align:left">(Debit Amount)/(Credit Amount):</div></td>
        <td width="143"><div id="formInputs">
          <select name="select">
            <option value=""></option>
          </select>
        </div></td>
        </tr>
    </table>
      <table width="354" border="0" cellpadding="0" cellspacing="0" style="width:350px; padding:5px;" >
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="110"  <c:if test="${PUB_USER_LV110 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="110" name="PUV_GEN_CONFIG_REPLACE">
            Auto Generate Group Code</div></td>
        </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="PUV_GEN_CONFIG"   value="111"  <c:if test="${PUB_USER_LV111 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="111" name="PUV_GEN_CONFIG_REPLACE">
            Auto Generate A/C No.</div></td>
        </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="PUV_GEN_CONFIG"   value="112"  <c:if test="${PUB_USER_LV112 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="112" name="PUV_GEN_CONFIG_REPLACE">
            Allow Same Client Name</div></td>
        </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="113"  <c:if test="${PUB_USER_LV113 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="113" name="PUV_GEN_CONFIG_REPLACE">
            Session Opening/Closing Branch by Branch</div></td>
        </tr>
         <tr>
          <td width="354"><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="114"  <c:if test="${PUB_USER_LV114 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="114" name="PUV_GEN_CONFIG_REPLACE">
            Session Opening/Closing all Branches</div></td>
        </tr>
      </table></td>
    </tr>
  <tr>
    <td><table width="354" border="0" cellpadding="0" cellspacing="0" style="width:200px; padding:5px;" >
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="PUB_PROVISIONONOUTBAL" type="radio" value="0"  <c:if test="${PUB_USER_LV108 =='0'}">checked="checked"</c:if> type="checkbox"/>
          On Outstanding</div></td>
        </tr>
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="PUB_PROVISIONONOUTBAL" type="radio" value="1" <c:if test="${PUB_USER_LV108 =='1'}">checked="checked"</c:if> type="checkbox"/>
          On Arrears Balance</div></td>
        </tr>
    </table></td>
    </tr>
  <tr>
    <td valign="top">
    <table width="354" border="0" cellpadding="0" cellspacing="0" style="width:400px; padding:5px;" >
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Depreciation Frequency:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Fixed Asset Depreciation On:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Last Calculated Depreciation:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Default Client:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Default Sex:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Group Ttansactions:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Group Loan Disbursed to Member:</div></td>
        <td width="184"><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="109"  <c:if test="${PUB_USER_LV109 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="109" name="PUV_GEN_CONFIG_REPLACE">
          </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Search:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
      <tr>
        <td width="216"><div id="inputName" style="text-align:left">Voucher No. or Cheque No.:</div></td>
        <td width="184"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
      </tr>
    </table>
    </td>
    </tr>
</table>
</div> 
</div>
</div>















<div  class="dialog"  id="d11" style="height:450px;">
<div id="indidual_general">
<div id="uppers">
<table width="875" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:750px;">
  <tr>
    <td width="425"><div id="inputName" style="text-align:left">Date Formate:</div></td>
    <td colspan="4"><div id="formInputsGenCon">
      <select  name="DATEFORMATES">
        <option value="mm/dd/yy" <c:if test="${PUB_USER_LV117 =='dd-mm-yy'}">selected="selected"</c:if>>AMERICAN (MM/DD/YYYY)</option>
		<option value="yy.mm.dd" <c:if test="${PUB_USER_LV117 =='yy.mm.dd'}">selected="selected"</c:if>>ANSI (YYYY.MM.DD)</option>
		<option value="dd/mm/dd" <c:if test="${PUB_USER_LV117 =='dd/mm/dd'}">selected="selected"</c:if>>BRITISH/FRENCH (DD/MM/YYYY)</option>
		<option value="dd.mm.yy" <c:if test="${PUB_USER_LV117 =='dd.mm.yy'}">selected="selected"</c:if>>GERMAN (DD.MM.YYYY)</option>
		<option value="dd-mm-yy" <c:if test="${PUB_USER_LV117 =='dd-mm-yy'}">selected="selected"</c:if>>ITALIAN (DD-MM-YYYY)</option>
		<option value="yy/mm/dd" <c:if test="${PUB_USER_LV117 =='yy/mm/dd'}">selected="selected"</c:if>>JAPAN/TAIWAN (YYYY/MM/DD)</option>
		<option value="mm-dd-yy" <c:if test="${PUB_USER_LV117 =='mm-dd-yy'}">selected="selected"</c:if>>USA (MM-DD-YYYY)</option>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Backup Folder:</div></td>
    <td colspan="4"><div id="formInputsGenCon">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Start of Financial Year: </div></td>
    <td colspan="4"><div id="formInputsGenCon">
      <input name="PUB_START_FINYEAR" type="text" value="${PUB_USER_LV118}" id="date_pickers_onex" />
    </div></td>
    </tr>
  
  
    <tr>
    <td><div id="inputName" style="text-align:left">Close of Financial Year:</div></td>
    <td colspan="4"><div id="formInputsGenCon">
      <input name="PUB_END_FINYEAR" type="text" value="${PUB_USER_LV119}" id="date_pickers_twox"/>
    </div></td>
    </tr>
  
  
  <tr>
    <td><div id="inputName" style="text-align:left">Profit &amp; Loss Account:</div></td>
    <td colspan="4"><div id="formInputs" style="height:25px;" class="staticParent">
      <input type="text" value="${PUB_USER_LV120}"  name="PUB_PROFITLOSSAC" style="width:70px; float:left;" class="InterNode" maxlength="6"/>
	  <input type="text" value="${PUB_USER_LV121}"  name="PUB_PROFITLOSSGL" style="width:70px; float:left; margin-left:1px;" class="InterNode" maxlength="6"/>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Base Currency:</div></td>
    <td width="100"><div id="formInputs">
      <select  style="width:106px;" name="PUB_CURRENCY">
        <option value="USD" <c:if test="${PUB_USER_LV122 =='USD'}">selected="selected"</c:if>>USD | Us Dollar</option>
        <option value="NGN" <c:if test="${PUB_USER_LV122 =='NGN'}">selected="selected"</c:if>>NIN | Nigerian Naira </option>
      </select>
    </div></td>
    <td width="350" colspan="3" rowspan="5" valign="top"><table width="441" border="0" cellpadding="0" cellspacing="0" style=" padding:5px; width:350px;">
      <tr>
        <td width="441"><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="96"  <c:if test="${PUB_USER_LV96 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="96" name="PUV_GEN_CONFIG_REPLACE">
          Accrual Interest on Loan</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="90"  <c:if test="${PUB_USER_LV90 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="90" name="PUV_GEN_CONFIG_REPLACE">
          Audit Trail Report</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="97"  <c:if test="${PUB_USER_LV97 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="97" name="PUV_GEN_CONFIG_REPLACE">
          Confirmation for Entry of Amount</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="98"  <c:if test="${PUB_USER_LV98 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="98" name="PUV_GEN_CONFIG_REPLACE">
          Loan Application and Approval</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="99"  <c:if test="${PUB_USER_LV99 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="99" name="PUV_GEN_CONFIG_REPLACE">
          Re-calculate Interest Due for Declining Balance Loan</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="100"  <c:if test="${PUB_USER_LV100 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="100" name="PUV_GEN_CONFIG_REPLACE">
          Posting of Transaction Into Closed Year</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="101"  <c:if test="${PUB_USER_LV101 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="101" name="PUV_GEN_CONFIG_REPLACE">
          Auto Cheque Clearing at Start of Session</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="102"  <c:if test="${PUB_USER_LV102 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="102" name="PUV_GEN_CONFIG_REPLACE">
          Include Photo and Signature File in Database</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="103"  <c:if test="${PUB_USER_LV103 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="103" name="PUV_GEN_CONFIG_REPLACE">
          Interest Accrual on Fixed Deposit</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="104"  <c:if test="${PUB_USER_LV104 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="104" name="PUV_GEN_CONFIG_REPLACE">
          Interest Accrual on Bank Placement</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="105"  <c:if test="${PUB_USER_LV105 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="105" name="PUV_GEN_CONFIG_REPLACE">
Interest Accrual  on Discount Instrument</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="106"  <c:if test="${PUB_USER_LV106 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="106" name="PUV_GEN_CONFIG_REPLACE">
          Over Limit Transaction Authority</div></td>
      </tr>
      <tr>
        <td><div id="inputName" style="text-align:left">
          <input name="PUV_GEN_CONFIG"   value="107"  <c:if test="${PUB_USER_LV107 =='0'}">checked="checked"</c:if> type="checkbox" />
		  <input type="hidden" value="107" name="PUV_GEN_CONFIG_REPLACE">
          Authorise Required to Activate New Account</div></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Max. Back Day for Transaction:</div></td>
    <td><div id="formInputs">
      <input name="PUB_MAX_BACK" type="text" value="${PUB_USER_LV123}" style="width:100px;" />
    </div></td>
    </tr>
     <tr>
    <td><div id="inputName" style="text-align:left">Max. Back Day for Error Correction:</div></td>
    <td><div id="formInputs">
      <input name="PUB_MAX_BACK_EC" type="text" value="${PUB_USER_LV124}" style="width:100px;" />
    </div></td>
    </tr>
     <tr>
    <td><div id="inputName" style="text-align:left">Authorisation Notification Interval in Seconds:</div></td>
    <td><div id="formInputs">
      <input name="PUB_AUTHORIZENOTEINTERVAL"  type="text" id="spinners" value="${PUB_USER_LV125}" style="width:100px;"/>
    </div></td>
    </tr>
      <tr>
    <td colspan="2" align="left" valign="top">
      <table width="354" border="0" cellpadding="0" cellspacing="0" style="width:350px; padding:5px;" >
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
           <input name="PUV_GEN_CONFIG"   value="91"  <c:if test="${PUB_USER_LV91 =='0'}">checked="checked"</c:if> type="checkbox" />
		   <input type="hidden" value="91" name="PUV_GEN_CONFIG_REPLACE">
            Block creating control account for products</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="PUV_GEN_CONFIG"   value="92"  <c:if test="${PUB_USER_LV92 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="92" name="PUV_GEN_CONFIG_REPLACE">
            Server date and session should be the Same</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Disable tool bar</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Enable forex tool bar</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="PUV_GEN_CONFIG"   value="93"  <c:if test="${PUB_USER_LV93 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="93" name="PUV_GEN_CONFIG_REPLACE">
            End of day transaction supervision</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
             <input name="PUV_GEN_CONFIG"   value="94"  <c:if test="${PUB_USER_LV94 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="94" name="PUV_GEN_CONFIG_REPLACE">
            Child GL width should be parent GL width + 1</div></td>
          </tr>
        <tr>
          <td width="354"><div id="inputName" style="text-align:left">
            <input name="PUV_GEN_CONFIG"   value="95"  <c:if test="${PUB_USER_LV95 =='0'}">checked="checked"</c:if> type="checkbox" />
		    <input type="hidden" value="95" name="PUV_GEN_CONFIG_REPLACE">
            Penalty calculation at end of session</div></td>
          </tr>
      </table>	  </td>
    </tr>
</table>
</div> 
</div>
</div>



<div id="butoss"><button id="GcongButtons"><img src="administration/image/savebuttons.png" /> Save</button> 
<button><img src="administration/image/print.png" /> Print </button>  <input type="submit" value="Close"/>
 </div>

<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="16" name="userGroupVas" id="userGroupVas"/>
</form>




