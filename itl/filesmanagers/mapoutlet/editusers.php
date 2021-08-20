<?php session_start(); ?>
<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';



$db   = new db();
$conn = $db->connect();
$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];

$sys = $conn->prepare(DbQuery::UserCategotyAndPriv());
$sys->execute(array($users_id));
$syscat = $sys->fetch();
$region_id = $syscat['region_id'];
$depots_id = $syscat['depots_id'];

$user = $_POST['user'];
$region = $_POST['region'];
$estm = $conn->prepare(DbQuery::usersEditableInfo());
//$estm->execute(array($region));
$e_result = $estm->fetch();
echo $user;

?>

<form class="reg_Serialise_i">
  <div style="margin:auto; padding:auto;">
    <table>
      
      <tr>
        <td><?php 
        
            echo 'User_id<span style="color:red"> '.$user.'</span><br />';
            echo 'Region<span style="color:red"> '.$region . '</span><br />';
            ?></td>
      </tr>
      <tr>

        <td width="157">
          <div id="inputName">Visit Route</div>
        </td>
        <td width="251">
          <div id="formInputs">
            <select name="syscat_u_i" id="syscat_u_i">
              <?php
              $vehicle = $conn->prepare(DbQuery::getUser_route());
              $vehicle->execute();
              while ($vresult = $vehicle->fetch()) {
              ?>

                <option value="<?php echo  $vresult['id'] ?>"><?php echo $vresult['route_id'] ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <fieldset>
            <div id="inputName">Visit Sequence</div>
            <table style="width:200px; margin:20px;">
              <tr>
                <td style="width:100px">
                  <input type="checkbox" name="favorite_pet" value="Monday">Monday
                </td>
                <td style="width:100px">
                  <input type="checkbox" name="favorite_pet" value="Tuesday">Tuesday
                </td>
              </tr>
              <tr>
                <td><input type="checkbox" name="favorite_pet" value="Wednesday">Wednesday</td>
                <td><input type="checkbox" name="favorite_pet" value="Thusday">Thusday</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="favorite_pet" value="Wednesday">Friday</td>
                <td><input type="checkbox" name="favorite_pet" value="Thusday">Saturday</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="favorite_pet" value="Thusday">Sunday</td>
              </tr>
            </table>
          </fieldset>
        </td>

      </tr>
      <tr>
        <td>
          <input type="submit" value="Submit now" />
        </td>
      </tr>
    </table>
</form>
</td>

</tr>

</table>
</td>
</tr>
</table>
</div>
</form>