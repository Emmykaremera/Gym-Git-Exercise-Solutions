<?php
include 'config/db.php';

// 1️⃣ Save student if form is submitted
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($conn, $_POST['last_name']);
    $age        = (int) $_POST['age'];
    $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
    $class      = mysqli_real_escape_string($conn, $_POST['class']);
    $admission_date = mysqli_real_escape_string($conn, $_POST['admission_date']);

    // Insert student into database
    $sql = "INSERT INTO school (first_name, last_name, age, gender, class, admission_date)
            VALUES ('$first_name', '$last_name', '$age', '$gender', '$class', '$admission_date')";

    if (mysqli_query($conn, $sql)) {
        // ✅ Redirect to dashboard instead of showing message
        header("Location: dashboard.php");
        exit();
    } else {
        echo "❌ Error: " . mysqli_error($conn);
        exit();
    }
}

// 2️⃣ Get all students from database (optional if you only want redirection)
$students_result = mysqli_query($conn, "SELECT first_name, last_name FROM school");

?>
