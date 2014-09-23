<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">       
    <title>Upload Profile Data</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
    <script type="text/javascript"></script>
    <script src="jquery.validate.js"></script>
</head>

<body>
<?php
if (isset($_REQUEST['action'])) { 
    $action = $_REQUEST['action'];
} else { 
    $action = "";
}

if ($action == 'createProvdrProfile') {

if (isset($_REQUEST['provdrLogo'])) { 
    $provdrLogo = $_REQUEST['provdrLogo'];
	$folder = “uploads/pvdrLogos/”;
	if (is_uploaded_file($HTTP_POST_FILES['provdrLogo']['tmp_name']))  {   
    if (move_uploaded_file($HTTP_POST_FILES['provdrLogo']['tmp_name'], $folder.$HTTP_POST_FILES['provdrLogo']['name'])) {
         echo 'Logo uploaded.';
       } else {
         echo 'Logo was not uploaded.';
	   } 
}
}

if (isset($_REQUEST['provdrImgs'])) { 
    $provdrImgs = $_REQUEST['provdrImgs'];
$folder = “uploads/provdrImgs/”;
if (is_uploaded_file($HTTP_POST_FILES['provdrImgs']['tmp_name']))  {   
    if (move_uploaded_file($HTTP_POST_FILES['provdrImgs']['tmp_name'], $folder.$HTTP_POST_FILES['provdrImgs']['name'])) {
         echo 'File uploaded.';
       } else {
         echo 'File was not uploaded.';
	   } 
}
}


// php code for writing data to database goes on this page. If successful view of provider profile page displayed. //
 
header('Location: viewProfile.php'); 
       
}

if ($action == 'createOffrngProfile') {

if (isset($_REQUEST['offrngImg'])) { 
    $provdrLogo = $_REQUEST['offrngImg'];
	$folder = “uploads/offrngImgs/”;
	if (is_uploaded_file($HTTP_POST_FILES['offrngImg']['tmp_name']))  {   
    if (move_uploaded_file($HTTP_POST_FILES['offrngImg']['tmp_name'], $folder.$HTTP_POST_FILES['offrngImg']['name'])) {
         echo 'Image uploaded.';
       } else {
         echo 'Image was not uploaded.';
	   } 
}
}

// php code for writing data to database goes on this page. If successful view of offering profile page displayed. //
 
header('Location: viewOffrng.php'); 

?>

</body>
</html>