<?php
function db_init($config) {
	$conn = mysqli_connect($config["host"], $config["duser"], $config["dpw"]);
	mysqli_select_db($conn, $config["dname"]);
	return $conn;
}
?>