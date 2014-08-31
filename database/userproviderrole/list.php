<? 
include('../config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>RoleId</b></td>"; 
echo "<td><b>ProviderId</b></td>"; 
echo "<td><b>UserId</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `UserProviderRole`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['RoleId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ProviderId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['UserId']) . "</td>";  
echo "<td valign='top'><a href=edit.php?UserId,ProviderId,RoleId={$row['UserId,ProviderId,RoleId']}>Edit</a></td><td><a href=delete.php?UserId,ProviderId,RoleId={$row['UserId,ProviderId,RoleId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>