<script src="administration/jlib/menulib.js"></script>
<script src="administration/jlib/normarizr.js"></script>



<div id="body_general">

<div id="accounttile">Enter Annual Budget
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div style="margin-left:40px; height:auto; width:700px;   position:relative">

<div>

<table width="399" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px; width:750px;">
  <tr>
    <td width="399" valign="top">
      <table width="504" border="0" cellpadding="0" cellspacing="0" style="width:500px; padding:5px;" >
        <tr>
          <td width="189"><div id="inputName" style="text-align:left">Branch:</div></td>
          <td width="311"><div id="formInputs">
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
          </tr>
        <tr>
          <td width="189"><div id="inputName" style="text-align:left">Budget Year:</div></td>
          <td width="311"><div id="formInputs">
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
          </tr>
        <tr>
          <td width="189"><div id="inputName" style="text-align:left">GL A/C No.:</div></td>
          <td width="311"><div id="formInputs">
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
          </tr>
        <tr>
          <td width="189"><div id="inputName" style="text-align:left">Budgeted Amount:</div></td>
          <td width="311"><div id="formInputs">
            <input name="text" type="text" value="" />
          </div></td>
          </tr>
        </table>
        <div id="listButs_pt" style="position:absolute; left: 434px; top: 8px;">
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
</table>
<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:600px; margin-left:40px; margin-top:40px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:600px;">
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
</div>







