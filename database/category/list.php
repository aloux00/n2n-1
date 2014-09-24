<? 
include('../config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>CategoryId</b></td>"; 
echo "<td><b>Name</b></td>"; 
echo "<td><b>Description</b></td>"; 
echo "<td><b>ParentCategoryId</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `Category`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['CategoryId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Name']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Description']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ParentCategoryId']) . "</td>";  
echo "<td valign='top'><a href=edit.php?CategoryId={$row['CategoryId']}>Edit</a></td><td><a href=delete.php?CategoryId={$row['CategoryId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>