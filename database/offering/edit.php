<? 
include('config.php'); 
if (isset($_GET['OfferingId']) ) { 
$OfferingId = (int) $_GET['OfferingId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `Offering` SET  `ProviderId` =  '{$_POST['ProviderId']}' ,  `NeighborhoodId` =  '{$_POST['NeighborhoodId']}' ,  `CategoryId` =  '{$_POST['CategoryId']}' ,  `OfferingName` =  '{$_POST['OfferingName']}' ,  `Description` =  '{$_POST['Description']}' ,  `Street1` =  '{$_POST['Street1']}' ,  `Street2` =  '{$_POST['Street2']}' ,  `City` =  '{$_POST['City']}' ,  `State` =  '{$_POST['State']}' ,  `Zip` =  '{$_POST['Zip']}' ,  `ContactName` =  '{$_POST['ContactName']}' ,  `ContactEmail` =  '{$_POST['ContactEmail']}' ,  `ContactUrl` =  '{$_POST['ContactUrl']}' ,  `IsActive` =  '{$_POST['IsActive']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `CreatedBy` =  '{$_POST['CreatedBy']}' ,  `ModifiedDate` =  '{$_POST['ModifiedDate']}' ,  `ModifiedBy` =  '{$_POST['ModifiedBy']}'   WHERE `OfferingId` = '$OfferingId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `Offering` WHERE `OfferingId` = '$OfferingId' ")); 
?>

<form action='' method='POST'> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId' value='<?= stripslashes($row['ProviderId']) ?>' /> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId' value='<?= stripslashes($row['NeighborhoodId']) ?>' /> 
<p><b>CategoryId:</b><br /><input type='text' name='CategoryId' value='<?= stripslashes($row['CategoryId']) ?>' /> 
<p><b>OfferingName:</b><br /><input type='text' name='OfferingName' value='<?= stripslashes($row['OfferingName']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>Street1:</b><br /><input type='text' name='Street1' value='<?= stripslashes($row['Street1']) ?>' /> 
<p><b>Street2:</b><br /><input type='text' name='Street2' value='<?= stripslashes($row['Street2']) ?>' /> 
<p><b>City:</b><br /><input type='text' name='City' value='<?= stripslashes($row['City']) ?>' /> 
<p><b>State:</b><br /><input type='text' name='State' value='<?= stripslashes($row['State']) ?>' /> 
<p><b>Zip:</b><br /><input type='text' name='Zip' value='<?= stripslashes($row['Zip']) ?>' /> 
<p><b>ContactName:</b><br /><input type='text' name='ContactName' value='<?= stripslashes($row['ContactName']) ?>' /> 
<p><b>ContactEmail:</b><br /><input type='text' name='ContactEmail' value='<?= stripslashes($row['ContactEmail']) ?>' /> 
<p><b>ContactUrl:</b><br /><input type='text' name='ContactUrl' value='<?= stripslashes($row['ContactUrl']) ?>' /> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive' value='<?= stripslashes($row['IsActive']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy' value='<?= stripslashes($row['CreatedBy']) ?>' /> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate' value='<?= stripslashes($row['ModifiedDate']) ?>' /> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy' value='<?= stripslashes($row['ModifiedBy']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
