<?php
$conn = mysqli_connect("localhost", "root", "", "firstapplication");

if (!$conn) {
    die("DB Connection failed: " . mysqli_connect_error());
}

echo "DB Connected";
?>
