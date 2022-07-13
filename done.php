<?php

$host = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($host, $username, $password, $database);

$sql = "SELECT * FROM todo WHERE state = 'done' ORDER BY id DESC";

$query = mysqli_query($conn, $sql);

if ($query->num_rows > 0) {

while ($row = $query->fetch_assoc()) {

  $rows[] = $row;

}

foreach ($rows as $i => $oneRow) {

echo "<div class='row'><div class='task'><p>Date: <span style='color: #aaaadd'>" . $rows[$i]['date'] . "</span></p>
</div><div class='task'><p>Task: <span style='color: #aaaadd'>" . $rows[$i]['task'] . "</span></p>
</div><div class='task'><p>Status: <span style='color: #aaaadd'>Completed</span></p></div></div>";



}

}

$conn->close();

?>
