<?php
// db_connection.php
$host = "localhost";
$username = "root";
$password = "";
$database = "PrintersDB";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}
?>
