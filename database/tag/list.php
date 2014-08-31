<? 
include('../config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>TagId</b></td>"; 
echo "<td><b>Name</b></td>"; 
echo "<td><b>Description</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `Tag`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['TagId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Name']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Description']) . "</td>";  
echo "<td valign='top'><a href=edit.php?TagId={$row['TagId']}>Edit</a></td><td><a href=delete.php?TagId={$row['TagId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>