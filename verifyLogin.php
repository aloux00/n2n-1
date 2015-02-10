<?php
	require './database/user/functions.php';
	if (isset ($_REQUEST['email'],$_REQUEST['loginUsrpasswrd'])) {
		$loginEmail = $_REQUEST['email'];
		$loginPassword = $_REQUEST['loginUsrpasswrd'];
		$userDS = getUserByEmailPswd( $loginEmail, $loginPassword );
		
		if ($userDS) {
			if (mysql_num_rows($userDS) == 0) {
				$msg = "The username or password you entered is incorrect."; 
			} else {
				while($row = mysql_fetch_array($userDS)){ 
					foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
					$_SESSION["userId"] = $row['UserId'];  
					$_SESSION["userFirstName"] = $row['FirstName'];  
					$_SESSION["userLastName"] = $row['LastName'];  
					$_SESSION["userRoleId"] = $row['RoleId'];  
					$_SESSION["userEmail"] = $row['Email'];  
					$_SESSION["userPhone"] = $row['Phone'];  
					$_SESSION["userNeighborhoodId"] = $row['NeighborhoodId'];  
					$_SESSION["userIsActive"] = $row['IsActive'];  
				} 
				if ($_SESSION["userIsActive"] == "1") {
					header('Location: login.php');
				} else {
					$msg = "You are not an active user of this application."; 
				}
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
	if (isset($_SESSION["userIsActive"])) {
		$msgLinks = '<p>Please contact the <a href="ReportProblem.html">system administrator</a> for assistance.</p>';
	} else {
		$msgLinks = '<p><a href="index.php">Try again</a></p>';
		$msgLinks .= '<p><a href="forgotPassword.php">Forgot password?</a></p>';
	}
	echo $msgLinks;
?>
  </body>
</html>