<? 
include('config.php'); 
$UserId = (int) $_GET['UserId']; 
$ProviderId = (int) $_GET['ProviderId']; 
$RoleId = (int) $_GET['RoleId']; 
mysql_query("DELETE FROM `UserProviderRole` WHERE `UserId` = $UserId and `ProviderId` = $ProviderId and `RoleId` = $RoleId") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>