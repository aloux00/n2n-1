<!Doctype html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">       
    <title>Redirect</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>    
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

      