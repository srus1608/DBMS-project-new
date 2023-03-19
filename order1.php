<?php
include('config.php');

$Name = $_POST["Name"];
$PhoneNumber = $_POST["PhoneNumber"];
$Batch_No = $_POST["Batch_No"];
$Medicine_Name= $_POST["Medicine_Name"];

$conn = mysqli_connect("localhost", "root", "", "medico") or die("connection failed");
$sql = "INSERT INTO tb_order(Name, PhoneNumber,Batch_No,Medicine_Name) VALUES ('{$Name}','{$PhoneNumber}','{$Batch_No}','{$Medicine_Name}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: payment.php");
mysqli_close($conn);
?>