<?php


$host = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($host, $username, $password, $database);

$sqlRead = "SELECT * FROM todo WHERE state != 'done' ORDER BY id DESC";

$queryRead = mysqli_query($conn, $sqlRead);

if ($queryRead->num_rows > 0) {

while ($row = $queryRead->fetch_assoc()) {

  $rows[] = $row;

}

foreach ($rows as $i => $oneRow) {

echo "<p>Date: " . $rows[$i]['date'];

echo "<br/>";

echo "<div class='row'><div class='task'>";

echo "<p>Task: " . $rows[$i]['task'];

echo "</div>";

echo "<form action='http://localhost/ToDoApp/comp.php' method='post'>";

echo "<input type='hidden' name='number' value='" . $rows[$i]['id'] . "'>";

echo "<button class='button2' type='submit'>Complete</button>";

echo "</form>";

echo "</div>";

}


}

else {

  echo "<p>No open tasks</p>";

}


$conn->close();

?>
