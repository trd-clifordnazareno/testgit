<?php

///echo $_GET['serial_no'];
$serial_no = $_GET['serial_no'];
$Descriptions = $_GET['Descriptions'];
$brand = $_GET['brand'];
$ass_class = $_GET['ass_class'];
$supplier = $_GET['supplier'];
$qty = $_GET['qty'];
$work_station = $_GET['work_station'];
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

$sql = "UPDATE office_work_supplies SET serial_no='$serial_no', Description = '$Descriptions', brand = '$brand', ass_class = '$ass_class', supplier = '$supplier', qty = '$qty', work_station = '$work_station', status = '$status', on_hand_by = '$on_hand_by', acquisition_date = '$acquisition_date', amount = '$amount' WHERE serial_no=$serial_no";

if ($conn->query($sql) === TRUE) {
    echo "<h3 style='margin-top: 30px; color: green;'>Record updated successfully</h3>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>