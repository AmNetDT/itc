<script src="customerManagement/jlib/menulib.js"></script>
<script src="customerManagement/jlib/pop.js"></script>
<script src="customerManagement/jlib/mempop.js"></script>
<script src="customerManagement/jlib/normarizr.js"></script>
<link type="text/css" href="customerManagement/jlib/pop.css" rel='stylesheet'>


<div id="body_general">
<div id="accounttile">Standing Order Suppervision
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="650" border="1" style="position:relative;border-bottom: solid 1px #E5E5E5; padding-bottom:7px; margin-bottom:5px;">
            <tr>
              <td width="200"><div id="inputName">Savings products:</div></td>
              <td width="303"><div id="formInputs">
                <select name="select">
                  <option value=""></option>
                </select>
              </div></td>
              <td width="125">&nbsp;</td>
            </tr>
            <tr>
              <td width="200"><div id="inputName">Branch:</div></td>
              <td width="303"><div id="formInputs">
                <select name="select">
                  <option value=""></option>
                </select>
              </div></td>
              <td width="125">&nbsp;</td>
            </tr>
            <tr>
              <td><div id="inputName">GL No. &amp; A/C No.:</div></td>
              <td><div id="formInputs" style="width:300px;">
                <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/><input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:5px;"/> <button style="float:left; margin-left:5px;"  class="cusSet"><img src="customerManagement/image/searchIcone.png"  /></button></div></td>
              <td>&nbsp;</td>
            </tr>
          </table>
<table width="650" border="1" >
  <tr>
    <td width="200"><div id="inputName">Name:</div></td>
    <td width="303"><div id="formInputs"><input type="text" value="" /></div></td>
    <td width="125" rowspan="7" align="left" valign="top">
    <div id="listButs">
      <input type="submit" value="Authorise" />
      <br />
      <input type="submit" value="Delete" />
      <br />
      <input type="submit" value="Close" />
      <br />
    </div>
      </td>
    </tr>
  <tr>
    <td><div id="inputName">Postal Address:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  
  <tr>
  <tr>
    <td><div id="inputName">Loan Repayment: </div></td>
    <td><div id="inputChecbox"><input type="checkbox" ></div></td>
    </tr>
  <tr>
  <tr>
    <td><div id="inputName">Credit GL No. &amp; A/C No: </div></td>
    <td><div id="formInputs" style="width:300px;">
                <input type="text" value="" readonly="readonly" style="width:70px; float:left;"/><input type="text" value="" readonly="readonly" style="width:70px; float:left; margin-left:5px;"/> <button style="float:left; margin-left:5px;"  class="cusSet"><img src="customerManagement/image/searchIcone.png"  /></button></div></td>
    </tr>

  <tr>
    <td><div id="inputName">Loan Cycle: </div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Amount: </div></td>
    <td><div id="formInputs">
      <input name="text2" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Trx Date:</div></td>
    <td><div id="formInputs">
      <input name="text2" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Remote Branch:</div></td>
    <td><div id="formInputs">
                <select name="select">
                  <option value=""></option>
                </select>
              </div></td>
  </tr>
 
</table>

<div id="table_results_members" style="width:650px; margin-top:10px; height:200px; margin-bottom:0px; margin-left:17px;">
      <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:650px;">
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
</div>




