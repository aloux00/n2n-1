<? 
include('../config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `UserProviderRole` ( `RoleId` ,  `ProviderId` ,  `UserId`  ) VALUES(  {$_POST['RoleId']} ,  {$_POST['ProviderId']} ,  {$_POST['UserId']}  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>RoleId:</b><br /><input type='text' name='RoleId'/> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId'/> 
<p><b>UserId:</b><br /><input type='text' name='UserId'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
