<? 
include('../config.php'); 
if (isset($_GET['ProviderId']) ) { 
$ProviderId = (int) $_GET['ProviderId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `Provider` SET  `NeighborhoodId` =  '{$_POST['NeighborhoodId']}' ,  `ProviderType` =  '{$_POST['ProviderType']}' ,  `Name` =  '{$_POST['Name']}' ,  `Street1` =  '{$_POST['Street1']}' ,  `Street2` =  '{$_POST['Street2']}' ,  `City` =  '{$_POST['City']}' ,  `State` =  '{$_POST['State']}' ,  `Zip` =  '{$_POST['Zip']}' ,  `Contact` =  '{$_POST['Contact']}' ,  `Email` =  '{$_POST['Email']}' ,  `Phone` =  '{$_POST['Phone']}' ,  `Url` =  '{$_POST['Url']}' ,  `ProfileImage` =  '{$_POST['ProfileImage']}' ,  `HoursAvailable` =  '{$_POST['HoursAvailable']}' ,  `IsActive` =  '{$_POST['IsActive']}' ,  `Description` =  '{$_POST['Description']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `CreatedBy` =  '{$_POST['CreatedBy']}' ,  `ModifiedDate` =  '{$_POST['ModifiedDate']}' ,  `ModifiedBy` =  '{$_POST['ModifiedBy']}'   WHERE `ProviderId` = '$ProviderId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `Provider` WHERE `ProviderId` = '$ProviderId' ")); 
?>

<form action='' method='POST'> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId' value='<?= stripslashes($row['NeighborhoodId']) ?>' /> 
<p><b>ProviderType:</b><br /><input type='text' name='ProviderType' value='<?= stripslashes($row['ProviderType']) ?>' /> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>Street1:</b><br /><input type='text' name='Street1' value='<?= stripslashes($row['Street1']) ?>' /> 
<p><b>Street2:</b><br /><input type='text' name='Street2' value='<?= stripslashes($row['Street2']) ?>' /> 
<p><b>City:</b><br /><input type='text' name='City' value='<?= stripslashes($row['City']) ?>' /> 
<p><b>State:</b><br /><input type='text' name='State' value='<?= stripslashes($row['State']) ?>' /> 
<p><b>Zip:</b><br /><input type='text' name='Zip' value='<?= stripslashes($row['Zip']) ?>' /> 
<p><b>Contact:</b><br /><input type='text' name='Contact' value='<?= stripslashes($row['Contact']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
<p><b>Phone:</b><br /><input type='text' name='Phone' value='<?= stripslashes($row['Phone']) ?>' /> 
<p><b>Url:</b><br /><input type='text' name='Url' value='<?= stripslashes($row['Url']) ?>' /> 
<p><b>ProfileImage:</b><br /><input type='text' name='ProfileImage' value='<?= stripslashes($row['ProfileImage']) ?>' /> 
<p><b>HoursAvailable:</b><br /><input type='text' name='HoursAvailable' value='<?= stripslashes($row['HoursAvailable']) ?>' /> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive' value='<?= stripslashes($row['IsActive']) ?>' /> 
<p><b>Description:</b><br /><textarea name='Description'><?= stripslashes($row['Description']) ?></textarea> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy' value='<?= stripslashes($row['CreatedBy']) ?>' /> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate' value='<?= stripslashes($row['ModifiedDate']) ?>' /> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy' value='<?= stripslashes($row['ModifiedBy']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
