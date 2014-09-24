<? 
include('../config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>OfferingId</b></td>"; 
echo "<td><b>ProviderId</b></td>"; 
echo "<td><b>NeighborhoodId</b></td>"; 
echo "<td><b>CategoryId</b></td>"; 
echo "<td><b>OfferingName</b></td>"; 
echo "<td><b>Description</b></td>"; 
echo "<td><b>Street1</b></td>"; 
echo "<td><b>Street2</b></td>"; 
echo "<td><b>City</b></td>"; 
echo "<td><b>State</b></td>"; 
echo "<td><b>Zip</b></td>"; 
echo "<td><b>ContactName</b></td>"; 
echo "<td><b>ContactEmail</b></td>"; 
echo "<td><b>ContactUrl</b></td>"; 
echo "<td><b>IsActive</b></td>"; 
echo "<td><b>CreatedDate</b></td>"; 
echo "<td><b>CreatedBy</b></td>"; 
echo "<td><b>ModifiedDate</b></td>"; 
echo "<td><b>ModifiedBy</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `Offering`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['OfferingId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ProviderId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['NeighborhoodId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['CategoryId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['OfferingName']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Description']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Street1']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Street2']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['City']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['State']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Zip']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ContactName']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ContactEmail']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ContactUrl']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['IsActive']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['CreatedDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['CreatedBy']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ModifiedDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ModifiedBy']) . "</td>";  
echo "<td valign='top'><a href=edit.php?OfferingId={$row['OfferingId']}>Edit</a></td><td><a href=delete.php?OfferingId={$row['OfferingId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>