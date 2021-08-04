<?php session_start(); ?>
<?php
if (isset($_SESSION['NTY3ODk3NDM0NTY3ODkw'])) {

	print "<script>";
	print "window.location.href='console'";
	print "</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Mobile Trader 3</title>
	<link rel="stylesheet" type="text/css" href="ext/addex.css" />
	<script src="ext/jquery.js"></script>
	<script src="ext/jquery-1.10.2.min.js"></script>
	<script src="ext/jquery-u.js"></script>
	<script src="filesmanagers/jlib/normarizr.js"></script>
	<script src="ext/alertdialog.js"></script>
	<link rel="stylesheet" type="text/css" href="ext/jquerycss.css" />

<body id="appConteiners">
	</head>

	<div id="body_container">
		<div id="body_container_login">
			<div id="left"></div>
			<div id="right">
				<form id="formUserAuth">
					<table width="328" border="1" cellpadding="4" cellspacing="4" id="table_id">
						<tr>
							<td width="117">
								<div id="formtitle">User Name:</div>
							</td>
							<td width="195">
								<div id="formtitle_input"><input type="text" name="login_userName" class="login_userName" /></div>
							</td>
						</tr>
						<tr>
							<td>
								<div id="formtitle">Password:</div>
							</td>
							<td>
								<div id="formtitle_input"><input type="password" name="login_userPass" class="login_userPass" /></div>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<div id="submitButton"><input type="submit" value="Login" id="logB">
									<img src="ext/rot_small.gif" id="loaders">
								</div>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>

	<div id="body_footer">
		<div id="body_footer_copy">
			Sales App<br>
			Copyright © <script>
				document.write(new Date().getFullYear());
			</script>. All rights reserved.
		</div>
	</div>
</body>

</html>