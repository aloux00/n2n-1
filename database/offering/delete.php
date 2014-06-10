<? 
include('config.php'); 
$OfferingId = (int) $_GET['OfferingId']; 
mysql_query("DELETE FROM `Offering` WHERE `OfferingId` = '$OfferingId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>