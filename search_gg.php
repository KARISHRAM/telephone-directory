<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "telephone_directory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $_POST["query"];

$sql = "SELECT name, telephone FROM directory WHERE name LIKE '%$query%' OR telephone LIKE '%$query%'";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

echo json_encode($data);

$conn->close();

?>


