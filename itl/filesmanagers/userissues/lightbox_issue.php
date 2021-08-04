
<?php 
ini_set('max_execution_time', 0);
  require '../../dbconfig/db.php';
  require '../../query/users.php';

  $db   = new db();
  $conn = $db->connect();

  $issues = $_POST['issues'];
  $id = $_POST['id'];

?>

<div style="height:450px;">
<table width="406" border="0" style="width:400px;">
<tr>
<td width="400" height="392" align="left" valign="top">
  <table width="417" border="0" cellpadding="0" cellspacing="0"  style="width:300px;">
    <tr>
  <?php 
            $sn = 0; 
            $stm = $conn->prepare(DbQuery::getAllIssue());
            $stm->execute();
            while($stmp = $stm->fetch()){
        ?>
          <td width="417"><div id="inputName" style="text-align:left">
            <input  <?php if (!(strcmp($stmp['id'],$issues))) {echo "checked=\"checked\"";} ?> 
            name="rd" type="radio" value="<?php echo $stmp['id'] ?>" class="issue_vals" lang="<?php echo $stmp['name'] ?>" /> 
            <?php echo $stmp['name'] ?></div></td>
          </tr>
    <?php 
           }
          ?>
  </table>
</td>
</tr>
</table>
<input type="hidden" value="<?php echo $_POST['id'] ?>" class="mid" />
<div id="butoss" style=" margin-left:10px; margin-top:20px; margin-bottom:20px;" class="butoss_issues">
<button><img src="administration/image/savebuttons.png" /> Save</button>
</div>
</div>
