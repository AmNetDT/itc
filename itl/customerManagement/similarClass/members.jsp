

<div style="position:relative">
<div id="body_general">
<div id="uppersSign">
<table width="741" border="1" style="width:800px;">
  <tr>
    <td width="156"><div id="inputName">Name:</div></td>
    <td><div id="formInputs"><input type="text" value="<%= request.getParameter("regKey") %>" /></div></td>
    <td width="176"><div id="inputName">BVN:</div></td>
    <td width="227"><div id="formInputs"><input type="text" value="" /></div></td>
  </tr>
  <tr>
    <td><div id="inputName">Physical/Postal Address:</div></td>
    <td width="154"><div id="formInputs"><input type="text" value="" /></div></td>
    <td><div id="inputName">Mobile Number:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Date of Birth:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
   <td><div id="inputName">Sub-Group Code:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    
    </tr>
    
  <tr>
    <td><div id="inputName">Sex:</div></td>
    <td><div id="formInputs">
      <select name="select">
        <option value=""></option>
      </select>
    </div></td>
   <td><div id="inputName">Photo File:</div></td>
    <td><div id="formInputsFiles">
      <input type="file" value="" />
      </div></td>
    </tr>
  <tr>
    <td><div id="inputName">ID Card:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    <td><div id="inputName">Signature File:</div></td>
    <td><div id="formInputsFiles">
      <input type="file" value="" />
      </div></td>
  </tr>
  <tr>
    <td><div id="inputName">Ref No:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    <td><div id="inputName">No of Children:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
  </tr>
    <tr>
    <td><div id="inputName">Phone Number:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    <td><div id="inputName">No of Orphan:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
  </tr>
  <tr>
    <td><div id="inputName">Group Leader:</div></td>
    <td><div id="inputChecbox"><input type="checkbox" ></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>

</div>
</div>

<div style="margin:20px;"></div>

<div id="table_results_members" style="width:700px;">
      <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:800px;">
          <tbody>
            <tr>
              <th width="88"><div id="datatableColcontent">Name</div></th>
              <th width="123"><div id="datatableColcontent">Postal Address</div></th>
              <th width="101"><div id="datatableColcontent">Designation</div></th>
              <th width="138"><div id="datatableColcontent">Principal Signatory</div></th>
              <th width="75"><div id="datatableColcontent">Photo File</div></th>
              <th width="100"><div id="datatableColcontent">Signatory File</div></th>
              <th width="106"><div id="datatableColcontent">Signatory Limit</div></th>
            </tr>
          
            <tr  id="d" class="rowEven">
           
            </tr>
            <tr id="d"  class="rowOdd">
             
              <td></td>
              <td id="name1" scope="row"></td>
              <td id="type1"></td>
              <td id="type1">&nbsp;</td>
              <td id="type1"></td>
              <td id="type1"></td>
              <td id="type1"></td>
            </tr>
          </tbody>
        </table>
        </div>

<div id="listButs_pt" style="position:absolute; left: 714px; top: 306px;">
      <input type="submit" value="ADD" />
      <br />
      <input type="submit" value="UPDATE" />
      <br />
      <input type="submit" value="DELETE" />
      <br />
      <input type="submit" value="CLOSE"  id="closeBu"/>
      </div>
      
</div>