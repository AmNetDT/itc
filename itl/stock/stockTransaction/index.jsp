<script src="stock/jlib/menulib.js"></script>
<script src="stock/jlib/normarizr.js"></script>

<div id="body_general">
<div id="accounttile">Stock Transactions (in/out)
<span id="close"><img src="stock/jlib/cancel_icon.png"  /></span>
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div  class="dialog"  id="d11" >
<div id="indidual_general">
<div id="uppers">
<table width="745" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165"><div id="inputName">Stock Item:</div></td>
    <td width="209"><div id="formInputs">
      <select name="select">
        <option value="Female"></option>
        </select>
    </div></td>
    <td><div id="inputName">Text:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">From Location:</div></td>
    <td width="209"><div id="formInputs">
      <select name="select">
        <option value="Female"></option>
      </select>
    </div></td>
    <td width="221"><div id="inputName">Officer:</div></td>
    <td width="150"><div id="formInputs">
      <select name="select2">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">To Location:</div></td>
    <td width="209"><div id="formInputs">
      <select name="select">
        <option value="Female"></option>
      </select>
    </div></td>
    <td><div id="inputName">Quantity:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Transaction Date:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td><div id="inputName">In/Out (Price):</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  
  
    <tr>
      <td><div id="inputName">Requisition No: </div></td>
      <td><div id="formInputs">
        <input name="text" type="text" value="" />
      </div></td>
    <td><div id="inputName">Balance (Qty):</div></td>
    <td><div id="formInputs">
      <input name="text2" type="text" value="" />
    </div></td>
    </tr>
  
  
  <tr>
    <td><div id="inputName">ID No.:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td><div id="inputName">Balance (Price):</div></td>
    <td><div id="formInputs">
      <input name="text2" type="text" value="" />
    </div></td>
    </tr>
</table>
<table width="800" border="1" id="membrs_tables" style="background:#F7F7F3; border: solid 1px #E5E5E5; margin-top:10px;">
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
<div id="butoss" style="margin-left:30px;"><input type="submit" value="Clear"/> <input type="submit" value="Unclear"/> <button><img src="customerManagement/image/savebuttons.png" /> Save </button> 
       <input type="submit" value="Close"/></div>

</div>



