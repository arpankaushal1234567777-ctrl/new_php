<?php
$conn = new mysqli("localhost", "root", "root", "india_data");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM cities WHERE state_id = '$id'";
$result = $conn->query($sql);

$cities = array();

while($row = $result->fetch_assoc()) {
    $cities[] = $row;
}

echo json_encode($cities);

?>
