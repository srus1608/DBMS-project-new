<?php
include('config.php');

$Name = $_POST["Name"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Message = $_POST["Message"];

$conn = mysqli_connect("localhost", "root", "", "medico") or die("connection failed");
$sql = "INSERT INTO tb_contact(Name, PhoneNumber, Email, Message) VALUES ('{$Name}','{$PhoneNumber}','{$Email}','{$Message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: thanku.php");
mysqli_close($conn);
?>