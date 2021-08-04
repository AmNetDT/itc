<script src="../../editjointAccount/jlib/menulib.js"></script>
<script src="../../editjointAccount/jlib/pop.js"></script>
<script src="../../editjointAccount/jlib/mempop.js"></script>
<script src="../../editjointAccount/jlib/normarizr.js"></script>


<div id="body_general">
<div id="accounttile">Edit Joint Group Client :: Search Customer Details (by Name, NUBAN Code, A/C No & BVN.)
<span id="close"><img src="../../editjointAccount/jlib/cancel_icon.png"  /></span>
</div>
 



<div  class="dialog"  id="d11" style="margin-top:20px;">
<div id="indidual_general">
<div id="uppers">


<div id="search_penel">
<table width="726" border="1">
  <tr>
    <td width="171"><div id="seDES"><select>
    <option>Select Search Parameter</option>
    <option>First Name</option>
    <option>Last Name</option>
    <option>Middle Name</option>
    <option>BVN</option>
    <option>A/C No.</option>
    <option>NUBAN Code.</option>
    <option>Phone Number</option>
     <option>ATM CARD Number</option>
    </select></div></td>
    <td width="306"><div id="formInputsSearch" >
                <input type="text" value="" style="width:350px;"/>
              </div></td>
    <td width="227"><div><button id="saech_bottons">Search</button></div></td>
  </tr>
</table>

</div> 
<br>
<div id="table_results_members" style="width:700px; margin-top:10px; height:200px; margin-bottom:0px; margin-left:17px;">
      <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:700px;">
          <tbody>
            <tr>
              <th width="108"><div id="datatableColcontent">Branch</div></th>
              <th width="134"><div id="datatableColcontent">GL A/C No.</div></th>
              <th width="94"><div id="datatableColcontent">A/C No.</div></th>
              <th width="161"><div id="datatableColcontent">Name</div></th>
              <th width="148"><div id="datatableColcontent">Postal Address</div></th>
              <th width="127"><div id="datatableColcontent">NUBAN Code</div></th>
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
  <div style="padding:10px; background:#EEEEEE ;border: solid 1px #E5E5E5; width:680px; margin-left:17px;"></div>
</div>




