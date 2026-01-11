<?php
session_start(); // Start session first

// ====== PERMISSIONS CHECK ======
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Redirect non-admins to dashboard
    header("Location: dashboard.php");
    exit();
}

include __DIR__ . '/includes/auth.php'; // Ensure user is logged in
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .admin-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
        }
        .admin-container h1 {
            color: #215fa1ff;
            margin-bottom: 30px;
        }
        .admin-container a {
            display: block;
            margin: 10px auto;
            padding: 12px 20px;
            width: 200px;
            text-decoration: none;
            color: white;
            background-color: #215fa1ff;
            border-radius: 8px;
            font-weight: bold;
        }
        .admin-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Admin Panel</h1>
        <a href="add_student.php">Add Student</a>
        <a href="view_students.php">View Students</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
