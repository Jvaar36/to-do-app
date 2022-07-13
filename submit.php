<?php

$host = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($host, $username, $password, $database);

$date = $_POST['date'];
$task = $_POST['task'];

$sql = "INSERT INTO todo (date, task) VALUES ('$date', '$task')";

$query = mysqli_query($conn, $sql);


$conn->close();

?>
