<? 
include('config.php'); 
$NeighborhoodId = (int) $_GET['NeighborhoodId']; 
mysql_query("DELETE FROM `Neighborhood` WHERE `NeighborhoodId` = '$NeighborhoodId' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>