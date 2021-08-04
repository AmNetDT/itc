<script src="endofperiod/jlib/menulib.js"></script>
<script src="endofperiod/jlib/normarizr.js"></script>
<script src="ext/disableEnableClass.js"></script>
<script src="ext/eventTogleClass.js"></script>


<div id="body_general">

<div id="accounttile">Loan Repayment Remainder By Sms
<span id="close"><img src="endofperiod/jlib/cancel_icon.png"  /></span>
</div>


<div id="fix_pabePanel">

<div class="menu-wrapper">
               <ul>
               
                <li class="" > 
                 <a href="javascript:void(0)"  class="actives"     id="d1" lang="af" xml:lang="af"><span class="tab"><span>Remainder by SMS</span> </span> </a> 
                </li>
              
                <li class="" > 
                 <a href="javascript:void(0)"  class="noneactives"  id="d2" lang="af" xml:lang="af"><span class="tab"><span>Connection Test</span></span></a>
                </li>
                   
                <li class="" > 
                  <a href="javascript:void(0)"  class="noneactives"  id="d3" lang="af" xml:lang="af"><span class="tab"><span>Edit Text Message</span></span></a>
                </li>
                    
                <li class="" > 
                 <a href="javascript:void(0)"   class="noneactives"  id="d4" lang="af" xml:lang="af"><span class="tab"><span>General Message</span></span></a>
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


<div  class="dialog"  id="d11" >
<div id="indidual_general">


<table width="520" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  
  
    <tr>
      <td width="250"><div id="inputName" style="text-align:left">Minimum Number of Days in Arrears:</div></td>
      <td><div id="formInputs">
          <input name="text" type="text" value="" />
      </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Reporting Date:</div></td>
    <td><div id="formInputs_readonly">
        <input name="text" type="text" value="" readonly="" />
    </div></td>
  </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">Branch:</div></td>
       <td width="270"><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Loan Product:</div></td>
       <td width="270"><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Loan Officer: </div></td>
       <td width="270"><div id="formInputs">
           <select name="select" style="width:110px;">
             <option value=""></option>
           </select>
       </div></td>
      </tr>
</table>
<div id="butoss" style=" margin-left:30px; margin-top:10px;">
<button> Compute </button>
<button><img src="endofperiod/image/print.png" /> Print </button> 
<button> Send </button> 
<button> Close </button> 
<button> => Excel </button> 
<button> => Upload </button> 
 </div>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:550px; margin-left:30px; margin-top:2px;">
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
</div>
</div>


<div  class="dialog"  id="d13"  style="display:none">
<div id="indidual_general">


<table width="521" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
  
  
    <tr>
      <td width="220"><div id="inputName" style="text-align:left">Communication Port:</div></td>
      <td width="206"><div id="formInputs">
          <input name="text" type="text" value="" style="width:70px;" />
      </div></td>
      <td width="95" rowspan="2" valign="top">
	  <div id="butoss" style=" margin-left:5px">
<button> Connect</button>
 </div></td>
    </tr>
  <tr>
    <td><div id="inputName" style="text-align:left">Baud Rate Setttings :</div></td>
    <td><div id="formInputs">
        <input name="text" type="text" value="" style="width:120px;"/>
    </div></td>
    </tr>
     <tr>
       <td><div id="inputName" style="text-align:left">(9600,N,8,1) - Default Value:</div></td>
       <td colspan="2"><div id="formInputs_readonly"></div></td>
     </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Maufactural Information:</div></td>
       <td colspan="2"><div id="formInputs_readonly">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
       <tr>
       <td><div id="inputName" style="text-align:left">Model Information : </div></td>
       <td colspan="2"><div id="formInputs_readonly">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Firmware Information: </div></td>
       <td colspan="2"><div id="formInputs_readonly">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Model Serial Number: </div></td>
       <td colspan="2"><div id="formInputs_readonly">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td><div id="inputName" style="text-align:left">Recipient Model Number: </div></td>
       <td colspan="2"><div id="formInputs">
           <input name="text" type="text" value="" />
       </div></td>
      </tr>
	   <tr>
       <td valign="top"><div id="inputName" style="text-align:left">Text Message: </div></td>
       <td colspan="2"><div id="formInputs">
     <textarea name="" cols="3" rows="3"  id="textareae" ></textarea>
    </div></td>
      </tr>
</table>
<div id="butoss" style=" margin-left:30px; margin-top:10px;">
<button> Send </button>
<button> Close </button> 
 </div>
</div>
</div>

<div  class="dialog"  id="d12" style="display:none">
<div id="indidual_general">


<table width="520" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
	   <tr>
       <td width="220" valign="top"><div id="inputName" style="text-align:left">1. Text Message: </div></td>
       <td width="300"><div id="formInputs">
     <textarea name="" cols="3" rows="3"  id="textareae" ></textarea>
    </div></td>
      </tr>
	    <tr>
       <td width="220" valign="top"><div id="inputName" style="text-align:left">2. Text Message: </div></td>
       <td width="300"><div id="formInputs">
     <textarea name="" cols="3" rows="3"  id="textareae" ></textarea>
    </div></td>
      </tr>
</table>
<div id="butoss" style=" margin-left:30px; margin-top:10px;">
<button> Send </button>
<button> Close </button> 
 </div>
</div>
</div>


<div  class="dialog"  id="d14" style="display:none">
<div id="indidual_general">


<table width="520" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
	    <tr>
          <td><div id="inputName" style="text-align:left">Branch:</div></td>
	      <td><div id="formInputs">
              <input name="text" type="text" value="" />
          </div></td>
      </tr>
	    <tr>
       <td width="220" valign="top"><div id="inputName" style="text-align:left">Text Message: </div></td>
       <td width="300"><div id="formInputs">
     <textarea name="" cols="3" rows="3"  id="textareae" ></textarea>
    </div></td>
      </tr>
</table>
</div>
<div id="butoss" style=" margin-left:30px; margin-top:10px;">
<button> Compute </button>
<button><img src="endofperiod/image/print.png" /> Print </button> 
<button> Send </button> 
<button> Close </button> 
<button> => Excel </button> 
<button> => Upload </button> 
 </div>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:550px; margin-left:30px; margin-top:2px;">
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
</div>

<div style="margin-bottom:40px;"></div>



