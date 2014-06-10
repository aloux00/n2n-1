<? 
include('config.php'); 
$ProviderId = (int) $_GET['ProviderId']; 
mysql_query("DELETE FROM `Provider` WHERE `ProviderId` = '$ProviderId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>