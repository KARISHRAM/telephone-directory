<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "telephone_directory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["name"]) && isset($_POST["telephone"])) {
    $name = $_POST["name"];
    $telephone = $_POST["telephone"];

    $sql = "INSERT INTO directory (name, telephone)
    VALUES ('$name', '$telephone')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
