<!Doctype html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<title>Redirect</title>
</head>
  <body>
       <?php
	   if (isset($_REQUEST['provideOffrng'])) { 
    		$provideOffrng = $_REQUEST['provideOffrng'];
       } else { 
    		$provideOffrng == "";
	   }
 	   if ($provideOffrng == '1') {
   			header('Location: createProfile.html'); 
       } else {
		    header('Location: home.html'); 
}
?>          
  </body>
</html>

      