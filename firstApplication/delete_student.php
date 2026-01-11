<?php
session_start();
include 'includes/auth.php';
include 'config/db.php';

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = (int) $_GET['id'];

/* CORRECT TABLE NAME */
$sql = "DELETE FROM school WHERE id = ?";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->close();
$conn->close();

/* REDIRECT */
header("Location: dashboard.php");
exit();
