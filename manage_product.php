



        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_inv";

        // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo 1;}
