<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `Provider` ( `NeighborhoodId` ,  `ProviderType` ,  `Name` ,  `Street1` ,  `Street2` ,  `City` ,  `State` ,  `Zip` ,  `Contact` ,  `Email` ,  `Phone` ,  `Url` ,  `ProfileImage` ,  `HoursAvailable` ,  `IsActive` ,  `Description` ,  `CreatedDate` ,  `CreatedBy` ,  `ModifiedDate` ,  `ModifiedBy`  ) VALUES(  '{$_POST['NeighborhoodId']}' ,  '{$_POST['ProviderType']}' ,  '{$_POST['Name']}' ,  '{$_POST['Street1']}' ,  '{$_POST['Street2']}' ,  '{$_POST['City']}' ,  '{$_POST['State']}' ,  '{$_POST['Zip']}' ,  '{$_POST['Contact']}' ,  '{$_POST['Email']}' ,  '{$_POST['Phone']}' ,  '{$_POST['Url']}' ,  '{$_POST['ProfileImage']}' ,  '{$_POST['HoursAvailable']}' ,  '{$_POST['IsActive']}' ,  '{$_POST['Description']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CreatedBy']}' ,  '{$_POST['ModifiedDate']}' ,  '{$_POST['ModifiedBy']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId'/> 
<p><b>ProviderType:</b><br /><input type='text' name='ProviderType'/> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>Street1:</b><br /><input type='text' name='Street1'/> 
<p><b>Street2:</b><br /><input type='text' name='Street2'/> 
<p><b>City:</b><br /><input type='text' name='City'/> 
<p><b>State:</b><br /><input type='text' name='State'/> 
<p><b>Zip:</b><br /><input type='text' name='Zip'/> 
<p><b>Contact:</b><br /><input type='text' name='Contact'/> 
<p><b>Email:</b><br /><input type='text' name='Email'/> 
<p><b>Phone:</b><br /><input type='text' name='Phone'/> 
<p><b>Url:</b><br /><input type='text' name='Url'/> 
<p><b>ProfileImage:</b><br /><input type='text' name='ProfileImage'/> 
<p><b>HoursAvailable:</b><br /><input type='text' name='HoursAvailable'/> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive'/> 
<p><b>Description:</b><br /><textarea name='Description'></textarea> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy'/> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate'/> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
