<? 
/* User functions */
require './database/config.php'; 

function getUserByEmailPswd( $email, $pswd ) {
	
	$sql = "SELECT * FROM User where Email = '" . $email . "' and Password = '" . $pswd . "'";

	return mysql_query($sql); 

}


function getUserById( $id ) {
	
	$sql = "SELECT * FROM User where UserId = '" . $id . "'";
	
	return mysql_query($sql); 

}
/*
function getProvidersByIndex( $index ) {
	// strip the slash and create two variables
	$fromIndex = strtoupper(substr($index,0,0));
	$toIndex = strtoupper(substr($index,2,2));
	
	$sql = "SELECT * FROM Provider where upper(Name) between '" . $fromIndex . "%' and '" . $toIndex . "%' order by Name";
	
	return mysql_query($sql); 
}

function getProvidersByCategory( $category ) {

	$sql  = "SELECT p.* FROM Provider p INNER JOIN Offering o on ";
	$sql .= "p.ProviderId = o.ProviderId and o.categoryid = " . $category . " order by p.Name";
	
	return mysql_query($sql); 
	
}

function getProviderById( $id ) {
	
	$sql = "SELECT * FROM Provider where ProviderId = " . $id;
	
	return mysql_query($sql);	
}
*/
?>