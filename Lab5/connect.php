<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "lab_5";
$conn = new mysqli($servername, $username, $password, $db_name, 33f06);
if ($conn->connect_error)
{
    die("Connection failed" . $conn->connect_error);
}
echo "success";
?>