<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `Category` ( `Name` ,  `Description` ,  `ParentCategoryId`  ) VALUES(  '{$_POST['Name']}' ,  '{$_POST['Description']}' ,  {$_POST['ParentCategoryId']}  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>ParentCategoryId:</b><br /><input type='text' name='ParentCategoryId'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
