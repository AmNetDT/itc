<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %> 

 <table width="504" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="189"><div id="inputName" >User Name:</div></td>
          <td width="311"><div id="formInputs">
            <select name="enableUersDaPP" id="enableUsersApp">
			  <option value="0" selected="selected"><--Select User Name--></option>
              <c:forEach items="${uEnable}" var="uSersEnable" >
              <option value="${uSersEnable.username}">${uSersEnable.username}</option>
              </c:forEach>
              </select>
            </div></td>
          </tr>
        <tr>
          <td width="189"><div id="inputName" >User Group:</div></td>
          <td width="311"><div id="formInputsss">
              <input name="enableUserG" type="text" value="" readonly="readonly" id="enableUserG" />
          </div></td>
        </tr>
        <tr>
          <td width="189"><div id="inputName" >Valid From:</div></td>
          <td width="311"><div id="formInputsss">
            <input name="validFrom" type="text" value="" readonly="readonly" id="enablevalidFrom" />
          </div></td>
          </tr>
        <tr>
          <td width="189"><div id="inputName" >Valid To:</div></td>
          <td><div id="formInputsss">
            <input name="validTo" type="text" value="" readonly="readonly"  id="enablevalidTo"/>
          </div></td>
          </tr>
           <tr>
          <td width="189"><div id="inputName" >Login Fail Date:</div></td>
          <td width="311"><div id="formInputsss">
            <input name="logFailDate" type="text" value="" readonly="readonly" id="enablevalidLoginDate"/>
          </div></td>
          </tr>
        <tr>
          <td width="189"><div id="inputName" >Block System Info:</div></td>
          <td><div id="formInputsss">
            <input name="blockSysInfo" type="text" value="" readonly="readonly" id="enablevalidBloackSysInfo"/>
          </div></td>
          </tr>
        </table>