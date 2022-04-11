<?php
$conn = mysqli_connect('localhost', 'root', 'secret', 'NewDataBase');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query('SELECT * FROM Zakaz');

var_dump($result->fetch_assoc());
?>