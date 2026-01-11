<?php
include 'config/db.php';

$username = "mutesacharles";
$plainPassword = "Mutesa@12"; // REAL password
$role = "admin";

// HASH the password
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $role);

if (mysqli_stmt_execute($stmt)) {
    echo "User created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
?>
