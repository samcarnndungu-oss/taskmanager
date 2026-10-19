<?php
$conn = mysqli_connect("localhost", "root", "", "taskmanager");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>