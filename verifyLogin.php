<?php
	require './database/user/functions.php';
	if (isset ($_REQUEST['loginUsrname'],$_REQUEST['loginUsrpasswrd'])) {
		$loginUsrname = $_REQUEST['loginUsrname'];
		$loginUsrpasswrd = $_REQUEST['loginUsrpasswrd'];
		$userDS = getUserByEmailPswd( $loginUsrname, $loginUsrpasswrd );
		
		if ($userDS) {
			if (mysql_num_rows($userDS) == 0) {
				$msg = "The username or password you entered is incorrect."; 
			} else {
				header('Location: login.php');
			}
		} else {
			$msg = "There has been an error validating your account."; 
		}
	} else { 
		$loginUsrname == "";
		$loginUsrpasswrd == "";
		$msg = "The username or password you entered is incorrect."; 
	}
?>          
<!Doctype html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<title>Verify Login</title>
</head>
  <body>
<?php
	echo $msg;
?>
  </body>
</html>

      