<?php 

// connect to db
$link = mysql_connect('68.178.142.6', 'N2nTalent', 'Kheprw159@');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('N2nTalent') ) {
    die ('Can\'t use N2nTalent : ' . mysql_error());
}

?>