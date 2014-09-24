<? 
/* Category functions */
require './database/config.php'; 

function getCategories() {
	
	$sql = "SELECT * FROM Category order by Name";
	
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
	
	return mysql_query($sql) or trigger_error(mysql_error()); 
	
}
*/

?>