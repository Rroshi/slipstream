<?php
$conn = new mysqli("localhost", "id16237526_db1", "Qwertyuiop123.", "id16237526_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>