<!Doctype html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<title>Verify Login</title>
</head>
  <body>
       <?php
	   if (isset ($_REQUEST['loginUsrname'],$_REQUEST['loginUsrpasswrd'])) {
    		$loginUsrname = $_REQUEST['loginUsrname'];
			$loginUsrpasswrd = $_REQUEST['loginUsrpasswrd'];
       } else { 
    		$loginUsrname == "";
			$loginUsrpasswrd == "";
	   }
 	   
	   /* function to retreive $userName and $userPassword goes here */
	   
	   if ($loginUsrname == $userName && $loginUsrpasswrd == $userPassword) {
   			 header('Location: login.php'); 
       } else {
		   	echo('The username or password you entered is incorrect'); 
}
?>          
  </body>
</html>

      