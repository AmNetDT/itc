<script src="customerManagement/jlib/menulibR.js"></script>
<script src="customerManagement/jlib/mempop.js"></script>
<script src="customerManagement/jlib/normarizr.js"></script>
<script src="customerManagement/jlib/curlab.js"></script>
<script src="customerManagement/jlib/curFormat.js"></script>
<link type="text/css" href="customerManagement/jlib/pop.css" rel='stylesheet'>

<div id="body_general">
<div id="accounttile">Cheque Registration
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="550" border="1" style="border-bottom: solid 1px #E5E5E5; padding-bottom:7px; margin-bottom:5px;">
            <tr>
              <td width="180"><div id="inputName">Savings Products:</div></td>
              <td width="354"><div id="formInputs">
                <select name="select">
                  <option value=""></option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td width="180"><div id="inputName">Branch:</div></td>
              <td width="354"><div id="formInputs">
                <select name="select">
                  <option value=""></option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td><div id="inputName">GL No. &amp; A/C No.:</div></td>
              <td><div id="formInputs" style="width:300px;">
                <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/><input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:5px;"/> <button style="float:left; margin-left:5px;"  class="cusSet"><img src="customerManagement/image/searchIcone.png"  /></button></div></td>
            </tr>
          </table>
<table width="550" border="1" style=" padding-bottom:7px; margin-bottom:5px;">
  <tr>
    <td width="180"><div id="inputName">Name:</div></td>
    <td width="354"><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Postal Address:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
</table>



<div class="menu-wrapper" style="margin-top:10px; width:800px; margin-left:30px">
                <ul>
                  <li class="" > <a href="javascript:void(0)"  class="actives"  id="d1" lang="as" xml:lang="as"> <span class="tab"> <span>Cheque Book Issue</span> </span> </a> </li>
                  
                   <li class="" > <a href="javascript:void(0)"  class="noneactives"  id="d2" lang="as" xml:lang="as"> <span class="tab"> <span>Cheque Stop Order</span> </span> </a> </li>
    </ul>
  </div>
  
 
<div style="margin-top:20px; text-align:left">
<div id="r1" class="r1_tablePanel">
<table width="600" border="1">
  <tr>
    <td width="115"><div id="inputName">Cheque No.:</div></td>
    <td width="170"><div id="formInputs"><input type="text" value=""/></div></td>
    <td width="115"><div id="inputName">Leaflets No.:</div></td>
    <td width="172"><div id="formInputs"><input type="text" value="" /></div></td>
  </tr>
  <tr>
    <td><div id="inputName">Cheque No. to:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    <td><div id="inputName">Collected by:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
  </tr>
  <tr>
    <td><div id="inputName">Issue Date:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="810" border="1">
  <tr>
    <td width="800"><div id="table_results_members" style="width:700px;">
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
    </div></td>
    </tr>
</table>
</div>



<div id="r2" class="r1_tablePanel" style="display:none" >
<table width="600" border="1" >
  <tr>
    <td width="115"><div id="inputName">Cheque No.:</div></td>
    <td width="170"><div id="formInputs"><input type="text" value=""/></div></td>
    <td width="115"><div id="inputName">Message:</div></td>
    <td width="172"><div id="formInputs">
      <input type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Issue Date:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div id="inputName">Amount:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value=""  id="currencyMoneys"/>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="200" border="1">
  <tr>
    <td><div id="table_results_members" style="width:700px;">
      <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:800px;">
          <tbody>
            <tr>
              <th width="88"><div id="datatableColcontent">Cheque No</div></th>
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
        </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
<div id="listButs_pt" style="position:absolute; left: 756px; top: 475px;" >
  <input type="submit" value="ADD" />
  <br />
  <input type="submit" value="UPDATE" />
  <br />
  <input type="submit" value="DELETE" />
  <br />
  <input type="submit" value="CLOSE" />
</div>
</div> 
              
</div>






