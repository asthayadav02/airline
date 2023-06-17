<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airline";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM form_data";
    $result = $conn->query($sql);

?>