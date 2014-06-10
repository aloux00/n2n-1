<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `User` ( `NeighborhoodId` ,  `RoleId` ,  `FirstName` ,  `LastName` ,  `Password` ,  `Email` ,  `Phone` ,  `ProfileImage` ,  `IsActive` ,  `LastLoginDate` ,  `LoginCount` ,  `CreatedDate` ,  `CreatedBy` ,  `ConfirmedDate` ,  `ModifiedDate` ,  `ModifiedBy`  ) VALUES(  '{$_POST['NeighborhoodId']}' ,  '{$_POST['RoleId']}' ,  '{$_POST['FirstName']}' ,  '{$_POST['LastName']}' ,  '{$_POST['Password']}' ,  '{$_POST['Email']}' ,  '{$_POST['Phone']}' ,  '{$_POST['ProfileImage']}' ,  '{$_POST['IsActive']}' ,  '{$_POST['LastLoginDate']}' ,  '{$_POST['LoginCount']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CreatedBy']}' ,  '{$_POST['ConfirmedDate']}' ,  '{$_POST['ModifiedDate']}' ,  '{$_POST['ModifiedBy']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId'/> 
<p><b>RoleId:</b><br /><input type='text' name='RoleId'/> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName'/> 
<p><b>LastName:</b><br /><input type='text' name='LastName'/> 
<p><b>Password:</b><br /><input type='text' name='Password'/> 
<p><b>Email:</b><br /><input type='text' name='Email'/> 
<p><b>Phone:</b><br /><input type='text' name='Phone'/> 
<p><b>ProfileImage:</b><br /><input type='text' name='ProfileImage'/> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive'/> 
<p><b>LastLoginDate:</b><br /><input type='text' name='LastLoginDate'/> 
<p><b>LoginCount:</b><br /><input type='text' name='LoginCount'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy'/> 
<p><b>ConfirmedDate:</b><br /><input type='text' name='ConfirmedDate'/> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate'/> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
