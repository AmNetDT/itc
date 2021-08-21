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


$map_ouelt_id = $_POST['id'];
$id = $_POST['userid'];
?>

<form class="map_outlet_Serialis">
  <div style="margin:auto; padding:auto;">
    <table>

      <tr>

        <td width="157">
          <div id="inputName">Visit Route</div>
        </td>
        <td width="251">
          <div id="formInputs">
            <select name="routeid" id="routeid">
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
                  <input type="checkbox" name="monday" id='monday' value="Monday">Monday
                </td>
                <td style="width:100px">
                  <input type="checkbox" name="tuesday" id="tuesday" value="Tuesday">Tuesday
                </td>
              </tr>
              <tr>
                <td><input type="checkbox" name="wednesday" id="wednesday" value="Wednesday">Wednesday</td>
                <td><input type="checkbox" name="thusday" id="thusday" value="Thusday">Thusday</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="friday" id="friday" value="Friday">Friday</td>
                <td><input type="checkbox" name="saturday" id="saturday" value="Saturday">Saturday</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="sunday" id="sunday" value="Sunday">Sunday</td>
              </tr>
            </table>
          </fieldset>
        </td>

      </tr>
      <tr>
        <td>
          <input type="hidden" name="map_ouelt_id" id="map_ouelt_id" value="<?php echo $map_ouelt_id ?>" />
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
          <div id="butss" style=" margin-left:10px; margin-top:20px; margin-bottom:20px;" class="savemapoutlet">
            <button><img src="administration/image/savebuttons.png" /> Save</button>
          </div>
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