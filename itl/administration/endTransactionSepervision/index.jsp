<script src="administration/jlib/normarizr.js"></script>
<script src="administration/jlib/menulib.js"></script>


<div id="body_general">
<div id="accounttile">End of the Transaction Supervision
<span id="close"><img src="administration/jlib/cancel_icon.png"  /></span>
</div>


<div  class="dialog"  id="d11" >
<div id="indidual_general">
<div id="uppers">
<br />
<br />
<br />
<br />
<br />
<table width="841" border="1">
  <tr>
    <td width="165"><div id="inputName">Branch:</div></td>
    <td width="182"><div id="formInputs">
      <select name="select">
        <option value="Female">002 &nbsp;&nbsp; | &nbsp;&nbsp;0004</option>
        <option value="Female">003 &nbsp;&nbsp; | &nbsp;&nbsp;0004</option>
        <option value="Female">004 &nbsp;&nbsp; | &nbsp;&nbsp;0004</option>
      </select>
    </div></td>
    <td width="248"><div id="inputName">User Name:</div></td>
    <td width="150"><div id="formInputs">
      <select name="select2">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div></td>
    <td width="62">&nbsp;</td>
  </tr>
  <tr>
    <td><div id="inputName">Name:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td><div id="inputName">General Ledger A/C No.:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td align="left"><div id="inputName">
      <input name="Fees&amp;Charges" type="checkbox" value="Fees &amp; Charges" />
      All</div></td>
  </tr>
  <tr>
    <td><div id="inputName">GL No. &amp; A/C No.:</div></td>
    <td><div id="formInputs">
       <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/><input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:5px;"/>
    </div></td>
    <td><div id="inputName">A/C No.:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td align="left"><div id="inputName">
      <input name="Fees&amp;Charges2" type="checkbox" value="Fees &amp; Charges" />
      All</div></td>
  </tr>
  <tr>
    <td><div id="inputName">Session  Date: </div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td><div id="inputName">Voucher No./Cheque No.:</div></td>
    <td><div id="formInputs">
      <input name="text2" type="text" value="" />
    </div></td>
    <td align="left"><div id="inputName">
      <input name="Fees&amp;Charges3" type="checkbox" value="Fees &amp; Charges" />
      All</div></td>
  </tr>
  
  
    <tr>
    <td><div id="inputName">Trx. Date:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td><div id="inputName">Amount:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td colspan="3" rowspan="3" valign="bottom">
    <div id="butoss" style="margin-left:10px; position:relative"><input type="submit" value="Clear"/> <input type="submit" value="Unclear"/> <button><img src="customerManagement/image/savebuttons.png" /> Save </button> 
       <input type="submit" value="Close"/> 
       <input type="submit" value="Filter" style="position:absolute; height: 30px; width: 70px; left: 408px; top: -138px;"/></div>    </td>
    </tr>
  <tr>
    <td><div id="inputName">Voucher No.:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Trx. Posted By:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
</table>
<br />
</div>
<table width="800" border="1" id="membrs_tables" style="background:#F7F7F3; border: solid 1px #E5E5E5;	">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:800px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:800px;">
          <tbody>
            <tr>
              <th width="62"><div id="datatableColcontent">GL A/C No</div></th>
              <th width="49"><div id="datatableColcontent">A/C No</div></th>
              <th width="64"><div id="datatableColcontent">Date Opened</div></th>
              <th width="69"><div id="datatableColcontent">Date Closed</div></th>
              <th width="52"><div id="datatableColcontent">Status</div></th>
              <th width="74"><div id="datatableColcontent">Charges</div></th>
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
              </tr>
            </tbody>
          </table>
        </div>
    </td>
  </tr>
</table>

</div>



