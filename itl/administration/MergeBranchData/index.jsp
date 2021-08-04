<script src="administration/jlib/normarizr.js"></script>
<script src="administration/jlib/menulib.js"></script>


<div id="body_general">
<div id="accounttile">Merge Branch Data 
<span id="close"><img src="administration/jlib/cancel_icon.png"  /></span>
</div>


<div style="margin-left:40px; height:auto; width:700px;   position:relative">
<br />
<br />
<br />
<br />
<div>
<table width="476" border="1" style="padding:10px; padding-top:20px;">
             <tr>
              <td width="114"></td>
              <td width="346"><div id="inputName" style="text-align:left; margin-left:5px;">Select Branch Data:</div></td>
              
            </tr>
             <tr>
               <td></td>
               <td width="346"><div id="formInputsFiles" style="position:relative">
                 <input type="file" value="" style="width:300px;"/>
                 <div id="listButs_pt" style="position:absolute; left: 217px; top: -26px;">
      <input type="submit" value="ADD" />
      <br />
      <input type="submit" value="DELETE" />
      <br />
                 </div>
               </div></td>
             </tr>
          </table>

<table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; border: solid 1px #E5E5E5; width:500px; margin-left:120px; margin-top:40px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:500px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:500px;">
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
          <div id="butoss" style=" margin-left:120px; margin-top:5px;">  <input type="submit" value="Ok"/> <input type="submit" value="Close"/></div>
</div>







