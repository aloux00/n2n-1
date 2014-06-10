<? 
include('config.php'); 
if (isset($_GET['MessageId']) ) { 
$MessageId = (int) $_GET['MessageId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `MessageLog` SET  `ProviderId` =  '{$_POST['ProviderId']}' ,  `FromEmail` =  '{$_POST['FromEmail']}' ,  `FromName` =  '{$_POST['FromName']}' ,  `FromPhone` =  '{$_POST['FromPhone']}' ,  `PreferredMethod` =  '{$_POST['PreferredMethod']}' ,  `Subject` =  '{$_POST['Subject']}' ,  `Message` =  '{$_POST['Message']}'   WHERE `MessageId` = '$MessageId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `MessageLog` WHERE `MessageId` = '$MessageId' ")); 
?>

<form action='' method='POST'> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId' value='<?= stripslashes($row['ProviderId']) ?>' /> 
<p><b>FromEmail:</b><br /><input type='text' name='FromEmail' value='<?= stripslashes($row['FromEmail']) ?>' /> 
<p><b>FromName:</b><br /><input type='text' name='FromName' value='<?= stripslashes($row['FromName']) ?>' /> 
<p><b>FromPhone:</b><br /><input type='text' name='FromPhone' value='<?= stripslashes($row['FromPhone']) ?>' /> 
<p><b>PreferredMethod:</b><br /><input type='text' name='PreferredMethod' value='<?= stripslashes($row['PreferredMethod']) ?>' /> 
<p><b>Subject:</b><br /><input type='text' name='Subject' value='<?= stripslashes($row['Subject']) ?>' /> 
<p><b>Message:</b><br /><input type='text' name='Message' value='<?= stripslashes($row['Message']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
