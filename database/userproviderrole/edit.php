<? 
include('config.php'); 
if (isset($_GET['UserId']) && isset($_GET['ProviderId']) && isset($_GET['RoleId']) ) { 

	$UserId = (int) $_GET['UserId']; 
	$ProviderId = (int) $_GET['ProviderId']; 
	$RoleId = (int) $_GET['RoleId']; 
	
	if (isset($_POST['submitted'])) { 
		foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
		
		$sql = "UPDATE `UserProviderRole` SET  `RoleId` =  '{$_POST['RoleId']}' ,  `ProviderId` =  '{$_POST['ProviderId']}' ,  `UserId` =  '{$_POST['UserId']}'   WHERE `UserId` = $UserId and `ProviderId` = $ProviderId and `RoleId` = $RoleId "; 
	
		mysql_query($sql) or die(mysql_error()); 
		echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
		echo "<a href='list.php'>Back To Listing</a>"; 
	} 
	$row = mysql_fetch_array ( mysql_query("SELECT * FROM `UserProviderRole` WHERE `UserId` = $UserId and `ProviderId` = $ProviderId and `RoleId` = $RoleId ")); 
?>

<form action='' method='POST'> 
<p><b>RoleId:</b><br /><input type='text' name='RoleId' value='<?= stripslashes($_POST['RoleId']) ?>' /> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId' value='<?= stripslashes($_POST['ProviderId']) ?>' /> 
<p><b>UserId:</b><br /><input type='text' name='UserId' value='<?= stripslashes($_POST['UserId']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 

<? } ?> 
