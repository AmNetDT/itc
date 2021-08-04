<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>  
  
  <tr>
          <td width="189"><div id="inputName" >User Name:</div></td>
           <td width="311"><div id="formInputs">
            <select name="cUsersDis" id="cUsersDis">
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
              <input name="disUsergUps" id="disUsergUps" type="text" value="" readonly="readonly" />
          </div></td>
        </tr>
        <tr>
          <td width="189"><div id="inputName" >Password:</div></td>
          <td width="311"><div id="formInputsss">
              <input name="validFrom"  type="text" value="" readonly="readonly" />
          </div></td>
        </tr>
        <tr>
          <td width="189"><div id="inputName" >Re-Enter Password:</div></td>
          <td><div id="formInputsss">
              <input name="validTo" type="text" value="" readonly="readonly" />
          </div></td>
        </tr>
           <tr>
          <td width="189"><div id="inputName" >Valid From:</div></td>
          <td width="311"><div id="formInputsss">
              <input name="validFromDisable" id="validFromDisable" type="text" value="" readonly="readonly"/>
          </div></td>
           </tr>
        <tr>
          <td width="189"><div id="inputName" >Valid To:</div></td>
          <td><div id="formInputsss">
              <input name="validToDisable" id="validToDisable" type="text" value="" readonly="readonly"/>
          </div></td>
        </tr>