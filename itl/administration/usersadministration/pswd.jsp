<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %> 

<table width="504" border="0" cellpadding="0" cellspacing="0"  >
        <tr>
          <td width="189"><div id="inputName" >User Name:</div></td>
          <td width="311"><div id="formInputs">
             <select name="cUsersr" id="cUsersq">
			 <option value="0" selected="selected"><--Select User Name--></option>
              <c:forEach items="${uName}" var="userNames" >
                <option value="${userNames.username}">${userNames.username}</option>
              </c:forEach>
              </select>
            </div></td>
          </tr>
        <tr>
          <td width="189"><div id="inputName" >User Group:</div></td>
          <td width="311"><div id="formInputsss">
              <input name="uGroupName" type="text" value="" readonly="readonly"  id="uGroupNamee"/>
          </div></td>
        </tr>
        <tr>
          <td width="189"><div id="inputName">Enter New Password:</div></td>
          <td width="311"><div id="formInputs">
            <input  type="password" value="" id="ChangeNewPassw" name="ChangeNewPassw"/>
          </div></td>
          </tr>
        <tr>
          <td width="189"><div id="inputName" >Confirm New Password:</div></td>
          <td><div id="formInputs">
            <input  type="password" value="" id="ChangeconPassw" name="ChangeconPassw" />
          </div></td>
          </tr>
        </table>