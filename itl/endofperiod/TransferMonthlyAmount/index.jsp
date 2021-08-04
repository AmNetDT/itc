<script src="endofperiod/jlib/menulib.js"></script>
<script src="endofperiod/jlib/normarizr.js"></script>
<script src="ext/disableEnableClass.js"></script>
<script src="ext/eventTogleClass.js"></script>


<div id="body_general">

<div id="accounttile">Transfer Monthly Amount
<span id="close"><img src="endofperiod/jlib/cancel_icon.png"  /></span>
</div>


<div id="fix_pabePanel">

<div class="menu-wrapper">
               <ul>
               
                <li class="" > 
                 <a href="javascript:void(0)"  class="actives"     id="d1" lang="af" xml:lang="af"><span class="tab"><span>Transfer to Customer Account</span> </span> </a> 
                </li>
              
                <li class="" > 
                 <a href="javascript:void(0)"  class="noneactives"  id="d2" lang="af" xml:lang="af"><span class="tab"><span>Transfer to Loan & Savings</span></span></a>
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






<div  class="dialog"  id="d13" style="display:none">
<div id="indidual_general">


<table width="520" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  
  
    <tr>
      <td width="205"><div id="inputName" style="text-align:left">Savings Product:</div></td>
      <td width="315"><div id="formInputs">
          <select name="select" style="width:110px;">
            <option value=""></option>
          </select>
      </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Last Date of Reporting Month:</div></td>
    <td><div id="formInputs">
        <input name="text" type="text" value="" />
    </div></td>
  </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">Branch:</div></td>
       <td width="315"><div id="formInputs_readonly">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Cashier/Teller No.:</div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Debit GL &amp; A/C No.: </div></td>
       <td><div id="formInputs_readonly" style="height:25px;">
           <input type="text" value=""  style="width:90px; float:left;" readonly="readonly"/>
           <input type="text" value=""  style="width:55px; float:left; margin-left:2px;" readonly="readonly"/>
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Transaction Code: </div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Text: </div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" style="width:250px;"/>
       </div></td>
      </tr>
</table>
<table width="572" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
	   <tr>
       <td><div id="butoss" style=" margin-top:10px;">
	   <button> Compute </button> 
	   <button><img src="endofperiod/image/savebuttons.png" /> Save </button> 
 <button><img src="endofperiod/image/print.png" /> Print </button> 
 <button> Close </button>
</div></td>
       </tr>
</table>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:550px; margin-left:30px; margin-top:10px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:550px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:550px;">
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
<table width="572" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
	   <tr>
         <td width="107"><div id="inputName" style="text-align:left">Total Amount: </div></td>
         <td width="465"><div id="formInputs_readonly" style="height:25px;">
           <input type="text" value=""  style="width:90px; float:left;" readonly="readonly"/>
       </div></td>
      </tr>
</table>
</div>
</div>



<div  class="dialog"  id="d11" >
<div id="indidual_general">


<table width="520" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  
  
    <tr>
      <td width="205"><div id="inputName" style="text-align:left">Savings Product:</div></td>
      <td width="315"><div id="formInputs">
          <select name="select" style="width:110px;">
            <option value=""></option>
          </select>
      </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Last Date of Reporting Month:</div></td>
    <td><div id="formInputs">
        <input name="text" type="text" value="" />
    </div></td>
  </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">Branch:</div></td>
       <td width="315"><div id="formInputs_readonly">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Cashier/Teller No.:</div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Debit GL &amp; A/C No.: </div></td>
       <td><div id="formInputs_readonly" style="height:25px;">
           <input type="text" value=""  style="width:90px; float:left;" readonly="readonly"/>
           <input type="text" value=""  style="width:55px; float:left; margin-left:2px;" readonly="readonly"/>
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Credit GL &amp; A/C No.: </div></td>
       <td><div id="formInputs_readonly" style="height:25px;">
           <input type="text" value=""  style="width:90px; float:left;" readonly="readonly"/>
           <input type="text" value=""  style="width:55px; float:left; margin-left:2px;" readonly="readonly"/>
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Transaction Code: </div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Text: </div></td>
       <td><div id="formInputs">
           <input name="text" type="text" value="" style="width:250px;"/>
       </div></td>
      </tr>
</table>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:550px; margin-left:30px; margin-top:10px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:550px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:550px;">
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
<table width="572" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
	   <tr>
       <td width="364"><div id="butoss" style=" margin-top:10px;">
 <button><img src="endofperiod/image/savebuttons.png" /> Save </button> 
 <button> Close </button>
</div></td>
       <td width="117"><div id="inputName" style="text-align:left">Total Amount: </div></td>
       <td width="91"><div id="formInputs_readonly" style="height:25px;">
           <input type="text" value=""  style="width:90px; float:left;" readonly="readonly"/>
       </div></td>
      </tr>
</table>
</div>
</div>


<div style="margin-bottom:40px;"></div>



