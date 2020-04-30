



        <?php
        $servername = "ftp.richmedia.com.ph";
        $username = "richmed_rmni_admin";
        $password = "rmni_admin";
        $dbname = "richmed_inventory";

        // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo 1;}
