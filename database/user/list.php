<? 
include('config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>UserId</b></td>"; 
echo "<td><b>NeighborhoodId</b></td>"; 
echo "<td><b>RoleId</b></td>"; 
echo "<td><b>FirstName</b></td>"; 
echo "<td><b>LastName</b></td>"; 
echo "<td><b>Password</b></td>"; 
echo "<td><b>Email</b></td>"; 
echo "<td><b>Phone</b></td>"; 
echo "<td><b>ProfileImage</b></td>"; 
echo "<td><b>IsActive</b></td>"; 
echo "<td><b>LastLoginDate</b></td>"; 
echo "<td><b>LoginCount</b></td>"; 
echo "<td><b>CreatedDate</b></td>"; 
echo "<td><b>CreatedBy</b></td>"; 
echo "<td><b>ConfirmedDate</b></td>"; 
echo "<td><b>ModifiedDate</b></td>"; 
echo "<td><b>ModifiedBy</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `User`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['UserId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['NeighborhoodId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['RoleId']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['FirstName']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['LastName']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Password']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Email']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Phone']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ProfileImage']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['IsActive']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['LastLoginDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['LoginCount']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['CreatedDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['CreatedBy']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ConfirmedDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ModifiedDate']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ModifiedBy']) . "</td>";  
echo "<td valign='top'><a href=edit.php?UserId={$row['UserId']}>Edit</a></td><td><a href=delete.php?UserId={$row['UserId']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>