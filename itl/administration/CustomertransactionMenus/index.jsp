<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/pops.js"></script>
<script src="administration/jlib/popFrameQuery.js"></script>
<link type="text/css" href="administration/jlib/pop.css" rel='stylesheet'>


<div id="body_general">

<div id="accounttile">Customer Transactions Menus
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




<div style="margin-left:40px; height:auto; width:700px;   position:relative">

<div>

<table width="399" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  <tr>
    <td width="399" valign="top">
      <table width="679" border="0" cellpadding="0" cellspacing="0" style="padding:5px;" >
        <tr>
          <td width="242"><div id="inputName" style="text-align:left">Transaction Type:</div></td>
          <td width="233"><div id="formInputs">
            <select name="select" >
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div></td>
          <td width="204" rowspan="6" valign="top"><div id="listButs_pt" style="margin-left:-90px;">
      <input type="submit" value="ADD" />
      <br />
      <input type="submit" value="UPDATE" />
      <br />
      <input type="submit" value="DELETE" />
      <br />
       <input type="submit" value="CLOSE" />
      <br />
      </div></td>
          </tr>
        <tr>
          <td width="242"><div id="inputName" style="text-align:left">Transaction Menu:</div></td>
          <td width="233"><div id="formInputs">
            <input name="text" type="text" value=""  style="width:200px;"/>
          </div></td>
          </tr>
        <tr>
          <td width="242"><div id="inputName" style="text-align:left">Debit GL A/C No.:</div></td>
          <td><div id="formInputs" style="height:25px;">
            <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/>
            <input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:2px;"/>
            <button style="padding:1px; float:left; margin-left:2px;" class="cusSet" id="ser1">
            <img src="customerManagement/image/searchIcone.png"  /></button>
          </div></td>
          </tr>
        <tr>
          <td width="242"><div id="inputName" style="text-align:left">Credit GL A/C No.:</div></td>
          <td><div id="formInputs" style="height:25px;">
            <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/>
            <input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:2px;"/>
            <button style="padding:1px; float:left; margin-left:2px;" class="cusSet"><img src="customerManagement/image/searchIcone.png"  /></button>
          </div></td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Trx Code:</div></td>
          <td width="233"><div id="formInputs">
            <input name="text" type="text" value="" />
          </div></td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Default Transaction Amount:</div></td>
          <td width="233"><div id="formInputs">
            <input name="text" type="text" value="" />
          </div></td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Default Trx Text:</div></td>
          <td colspan="2"><div id="formInputs">
            <input name="text" type="text" value=""  style="width:300px"/>
          </div></td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Disable Voucher No./Cheque No.:</div></td>
          <td width="233"><input type="checkbox"  /></td>
          <td width="204">&nbsp;</td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Print Receipt:</div></td>
          <td width="233"><input type="checkbox"  /></td>
          <td width="204">&nbsp;</td>
          </tr>
            <tr>
          <td width="242"><div id="inputName" style="text-align:left">Receipt Layout:</div></td>
          <td width="233"><div id="formInputs">
            <select name="select" >
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div></td>
          <td width="204">&nbsp;</td>
          </tr>
        </table>
       </td>
  </tr>
</table>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:600px; margin-left:30px; margin-top:2px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:600px;height:130px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:560px;">
          <tbody>
            <tr>
              <th width="62"><div id="datatableColcontent">Menu Description</div></th>
              <th width="49"><div id="datatableColcontent">Menu Item</div></th>
              <th width="64"><div id="datatableColcontent">user Right?</div></th>
              </tr>
            <tr  id="d" class="rowEven"></tr>
            <tr id="d"  class="rowOdd">
              <td></td>
              <td id="name1" scope="row"></td>
              <td id="type1"></td>
            </tr>
            </tbody>
          </table>
        </div>
    </td>
  </tr>
</table>
<table width="399" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  <tr>
    <td width="399" valign="top">
      <table width="679" border="0" cellpadding="0" cellspacing="0" style="padding:5px;" >
        <tr>
          <td width="262"><div id="inputName" style="text-align:left">Allow Withdrawal of Uncleared Balance:</div></td>
          <td width="213"><input type="checkbox"  /></td>
          <td width="204" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td width="262"><div id="inputName" style="text-align:left">Withdrawal Commision - Flat Amount:</div></td>
          <td><div id="formInputs" style="height:25px;">
            <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/>
            <input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:2px;"/>
            
            </div></td>
          <td width="204" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="262"><div id="inputName" style="text-align:left">Commssion GL A/C No.:</div></td>
          <td><div id="formInputs" style="height:25px;">
            <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/>
            <input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:2px;"/>
            
          </div></td>
          <td width="204" valign="top">&nbsp;</td>
          </tr>
        </table>
       </td>
  </tr>
</table>
</div>







