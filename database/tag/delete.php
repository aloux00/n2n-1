<? 
include('../config.php'); 
$TagId = (int) $_GET['TagId']; 
mysql_query("DELETE FROM `Tag` WHERE `TagId` = '$TagId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>