<?php
// Database credentials
$db_host = "localhost";
$db_name = "ajax";
$db_username = "root";
$db_password = "Ufaz_2019";
 
try {
    // Get database connection
    $conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_password);
}
 
// Handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
