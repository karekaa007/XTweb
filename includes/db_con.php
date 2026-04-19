<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "xpansion_db";
?>


<?php
// $servername = "localhost";
// $username = "u622085619_xpansion";
// $password = "Auctech@321";
// $database = "u622085619_xpansion";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); 
    die("Connection failed. Please try again later.");
}
?>
