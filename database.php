<?php
function connectDB() {
## Database stuff
global $db;
if ($_SERVER["HTTP_HOST"] == "localhost") {
	$db = mysqli_connect('localhost','XXXXXXX','XXXXXXX');
} else {
	$db = mysqli_connect('111.111.111.111','XXXXXXX','XXXXXXX');
}
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysqli_select_db($db, 'spider')) {
		die("Unable to access innovate database");
	}
}
?>
