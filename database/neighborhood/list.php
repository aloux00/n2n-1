<? 
include('config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>NeighborhoodId</b></td>"; 
echo "<td><b>Name</b></td>"; 
echo "<td><b>Description</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `Neighborhood`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['NeighborhoodId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Name']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Description']) . "</td>";  
echo "<td valign='top'><a href=edit.php?NeighborhoodId={$row['NeighborhoodId']}>Edit</a></td><td><a href=delete.php?NeighborhoodId={$row['NeighborhoodId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>