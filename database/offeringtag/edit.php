<? 
include('../config.php'); 
if (isset($_GET['OfferingId']) ) { 
$OfferingId = (int) $_GET['OfferingId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `OfferingTag` SET  `TagId` =  '{$_POST['TagId']}'   WHERE `OfferingId` = '$OfferingId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `OfferingTag` WHERE `OfferingId` = '$OfferingId' ")); 
?>

<form action='' method='POST'> 
<p><b>TagId:</b><br /><input type='text' name='TagId' value='<?= stripslashes($row['TagId']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
