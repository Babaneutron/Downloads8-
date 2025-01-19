<?php
$servername = "localhost";
$username = "u482608841_sunnyside";
$password = "oxTuKw9D~";
$dbname = "u482608841_sunny";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

?>