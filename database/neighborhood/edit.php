<? 
include('../config.php'); 
if (isset($_GET['NeighborhoodId']) ) { 
$NeighborhoodId = (int) $_GET['NeighborhoodId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `Neighborhood` SET  `Name` =  '{$_POST['Name']}' ,  `Description` =  '{$_POST['Description']}'   WHERE `NeighborhoodId` = '$NeighborhoodId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `Neighborhood` WHERE `NeighborhoodId` = '$NeighborhoodId' ")); 
?>

<form action='' method='POST'> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
