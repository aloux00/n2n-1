<? 
include('config.php'); 
if (isset($_GET['RoleId']) ) { 
$RoleId = (int) $_GET['RoleId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `Role` SET  `Name` =  '{$_POST['Name']}' ,  `Description` =  '{$_POST['Description']}' ,  `IsActive` =  '{$_POST['IsActive']}'   WHERE `RoleId` = '$RoleId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `Role` WHERE `RoleId` = '$RoleId' ")); 
?>

<form action='' method='POST'> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive' value='<?= stripslashes($row['IsActive']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
