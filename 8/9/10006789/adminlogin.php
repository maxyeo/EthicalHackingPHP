<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// define('server', 'localhost');
// define('database', 'RobertFischer');
// define('db_username', 'saito');
// define('db_password', 'aMTbN7TT2EvaquevE9gj7CR2');

$server = 'localhost';
$database = 'RobertFischer';
$db_username = 'saito';
$db_password = 'aMTbN7TT2EvaquevE9gj7CR2';

$conn = mysqli_connect($server, $database, $db_username, $db_password);

if (!empty($username) && !empty($password)) {

	$sql = 'SELECT * FROM Login';
	$data = mysql_query($conn, $sql);

	// while ($row = mysqli_fetch($data)) {
	// 	$_SESSION['admin_id'] = $row['id'];
	// 	$_SESSION['admin_username'] = $row['username'];

	// 	$count ++;
	// }
	// if ($count == 1) {
	// 	header('location: home.php');
	// } else {
	// 	header('location: index.php');
	// }
	var_dump($data);


} else {
	echo "go back and fill out the form";
}


?>