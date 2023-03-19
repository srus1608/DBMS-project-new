<?php
include('config.php');

$Email = $_POST["Email"];

$conn = mysqli_connect("localhost", "root", "", "medico") or die("connection failed");
$sql = "INSERT INTO tb_subscribe(Email) VALUE ('{$Email}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: welcome.php");
mysqli_close($conn);
?>