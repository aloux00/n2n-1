<!DOCTYPE html>
<html>
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
/*print_r($_FILES); */
echo "<br>";

if (isset($_REQUEST['action'])) { 
    $action = $_REQUEST['action'];
	echo $action . "<br>";
} else { 
    $action = "";
	echo $action . "<br>";
}

if ($action == 'createProvdrProfile') {
	
	if (isset($_FILES['ProfileLogo']['name'])) {
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["ProfileLogo"]["name"]);
	$extension = end($temp);
	if ((($_FILES["ProfileLogo"]["type"] == "image/gif")
	|| ($_FILES["ProfileLogo"]["type"] == "image/jpeg")
	|| ($_FILES["ProfileLogo"]["type"] == "image/jpg")
	|| ($_FILES["ProfileLogo"]["type"] == "image/pjpeg")
	|| ($_FILES["ProfileLogo"]["type"] == "image/x-png")
	|| ($_FILES["ProfileLogo"]["type"] == "image/png"))
	&& ($_FILES["ProfileLogo"]["size"] < 100000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["ProfileLogo"]["error"] > 0) {
	echo "Return Code: " . $_FILES["ProfileLogo"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["ProfileLogo"]["name"] . "<br>";
    echo "Type: " . $_FILES["ProfileLogo"]["type"] . "<br>";
    echo "Size: " . ($_FILES["ProfileLogo"]["size"]/1024) . " kB<br>";
    echo "Temp file: " . $_FILES["ProfileLogo"]["tmp_name"] . "<br>";
    if (file_exists("uploads/provdrLogos/" . $_FILES["ProfileLogo"]["name"])) {
      echo $_FILES["ProfileLogo"]["name"] . " already exists. " . "<br>";
    } else {
      move_uploaded_file($_FILES["ProfileLogo"]["tmp_name"],
      "uploads/provdrLogos/" . $_FILES["ProfileLogo"]["name"]);
      echo "Stored in: " . "uploads/provdrLogos/" . $_FILES["ProfileLogo"]["name"] . "<br>";
    }
  }
} else {
  echo "Invalid file";
}
}


if (isset($_FILES['ProfileImage']['name'])) {
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["ProfileImage"]["name"]);
	$extension = end($temp);
	if ((($_FILES["ProfileImage"]["type"] == "image/gif")
	|| ($_FILES["ProfileImage"]["type"] == "image/jpeg")
	|| ($_FILES["ProfileImage"]["type"] == "image/jpg")
	|| ($_FILES["ProfileImage"]["type"] == "image/pjpeg")
	|| ($_FILES["ProfileImage"]["type"] == "image/x-png")
	|| ($_FILES["ProfileImage"]["type"] == "image/png"))
	&& ($_FILES["ProfileImage"]["size"] < 900000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["ProfileImage"]["error"] > 0) {
	echo "Return Code: " . $_FILES["ProfileImage"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["ProfileImage"]["name"] . "<br>";
    echo "Type: " . $_FILES["ProfileImage"]["type"] . "<br>";
    echo "Size: " . ($_FILES["ProfileImage"]["size"]/1024) . " kB<br>";
    echo "Temp file: " . $_FILES["ProfileImage"]["tmp_name"] . "<br>";
    if (file_exists("uploads/provdrImgs/" . $_FILES["ProfileImage"]["name"])) {
      echo $_FILES["ProfileImage"]["name"] . " already exists. " . "<br>";
    } else {
      move_uploaded_file($_FILES["ProfileImage"]["tmp_name"],
      "uploads/provdrImgs/" . $_FILES["ProfileImage"]["name"]);
      echo "Stored in: " . "uploads/provdrImgs/" . $_FILES["ProfileImage"]["name"] . "<br>";
    }
  }
} else {
  echo "Invalid file";
}
}

}
?>
</body>
</html>