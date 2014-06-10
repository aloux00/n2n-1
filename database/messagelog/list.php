<? 
include('config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>MessageId</b></td>"; 
echo "<td><b>ProviderId</b></td>"; 
echo "<td><b>FromEmail</b></td>"; 
echo "<td><b>FromName</b></td>"; 
echo "<td><b>FromPhone</b></td>"; 
echo "<td><b>PreferredMethod</b></td>"; 
echo "<td><b>Subject</b></td>"; 
echo "<td><b>Message</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `MessageLog`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['MessageId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ProviderId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['FromEmail']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['FromName']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['FromPhone']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['PreferredMethod']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Subject']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Message']) . "</td>";  
echo "<td valign='top'><a href=edit.php?MessageId={$row['MessageId']}>Edit</a></td><td><a href=delete.php?MessageId={$row['MessageId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>