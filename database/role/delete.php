<? 
include('config.php'); 
$RoleId = (int) $_GET['RoleId']; 
mysql_query("DELETE FROM `Role` WHERE `RoleId` = '$RoleId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>