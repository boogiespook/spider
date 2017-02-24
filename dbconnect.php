<?php
function connectDB() {
## Database stuff
global $db;
$db = mysql_connect('spider-cjenkins.rhcloud.com','adminzvJZccK','5Et6HuymAm_j');
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysql_select_db('spider')) {
		die("Unable to access spider database");
	}
}
?>
