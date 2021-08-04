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
<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/jquery-uis.1.10.7.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.js"></script>
<script src="administration/jlib/jquery-uis.1.10.2.min.js"></script>
<script src="ext/datepicker.js"></script>


<div id="body_general">

<div id="accounttile" >Users Administration
<span id="close"><img src="administration/jlib/cancel_icon.png"  /></span>
</div>

<div id="fix_pabePanel">

<div class="menu-wrapper">
               <ul>
               
                <li class="" > 
                 <a href="#"  class="actives"  id="d1" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;Create New User&nbsp;&nbsp;&nbsp;</span> </span> </a> 
                </li>
              
                <li class="" > 
                 <a href="#"  class="noneactives"  id="d2" lang="af" xml:lang="af"><span class="tab"><span>Edit Existing User</span></span></a>
                </li>
                   
                <li class="" > 
                  <a href="#"  class="noneactives"  id="d3" lang="af" xml:lang="af"><span class="tab"><span>Change Password</span></span></a>
                </li>
                    
                <li class="" > 
                 <a href="#"   class="noneactives"  id="d4" lang="af" xml:lang="af"><span class="tab"><span>Disable Existing User</span></span></a>
                </li>
                
                 <li class="" > 
                 <a href="#"   class="noneactives"  id="d5" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;Enable User&nbsp;&nbsp;&nbsp;</span></span></a>
                </li>
                
                 <li class="" > 
                 <a href="#"   class="noneactives"  id="d6" lang="af" xml:lang="af"><span class="tab"><span>&nbsp;&nbsp;&nbsp;&nbsp;User Group&nbsp;&nbsp;&nbsp;&nbsp;</span></span></a>
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



<div  class="dialog"  id="d16" >
<form id="qB">
<div id="indidual_general">

<table width="399" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="399" valign="top">
      <table width="843" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="114"><div id="inputName">User Group 1:</div></td>
          <td width="160"><div id="formInputs">
		  
            <input name="PUB_USER_LVL1" type="text" value="${PUB_USER_LV1}"/>
            </div></td>
          <td width="127"><div id="inputName">User Group 13:</div></td>
          <td width="155"><div id="formInputs">
            <input name="PUB_USER_LVL13" type="text" id="PUB_USER_LVL13" value="${PUB_USER_LV13}" />
            </div></td>
          <td width="130"><div id="inputName">User Group 25:</div></td>
          <td width="157"><div id="formInputs">
            <input name="PUB_USER_LVL25" type="text" id="PUB_USER_LVL25" value="${PUB_USER_LV25}" />
            </div></td>
        </tr>
        <tr>
          <td><div id="inputName" >User Group 2:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL2" type="text" id="PUB_USER_LVL2" value="${PUB_USER_LV2}" />
            </div></td>
          <td><div id="inputName" >User Group 14:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL14" type="text" id="PUB_USER_LVL14" value="${PUB_USER_LV14}" />
            </div></td>
          <td><div id="inputName" >User Group 26:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL26" type="text" id="PUB_USER_LVL26" value="${PUB_USER_LV26}" />
            </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 3:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL3" type="text" id="PUB_USER_LVL3" value="${PUB_USER_LV3}" />
          </div></td>
          <td><div id="inputName">User Group 15:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL15" type="text" id="PUB_USER_LVL15" value="${PUB_USER_LV15}" />
          </div></td>
          <td><div id="inputName">User Group 27:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL27" type="text" id="PUB_USER_LVL27" value="${PUB_USER_LV27}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 4:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL4" type="text" id="PUB_USER_LVL4" value="${PUB_USER_LV4}" />
            </div></td>
          <td><div id="inputName">User Group 16:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL16" type="text" id="PUB_USER_LVL16" value="${PUB_USER_LV16}" />
            </div></td>
          <td><div id="inputName">User Group 28:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL28" type="text" id="PUB_USER_LVL28" value="${PUB_USER_LV28}" />
            </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 5:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL5" type="text" id="PUB_USER_LVL5" value="${PUB_USER_LV5}" />
          </div></td>
          <td><div id="inputName">User Group 17:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL17" type="text" id="PUB_USER_LVL17" value="${PUB_USER_LV17}" />
          </div></td>
          <td><div id="inputName">User Group 29:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL29" type="text" id="PUB_USER_LVL29" value="${PUB_USER_LV29}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 6:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL6" type="text" id="PUB_USER_LVL6" value="${PUB_USER_LV6}" />
          </div></td>
          <td><div id="inputName">User Group 18:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL18" type="text" id="PUB_USER_LVL18" value="${PUB_USER_LV18}" />
          </div></td>
          <td><div id="inputName">User Group 30:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL30" type="text" id="PUB_USER_LVL30" value="${PUB_USER_LV30}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 7:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL7" type="text" id="PUB_USER_LVL7" value="${PUB_USER_LV7}" />
          </div></td>
          <td><div id="inputName">User Group 19:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL19" type="text" id="PUB_USER_LVL19" value="${PUB_USER_LV19}" />
          </div></td>
          <td><div id="inputName">User Group 31:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL31" type="text" id="PUB_USER_LVL31" value="${PUB_USER_LV31}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 8:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL8" type="text" id="PUB_USER_LVL8" value="${PUB_USER_LV8}" />
          </div></td>
          <td><div id="inputName">User Group 20:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL20" type="text" id="PUB_USER_LVL20" value="${PUB_USER_LV20}" />
          </div></td>
          <td><div id="inputName">User Group 32:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL32" type="text" id="PUB_USER_LVL32" value="${PUB_USER_LV32}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 9:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL9" type="text" id="PUB_USER_LVL9" value="${PUB_USER_LV9}" />
          </div></td>
          <td><div id="inputName">User Group 21:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL21" type="text" id="PUB_USER_LVL21" value="${PUB_USER_LV21}" />
          </div></td>
          <td><div id="inputName">User Group 33:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL33" type="text" id="PUB_USER_LVL33" value="${PUB_USER_LV33}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName">User Group 10:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL10" type="text" id="PUB_USER_LVL10" value="${PUB_USER_LV10}" />
          </div></td>
          <td><div id="inputName">User Group 22:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL22" type="text" id="PUB_USER_LVL22" value="${PUB_USER_LV22}" />
          </div></td>
          <td><div id="inputName">User Group 34:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL34" type="text" id="PUB_USER_LVL34" value="${PUB_USER_LV34}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName" >User Group 11:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL11" type="text" id="PUB_USER_LVL11" value="${PUB_USER_LV11}" />
          </div></td>
          <td><div id="inputName" >User Group 23:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL23" type="text" id="PUB_USER_LVL23" value="${PUB_USER_LV23}" />
          </div></td>
          <td><div id="inputName" >User Group 35:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL35" type="text" id="PUB_USER_LVL35" value="${PUB_USER_LV35}" />
          </div></td>
        </tr>
        <tr>
          <td><div id="inputName" >User Group 12:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL12" type="text" id="PUB_USER_LVL12" value="${PUB_USER_LV12}" />
          </div></td>
          <td><div id="inputName" >User Group 24:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL24" type="text" id="PUB_USER_LVL24" value="${PUB_USER_LV24}" />
          </div></td>
          <td><div id="inputName" >User Group 36:</div></td>
          <td><div id="formInputs">
            <input name="PUB_USER_LVL36" type="text" id="PUB_USER_LVL36" value="${PUB_USER_LV36}" />
			<input type="hidden" value="<%= se %>" name="csrf"/>
			<input type="hidden" value="7" name="userGroupVas" id="userGroupVas"/>
          </div></td
        ></tr>
        </table>
      </td>
  </tr>
</table>
</div> 
<div id="butoss" ><button id="saveButtons"><img src="administration/image/savebuttons.png" /> Save</button> 
<button><img src="administration/image/print.png" /> Print </button>  <input type="submit" value="Logged-In"/> <input type="submit" value="Close"/>
 </div>
</form>
</div>



<div  class="dialog"  id="d15"  >
  <form id="enableUsersApps">
<div id="indidual_general">

<table width="399" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="399" valign="top">
	  <jsp:include page="enabeUser.jsp" />   
     </td>
  </tr>
</table>
</div> 
<div id="butoss" ><button id="enabButons">Ok</button> <input type="submit" value="Close" id="closeB"/>
 </div>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="" name="userGroupVas" id="userGroupQ" />
</form>
</div>





<div  class="dialog"  id="d14" >
<form id="disableGroupApp">
<div id="indidual_general">

<table width="399" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="399" valign="top">
        <table width="504" border="0" cellpadding="0" cellspacing="0" id="disUserPage">
          <jsp:include page="disableuser.jsp" />
        </table>
      </td>
  </tr>
</table>
</div> 
<div id="butoss" ><button id="appDisableButs">Ok</button> <input type="submit" value="Close"/>
 </div>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="" name="userGroupVas" id="userGroupVa"/>
</form>
</div>





<div  class="dialog"  id="d12" >
<form id="chageUname">
<div id="indidual_general">

<table width="399" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="399" valign="top">
      <jsp:include page="pswd.jsp" />
    </td>
  </tr>
</table>
</div> 

<div id="butoss"><button id="chpwsdc">Ok</button> <input type="submit" value="Close"/></div>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="" name="userGroupVas" id="userGroupa"/>
</form>
</div>






<div  class="dialog"  id="d13" >
<div id="indidual_general">

<table width="900" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="180"><div id="inputName" >User Name:</div></td>
    <td width="311"><div id="formInputs">
        <select name="select" >
          <option value="" selected="selected"></option>
            <option value=""></option>
        </select>
    </div></td>
    <td width="227"><div id="inputName" >Sex:</div></td>
    <td width="272"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >User Group:</div></td>
    <td><div id="formInputs">
      <select name="select" >
			 <option value="" selected="selected"></option>
                <option value=""></option>
              </select>
    </div></td>
    <td><div id="inputName" >User's Full Name:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  
  
    <tr>
      <td><div id="inputName" >Valid From:</div></td>
      <td><div id="formInputs_80" >
        <input type="text" value=""  id="date_pickers_five" />
      </div></td>
      <td><div id="inputName" >Residential Address:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  
  
  <tr>
    <td><div id="inputName" >Valid To:</div></td>
    <td><div id="formInputs_80" >
      <input type="text" value="" id="date_pickers_six" />
    </div></td>
    <td><div id="inputName" >Residetial Phone No.: </div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >Cashier/Teller No.:</div></td>
    <td width="221"><div id="formInputs_100">
      <input name="text" type="text" value=""/>
    </div></td>
    <td width="227"><div id="inputName" >Mobile:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >Transaction Limit (Credit):</div></td>
    <td><div id="formInputs_100">
      <input name="text" type="text" value=""/>
    </div></td>
    <td><div id="inputName" >Email:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
     <tr>
       <td><div id="inputName" >Transaction Limit (Debit):</div></td>
       <td><div id="formInputs_100">
         <input name="text" type="text" value="" />
       </div></td>
       <td><div id="inputName" >User ID:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
     </tr>
     <tr>
       <td><div id="inputName" >Branch:</div></td>
       <td><div id="formInputs_100">
         <input name="text" type="text" value="" />
       </div></td>
       <td colspan="2" rowspan="2">
	   <table width="421" border="0" cellpadding="0" cellspacing="0" id="adTabs">
         <tr>
           <td width="366"><div id="inputName" >Timeout Limit (in Minutes):</div></td>
           <td width="124"><div id="formInputs_100">
             <input name="text2" type="text" value="" />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Max Back Day for Transaction:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value="" />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Max Back Day for Error Correction:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value="" />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Max Back Day for Viewing Saving Statement of Account:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value=""  />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Max Back Day for Viewing Shares Statement of Account:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value=""  />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Max Back Day for Viewing General Statement of Account:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value=""  />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Loan Approval/Reject Amount Limit From:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value=""  />
             </div></td>
           </tr>
         <tr>
           <td><div id="inputName" >Loan Approval/Reject Amount Limit To:</div></td>
           <td><div id="formInputs_100">
             <input name="text2" type="text" value="" />
             </div></td>
           </tr>
       </table></td>
    </tr>
      <tr>
        <td colspan="2" align="left" valign="top">
          <table width="334" border="0" cellpadding="0" cellspacing="0" id="adTabsQ" >
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Transaction Supervisor</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Loan Officer</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Loan Supervisor</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Saving Supervisor</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Prevent Loggin-in when Session is Closed</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Multiple Login with the Same User ID</div></td>
              </tr>
            <tr>
              <td colspan="2"><div id="inputName" >
                <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
                Muti User Group Login</div></td>
              </tr>
            <tr>
              <td width="180"><div id="inputName" >Loan Supervisor:</div></td>
              <td width="170"><div id="formInputs">
                <input name="text3" type="text" value="" />
                </div></td>
              </tr>
          </table></td>
        </tr>
</table>
</div> 
<div id="butoss" ><button>Update</button> <input type="submit" value="Close"/>
 </div>
</div>





<div  class="dialog"  id="d11" >
<form id="createNewUser">
<div id="indidual_general">

<table width="900" border="0" cellpadding="0" cellspacing="0" id="tableSpance">
  <tr>
    <td width="180"><div id="inputName" >User Name:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
      </div></td>
    <td width="227"><div id="inputName" >Sex:</div></td>
    <td width="272"><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >User Group:</div></td>
    <td><div id="formInputs">
       <select name="select" >
			 <option value="" selected="selected"></option>
                <option value=""></option>
              </select>
    </div></td>
    <td><div id="inputName" >User's Full Name:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  
  
    <tr>
      <td><div id="inputName" >Password:</div></td>
      <td><div id="formInputs">
        <input name="text" type="text" value="" />
      </div></td>
    <td><div id="inputName" >Residential Address:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  
  
  <tr>
    <td><div id="inputName" >Re-Enter Password: </div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td><div id="inputName" >Residetial Phone No.: </div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >Valid From:</div></td>
    <td><div id="formInputs_80" >
      <input type="text" value="" id="date_pickers_seven" />
    </div></td>
    <td width="227"><div id="inputName" >Mobile:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName" >Valid To:</div></td>
    <td><div id="formInputs_80" >
      <input type="text" value=""  id="date_pickers_eight" />
    </div></td>
    <td><div id="inputName" >Email:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
     <tr>
       <td><div id="inputName" >Cashier/Teller No.:</div></td>
       <td width="221"><div id="formInputs_100">
         <input name="text" type="text" value=""  />
       </div></td>
    <td><div id="inputName" >User ID:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
     </tr>
     <tr>
       <td><div id="inputName" >Transaction Limit (Credit):</div></td>
       <td><div id="formInputs_100">
         <input name="text" type="text" value="" />
       </div></td>
    <td colspan="2" rowspan="4"><table width="421" border="0" cellpadding="0" cellspacing="0" id="adTabs">
      <tr>
        <td width="366"><div id="inputName" >Timeout Limit (in Minutes):</div></td>
        <td width="124"><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Max Back Day for Transaction:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value=""/>
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Max Back Day for Error Correction:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Max Back Day for Viewing Saving Statement of Account:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Max Back Day for Viewing Shares Statement of Account:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Max Back Day for Viewing General Statement of Account:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Loan Approval/Reject Amount Limit From:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
      <tr>
        <td><div id="inputName" >Loan Approval/Reject Amount Limit To:</div></td>
        <td><div id="formInputs_100">
          <input name="text2" type="text" value="" />
          </div></td>
        </tr>
    </table></td>
    </tr>
       <tr>
       <td><div id="inputName" >Transaction Limit (Debit):</div></td>
       <td><div id="formInputs_100">
         <input name="text" type="text" value="" />
       </div></td>
    </tr>
     <tr>
       <td><div id="inputName" >Branch:</div></td>
       <td><div id="formInputs_100">
         <input name="text" type="text" value="" />
       </div></td>
    </tr>
      <tr>
    <td colspan="2" align="left" valign="top">
      <table width="334" border="0" cellpadding="0" cellspacing="0" id="adTabsQ" >
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Transaction Supervisor</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Loan Officer</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Loan Supervisor</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Saving Supervisor</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Prevent Loggin-in when Session is Closed</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Multiple Login with the Same User ID</div></td>
          </tr>
        <tr>
          <td colspan="2"><div id="inputName" >
            <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
            Muti User Group Login</div></td>
          </tr>
        <tr>
          <td width="180"><div id="inputName" >Loan Supervisor:</div></td>
          <td width="170"><div id="formInputs">
            <input name="text3" type="text" value="" />
            </div></td>
          </tr>
      </table>
      </td>
    </tr>
</table>
</div> 
<div id="butoss"><button id="saveCreateNewUser"><img src="administration/image/savebuttons.png"  /> Save</button> 
<button><img src="administration/image/print.png" /> Print </button>  <input type="submit" value="Close"/>
 </div>
<input type="hidden" value="<%= se %>" name="csrf"/>
<input type="hidden" value="6" name="userGroupVas" id="userGroupVas"/>
 </form>
</div>





