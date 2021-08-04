<script src="endofperiod/jlib/menulib.js"></script>
<script src="endofperiod/jlib/normarizr.js"></script>
<script src="ext/disableEnableClass.js"></script>
<script src="ext/eventTogleClass.js"></script>


<div id="body_general">

<div id="accounttile">Bank Reconciliation
<span id="close"><img src="endofperiod/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<div  class="dialog"  id="d11" >
<div id="indidual_general">


<table width="589" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  
  
    <tr>
      <td width="260"><div id="inputName" style="text-align:left">Transaction Date From:</div></td>
      <td width="176"><div id="formInputs">
          <input name="text" type="text" value="" />
      </div></td>
      <td width="153" rowspan="2" valign="top">
	  
	  <div id="butoss">
       <input type="submit" value="Filter" style=" height: 30px; width: 70px;"/></div>	  </td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Transaction Date To:</div></td>
    <td><div id="formInputs">
        <input name="text" type="text" value="" />
    </div></td>
    </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">Bank Account:</div></td>
       <td><div id="formInputs_readonly">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
       <td>&nbsp;</td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Branch:</div></td>
       <td><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
       <td>&nbsp;</td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Close Balance as Per Bank Statement:</div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
       <td>&nbsp;</td>
      </tr>
</table>
<div id="butoss" style=" margin-left:30px; margin-top:28px;">
<button><img src="endofperiod/image/savebuttons.png" /> Save </button> 
 </div>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:530px; margin-left:30px; margin-top:10px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:530px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:530px;">
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
<table width="686" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; margin-top:15px;">
  
  
    <tr>
      <td width="215"><div id="inputName" style="text-align:left">Closing Bank (in Bank):</div></td>
      <td width="149"><div id="formInputs_readonly">
        <input name="text2" type="text" value="" readonly="readonly"/>
      </div></td>
      <td width="117">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Un-reconciled Transaction (DR):</div></td>
    <td><div id="formInputs_readonly">
        <input name="text2" type="text" value=""  readonly="readonly"/>
    </div></td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">Un-reconciled Transaction (CR):</div></td>
       <td><div id="formInputs_readonly">
           <input name="text2" type="text" value="" readonly="readonly"/>
       </div></td>
       <td><div id="inputName" style="text-align:left">Report Order by:</div></td>
       <td width="120"><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
       <td width="85" rowspan="2">  <div id="butoss">
       <button><img src="endofperiod/image/print.png" /> Print</button></div></td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Computer Account Balance :</div></td>
       <td><div id="formInputs_readonly">
           <input name="text2" type="text" value="" readonly="readonly"/>
       </div></td>
       <td><div id="inputName" style="text-align:left">Trx Type:</div></td>
       <td><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Net Charges:</div></td>
       <td><div id="formInputs_readonly">
           <input name="text2" type="text" value="" readonly="readonly"/>
       </div></td>
       <td>&nbsp;</td>
       <td colspan="2">&nbsp;</td>
      </tr>
</table>
</div>
<div style="margin-bottom:40px;"></div>



