<?php
function connectDB() {
## Database stuff
$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
global $db;
$db = mysql_connect($db_host,$db_user,$db_pass);
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysql_select_db('spider')) {
		die("Unable to access spider database");
	}
}
?>
