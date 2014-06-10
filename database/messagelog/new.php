<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `MessageLog` ( `ProviderId` ,  `FromEmail` ,  `FromName` ,  `FromPhone` ,  `PreferredMethod` ,  `Subject` ,  `Message`  ) VALUES(  '{$_POST['ProviderId']}' ,  '{$_POST['FromEmail']}' ,  '{$_POST['FromName']}' ,  '{$_POST['FromPhone']}' ,  '{$_POST['PreferredMethod']}' ,  '{$_POST['Subject']}' ,  '{$_POST['Message']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>ProviderId:</b><br /><input type='text' name='ProviderId'/> 
<p><b>FromEmail:</b><br /><input type='text' name='FromEmail'/> 
<p><b>FromName:</b><br /><input type='text' name='FromName'/> 
<p><b>FromPhone:</b><br /><input type='text' name='FromPhone'/> 
<p><b>PreferredMethod:</b><br /><input type='text' name='PreferredMethod'/> 
<p><b>Subject:</b><br /><input type='text' name='Subject'/> 
<p><b>Message:</b><br /><input type='text' name='Message'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
