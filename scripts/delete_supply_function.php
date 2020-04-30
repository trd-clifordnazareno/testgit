<?php

///echo $_GET['serial_no'];
$serial_no = $_GET['serial_no'];
$owsid = $_GET['owsid'];
///echo $owsid;exit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_inv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM office_work_supplies WHERE serial_no='$serial_no' and owsid = $owsid";

if ($conn->query($sql) === TRUE) {
    return true;
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>