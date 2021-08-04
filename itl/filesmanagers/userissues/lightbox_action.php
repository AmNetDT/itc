
<?php 
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

$id = $_POST['id'];
$issues = $_POST['issues'];
$actions = $_POST['actions'];
?>

<div style="height:450px;">
<table width="406" border="0" style="width:550px;">
<tr>
<td width="400" height="392" align="left" valign="top">
  <table width="564" border="0" cellpadding="0" cellspacing="0"  style="width:100%">
    <tr>
  <?php 
            $sn = 0; 
            $stm = $conn->prepare(DbQuery::getAllActionPlan());
            $stm->execute();
            while($stmp = $stm->fetch()) {

  ?>
          <td width="564"><div id="inputName" style="text-align:left">
            <input  <?php if (!(strcmp($stmp['id'],$actions))) {echo "checked=\"checked\"";} ?> 
            name="rm" type="radio" value="<?php echo $stmp['id'] ?>" class="actions_vals" lang="<?php echo $stmp['name'] ?>"/> 
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
<input type="hidden" value="<?php echo $issues ?>" class="sids" />
<div id="butoss" style=" margin-left:10px; margin-top:20px; margin-bottom:20px;" class="butoss_actions">
<button><img src="administration/image/savebuttons.png" /> Save</button>
</div>
</div>
