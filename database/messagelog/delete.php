<? 
include('config.php'); 
$MessageId = (int) $_GET['MessageId']; 
mysql_query("DELETE FROM `MessageLog` WHERE `MessageId` = '$MessageId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>