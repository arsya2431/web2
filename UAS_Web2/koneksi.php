<?php

$servername = "localhost";
$username = "id17261876_databasezakat4";
$password = "?ja6/6_Xrl|lq6T(";
$database = "id17261876_db_zakat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>