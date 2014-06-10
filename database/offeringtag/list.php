<? 
include('config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>OfferingId</b></td>"; 
echo "<td><b>TagId</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `OfferingTag`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['OfferingId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['TagId']) . "</td>";  
echo "<td valign='top'><a href=edit.php?OfferingId={$row['OfferingId']}>Edit</a></td><td><a href=delete.php?OfferingId={$row['OfferingId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>