<?php
$conn = new mysqli("localhost", "root", "root", "india_data");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM states";
$result = $conn->query($sql);

$states = array();

while($row = $result->fetch_assoc()) {
    $states[] = $row;
}

echo json_encode($states);

?>
