<? 
include('config.php'); 
$UserId = (int) $_GET['UserId']; 
mysql_query("DELETE FROM `User` WHERE `UserId` = '$UserId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>