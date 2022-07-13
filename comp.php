<?php


$host = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($host, $username, $password, $database);

$number = $_POST['number'];

$sql = "UPDATE todo SET state = 'done' WHERE id = '$number'";

$query = mysqli_query($conn, $sql);

echo "<script>window.location.assign('http://localhost:3000')</script>";

$conn->close();

?>
