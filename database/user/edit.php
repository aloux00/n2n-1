<? 
include('config.php'); 
if (isset($_GET['UserId']) ) { 
$UserId = (int) $_GET['UserId']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `User` SET  `NeighborhoodId` =  '{$_POST['NeighborhoodId']}' ,  `RoleId` =  '{$_POST['RoleId']}' ,  `FirstName` =  '{$_POST['FirstName']}' ,  `LastName` =  '{$_POST['LastName']}' ,  `Password` =  '{$_POST['Password']}' ,  `Email` =  '{$_POST['Email']}' ,  `Phone` =  '{$_POST['Phone']}' ,  `ProfileImage` =  '{$_POST['ProfileImage']}' ,  `IsActive` =  '{$_POST['IsActive']}' ,  `LastLoginDate` =  '{$_POST['LastLoginDate']}' ,  `LoginCount` =  '{$_POST['LoginCount']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `CreatedBy` =  '{$_POST['CreatedBy']}' ,  `ConfirmedDate` =  '{$_POST['ConfirmedDate']}' ,  `ModifiedDate` =  '{$_POST['ModifiedDate']}' ,  `ModifiedBy` =  '{$_POST['ModifiedBy']}'   WHERE `UserId` = '$UserId' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `User` WHERE `UserId` = '$UserId' ")); 
?>

<form action='' method='POST'> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId' value='<?= stripslashes($row['NeighborhoodId']) ?>' /> 
<p><b>RoleId:</b><br /><input type='text' name='RoleId' value='<?= stripslashes($row['RoleId']) ?>' /> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName' value='<?= stripslashes($row['FirstName']) ?>' /> 
<p><b>LastName:</b><br /><input type='text' name='LastName' value='<?= stripslashes($row['LastName']) ?>' /> 
<p><b>Password:</b><br /><input type='text' name='Password' value='<?= stripslashes($row['Password']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
<p><b>Phone:</b><br /><input type='text' name='Phone' value='<?= stripslashes($row['Phone']) ?>' /> 
<p><b>ProfileImage:</b><br /><input type='text' name='ProfileImage' value='<?= stripslashes($row['ProfileImage']) ?>' /> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive' value='<?= stripslashes($row['IsActive']) ?>' /> 
<p><b>LastLoginDate:</b><br /><input type='text' name='LastLoginDate' value='<?= stripslashes($row['LastLoginDate']) ?>' /> 
<p><b>LoginCount:</b><br /><input type='text' name='LoginCount' value='<?= stripslashes($row['LoginCount']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy' value='<?= stripslashes($row['CreatedBy']) ?>' /> 
<p><b>ConfirmedDate:</b><br /><input type='text' name='ConfirmedDate' value='<?= stripslashes($row['ConfirmedDate']) ?>' /> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate' value='<?= stripslashes($row['ModifiedDate']) ?>' /> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy' value='<?= stripslashes($row['ModifiedBy']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
