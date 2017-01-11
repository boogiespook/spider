<?php
function connectDB() {
## Database stuff
global $db;
if ($_SERVER["HTTP_HOST"] == "localhost") {
	$db = mysqli_connect('localhost','USERNAME','PASSWORD');
} else {
	$db = mysqli_connect('REMOTE IP','USERNAME','PASSWORD');
}
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysqli_select_db($db, 'spider')) {
		die("Unable to access innovate database");
	}
}
?>
