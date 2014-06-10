<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `Offering` ( `ProviderId` ,  `NeighborhoodId` ,  `CategoryId` ,  `OfferingName` ,  `Description` ,  `Street1` ,  `Street2` ,  `City` ,  `State` ,  `Zip` ,  `ContactName` ,  `ContactEmail` ,  `ContactUrl` ,  `IsActive` ,  `CreatedDate` ,  `CreatedBy` ,  `ModifiedDate` ,  `ModifiedBy`  ) VALUES(  '{$_POST['ProviderId']}' ,  '{$_POST['NeighborhoodId']}' ,  '{$_POST['CategoryId']}' ,  '{$_POST['OfferingName']}' ,  '{$_POST['Description']}' ,  '{$_POST['Street1']}' ,  '{$_POST['Street2']}' ,  '{$_POST['City']}' ,  '{$_POST['State']}' ,  '{$_POST['Zip']}' ,  '{$_POST['ContactName']}' ,  '{$_POST['ContactEmail']}' ,  '{$_POST['ContactUrl']}' ,  '{$_POST['IsActive']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CreatedBy']}' ,  '{$_POST['ModifiedDate']}' ,  '{$_POST['ModifiedBy']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId'/> 
<p><b>NeighborhoodId:</b><br /><input type='text' name='NeighborhoodId'/> 
<p><b>CategoryId:</b><br /><input type='text' name='CategoryId'/> 
<p><b>OfferingName:</b><br /><input type='text' name='OfferingName'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>Street1:</b><br /><input type='text' name='Street1'/> 
<p><b>Street2:</b><br /><input type='text' name='Street2'/> 
<p><b>City:</b><br /><input type='text' name='City'/> 
<p><b>State:</b><br /><input type='text' name='State'/> 
<p><b>Zip:</b><br /><input type='text' name='Zip'/> 
<p><b>ContactName:</b><br /><input type='text' name='ContactName'/> 
<p><b>ContactEmail:</b><br /><input type='text' name='ContactEmail'/> 
<p><b>ContactUrl:</b><br /><input type='text' name='ContactUrl'/> 
<p><b>IsActive:</b><br /><input type='text' name='IsActive'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CreatedBy:</b><br /><input type='text' name='CreatedBy'/> 
<p><b>ModifiedDate:</b><br /><input type='text' name='ModifiedDate'/> 
<p><b>ModifiedBy:</b><br /><input type='text' name='ModifiedBy'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
