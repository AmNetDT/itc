<?php session_start(); ?>
<?php
if (!isset($_SESSION['NTY3ODk3NDM0NTY3ODkw'])) {

  print "<script>";
  print "window.location.href='index'";
  print "</script>";
}
//date_default_timezone_set('Africa/Lagos');
//echo date("h:m:s");
?>
<?php

require 'dbconfig/db.php';
require 'query/users.php';

$db   = new db();
$conn = $db->connect();
$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];

$sys = $conn->prepare(DbQuery::UserCategotyAndPriv());
$sys->execute(array($users_id));
$syscat = $sys->fetch();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Application Name</title>



  <link rel="stylesheet" type="text/css" href="ext/consolehome.css" />
  <link rel="stylesheet" type="text/css" href="ext/forms.css" />
  <link rel="stylesheet" type="text/css" href="ext/console.css" />
  <link rel="stylesheet" type="text/css" href="ext/menu.css" />
  <link rel="stylesheet" type="text/css" href="ext/tree.css" />
  <script src="ext/jquery.js"></script>
  <script src="ext/jquery-1.10.2.min.js"></script>
  <script src="ext/jquery-u.js"></script>
  <script src="ext/tree.js"></script>
  <script src="ext/pageloader.js"></script>
  <script src="ext/jquery-uis.1.10.2.min.js"></script>
  <script src="filesmanagers/jlib/pop.js"></script>
  <script src="filesmanagers/jlib/normarizr.js"></script>
  <link type="text/css" href="filesmanagers/jlib/pop.css" rel='stylesheet'>
  <script src="ext/alertdialog.js"></script>
  <link rel="stylesheet" type="text/css" href="ext/jquerycss.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.1/socket.io.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    $(document).ready(function() {

    })
  </script>
</head>

<body>
  <div id="body_parent_div">


    <div id="header_parent_panels"></div>



    <div id="sidebar">

      <div id="apMenu"><?php echo $syscat['name'] ?></div>
      <input type="hidden" id="regionID_008678" value="<?php echo $syscat['region_id'] ?>" />
      <div id="wrapper">
        <div class="tree">


          <ul>

            <li><a>User Management </a>
              <ul>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/users">
                    Users</a></li>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/userissues">
                    User Issue</a></li>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/sales_route_plan">
                    Route Manager</a></li>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/user_modules">
                    User Module</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/salesmonitor">
                    Stock Keeper</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/outlet_permission">
                    Promo</a></li>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/competition">
                    Competition</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/tokenmanager">
                    Token Manager</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/integrity">
                    Daily Basket Manager</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/outlet_cards">
                    Customer Cards</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/daily_outlet_manager">
                    Daily Outlet Manager</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/inventory">
                    Raise Receivable Item</a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/inventory">
                    Post Receivable Item </a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/ConfirmReceivableItem">
                    Confirm Receivable Item </a></li>

                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/inventory">
                    Return Receivable Item </a></li>
                <li class="_mc"><a href="javascript:void(0)" id="filesmanagers/inventory">
                    Receivable Item History </a></li>
                <li class="_mc">
                  <a href="javascript:void(0)" id="filesmanagers/default_token">
                    Approve Default Token &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="notification_icon" style="padding: 3px 5px;
  border-radius: 100%;
  background: red;
  color: white;">0</span>
                  </a>

                </li>

                <li class="_logout"><a href="javascript:void(0)" id="filesmanagers/outlet_permission">
                    Logout</a></li>
              </ul>
            </li>
        </div>
      </div>
    </div>


    <div id="contentbar">
      <div id="contentbar_inner">

      </div>
    </div>

    <div id="contentbar_footers">
      <div style="margin:auto; margin-top:20px; width:150px; display:none" id="loader_httpFeed"><img src="customerManagement/image/loading.gif" /></div>
    </div>

  </div>
</body>

</html>