<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/normarizr.js"></script>
<script src="administration/jlib/pops.js"></script>
<script src="administration/jlib/popFrameQuery.js"></script>
<link type="text/css" href="administration/jlib/pop.css" rel='stylesheet'>

<div id="body_general">

<div id="accounttile">Penalty Settings
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<div  class="dialog"  id="d11" >
<div id="indidual_general">
<div id="uppers">

<table width="704" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:600px;">
       <tr>
         <td width="247"><div id="inputName" style="text-align:left">Loan Product:</div></td>
         <td width="353"><div id="formInputs">
           <select name="select">
             <option value=""></option>
            </select>
         </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">penalty Calculation:</div></td>
       <td width="353"><div id="formInputs">
         <select name="select" style="width:200px;">
           <option value=""></option>
         </select>
       </div></td>
      </tr>
       <tr>
       <td colspan="2">
       
       </td>
      </tr>
       <tr>
       <td colspan="2"><table width="354" border="0" cellpadding="0" cellspacing="0" style="width:500px; padding:5px; background:#EEEEEE;border: solid 1px #E5E5E5; margin-top:5px;" >
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          Flat Amount Per Day</div></td>
        </tr>
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          Percentage Per Day</div></td>
        </tr>
        <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          Flat Amount Over the Period</div>
         </td>
        </tr>
         <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          PercantageOver the Period</div>
         </td>
        </tr>
        
    </table></td>
      </tr>
       <tr>
       <td colspan="2"><table width="354" border="0" cellpadding="0" cellspacing="0" style="width:500px; padding:5px; background:#EEEEEE;border: solid 1px #E5E5E5; margin-top:5px; margin-bottom:5px;" >
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          On Principal in Arrears</div></td>
        </tr>
      <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          On Principal and Interest in Arrears</div></td>
        </tr>
        <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          On Principal, Interest and Panelty in Arrears</div>
         </td>
        </tr>
         <tr>
        <td width="354"><div id="inputName" style="text-align:left">
          <input name="charges" type="radio" value="Fees &amp; Charges" />
          On Interest in Arrears Only</div>
         </td>
        </tr>
        
    </table></td>
      </tr>
      
       <tr>
       <td><div id="inputName" style="text-align:left">Penalty Flat Amount:</div></td>
       <td><div id="formInputs">
         <input name="text" type="text" value="" />
       </div></td>
      </tr>
        <tr>
       <td><div id="inputName" style="text-align:left">Penalty Percentage (%):</div></td>
       <td><div id="formInputsy" style="height:25px">
         <input type="text" value="" style=" float:left; margin-right:2px;" />
         <button style="padding:1px; float:left" id="popDifInRat">...</button>
       </div></td>
       </tr>
        <tr>
       <td><div id="inputName" style="text-align:left">Grace period in Days:</div></td>
       <td><div id="formInputs">
         <input name="text" type="text" value="" />
       </div></td>
       </tr>
         <tr>
       <td><div id="inputName" style="text-align:left">No of Days After Expiration Date:</div></td>
       <td><div id="formInputs">
         <input name="text" type="text" value="" />
       </div></td>
       </tr>
</table>
<div id="butoss" style=" margin-left:30px; margin-top:28px;"><button ><img src="administration/image/savebuttons.png" /> Save</button> 
 <input type="submit" value="Close"/>
 </div>
</div>
</div>







<div style="margin-bottom:40px;"></div>



