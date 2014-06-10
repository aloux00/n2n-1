<? 
include('config.php'); 
if (isset($_GET['TagId']) ) { 
$TagId = (int) $_GET['TagId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `Tag` SET  `Name` =  '{$_POST['Name']}' ,  `Description` =  '{$_POST['Description']}'   WHERE `TagId` = '$TagId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `Tag` WHERE `TagId` = '$TagId' ")); 
?>

<form action='' method='POST'> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
