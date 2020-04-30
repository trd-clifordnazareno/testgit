<?php

$serial_no = $_GET['serial_no'];
$descriptions = $_GET['description'];
$brand = $_GET['brand'];
$ass_class = $_GET['ass_class'];
$supplier = $_GET['supplier'];
$qty = $_GET['qty'];
$work_station = $_GET['work_station'];
$station = $_GET['station'];
$status = $_GET['status'];
$on_hand_by = $_GET['on_hand_by'];
$acquisition_date = $_GET['acquisition_date'];
$amount = $_GET['amount'];

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

$sql = "INSERT INTO office_work_supplies (serial_no, Description, brand, ass_class, supplier, qty, work_station, station, status, on_hand_by, acquisition_date, amount)
VALUES ('$serial_no', '$descriptions', '$brand', '$ass_class', '$supplier', '$qty', '$work_station', '$station', '$status', '$on_hand_by', '$acquisition_date', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();







?>