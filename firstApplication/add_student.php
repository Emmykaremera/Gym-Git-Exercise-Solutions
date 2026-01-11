<?php
session_start();
include __DIR__ . '/includes/auth.php'; // Ensure user is logged in
include __DIR__ . '/config/db.php';     // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- Google Fonts / Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2c74f0ff;
            --secondary-color: #308df1ff;
            --bg-color: #f4f6f8;
            --card-bg: #fff;
            --text-color: #333;
        }

        * { box-sizing: border-box; margin:0; padding:0; font-family: 'Roboto', sans-serif; }

        body { background-color: var(--bg-color); color: var(--text-color); }

        header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 { font-size: 24px; }
        header .user-info { font-size: 16px; }

        nav a {
            margin-left: 20px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        main {
            padding: 30px;
        }

        .card {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 30px auto;
        }

        .card h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: var(--primary-color);
            color: #fff;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<header>
    <h1>My School</h1>
    <div class="user-info">
        Welcome, <?= htmlspecialchars($_SESSION['username']) ?> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="logout.php">Logout</a>
    </div>
</header>

<main>
    <div class="card">
        <h2>Add New Student</h2>
        <form action="save_student.php" method="POST">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" required>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" required>

            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="class">Class</label>
            <input type="text" name="class" id="class" required>

            <label for="admission_date">Admission Date</label>
            <input type="date" name="admission_date" id="admission_date" required>

            <button type="submit" name="submit">Add Student</button>
        </form>
    </div>
</main>

<footer>
    &copy; <?= date('Y') ?> School Management System |  
    Designed & Developed by <strong>Charles Mutesa</strong>
</footer>

</body>
</html>
