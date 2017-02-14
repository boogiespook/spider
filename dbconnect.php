<?php
function connectDB() {
## Database stuff
global $db;
$db = mysql_connect('localhost','XXXXXXX','XXXXXXX');
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysql_select_db('spider')) {
		die("Unable to access spider database");
	}
}
?>
