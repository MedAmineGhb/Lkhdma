<?php
$host = 'localhost';
$dbname = 'user_management';
$username = 'root';  
$password = '';      

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

?>
