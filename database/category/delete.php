<? 
include('config.php'); 
$CategoryId = (int) $_GET['CategoryId']; 
mysql_query("DELETE FROM `Category` WHERE `CategoryId` = $CategoryId ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>