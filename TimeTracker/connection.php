<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="TimeTracker";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn-setAttrivute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection failed: " . $e->getMessage();
    
}
?>