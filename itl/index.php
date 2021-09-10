<?php session_start(); ?>
<?php
if (isset($_SESSION['NTY3ODk3NDM0NTY3ODkw'])) {

	print "<script>";
	print "window.location.href='console'";
	print "</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <title>SaP Dashboard</title><link rel="stylesheet" type="text/css" href="ext/addex.css" />
  <script src="ext/jquery.js"></script>
  <script src="ext/jquery-1.10.2.min.js"></script>
  <script src="ext/jquery-u.js"></script>
  <script src="filesmanagers/jlib/normarizr.js"></script>
  <script src="ext/alertdialog.js"></script>
  <link rel="stylesheet" type="text/css" href="ext/jquerycss.css" />
  <link href="./main.css" rel="stylesheet">
</head>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center my-5 py-5">

      <div class="col-sm-4 pt-3 border radius">

        <div class="card-body px-4 mb-5 text-center">

          <h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill text-warning"
                                viewBox="0 0 16 16">
                                <path
                                    d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                            </svg>
                                
                              SaP Dashboard</h3>
          <form method="POST" action="" autocomplete="off" class="my-5">
            <div class="form-group">
              <label for="username" class="sr-only">Username</label>
              <input type="text" name="login_userName" id="UserId" class="form-control login_userName" placeholder="Username" required/>
              
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="login_userPass" id="password" class="form-control login_userPass" placeholder="Password" required/>
            </div>
            <div class="form-check">
              
              <input type="hidden" name="token" value="" />
            </div>
            
              <button type="submit" id="logB" class="btn btn-danger btn-lg active" style="float: left;">
                Login
              </button>
            <img src="ext/rot_small.gif" id="loaders">
            
          </form>

        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  <div class="fixed-bottom bg-danger text-white p-3">
  
      
    &copy; Saplive <script>
      document.write(new Date().getFullYear());
    </script>
  
  
  </div>
</body>

</html>