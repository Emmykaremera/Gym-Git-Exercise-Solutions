<?php
session_start();
include __DIR__ . '/includes/auth.php'; // ensure user is logged in
include __DIR__ . '/config/db.php';     // database connection

// Check database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Attempt to get all students
$students_result = mysqli_query($conn, "SELECT * FROM school ORDER BY id DESC");
if (!$students_result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c74f0ff;
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
        nav a { margin-left: 20px; color: #fff; text-decoration: none; font-weight: 500; }

        main { padding: 30px; }

        .card {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 30px auto;
            overflow-x: auto;
        }
        .card h2 { color: var(--primary-color); margin-bottom: 20px; text-align: center; }

        table { width: 100%; border-collapse: collapse; }
        table th, table td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        table th { background-color: var(--primary-color); color: #fff; }

        footer { text-align: center; padding: 15px; background-color: var(--primary-color); color: #fff; margin-top: 50px; }

        .action-btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 14px;
        }
        .action-btn:hover { opacity: 0.8; }
    </style>
</head>
<body>

<header>
    <h1>My School</h1>
    <div class="user-info">
        Welcome, <?= htmlspecialchars($_SESSION['username']) ?> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="add_student.php">Add Student</a> |
        <a href="logout.php">Logout</a>
    </div>
</header>

<main>
    <div class="card">
        <h2>All Students</h2>
        <?php if (mysqli_num_rows($students_result) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Admission Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($students_result)): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= htmlspecialchars($row['first_name']) ?></td>
                        <td><?= htmlspecialchars($row['last_name']) ?></td>
                        <td><?= $row['age'] ?></td>
                        <td><?= htmlspecialchars($row['gender']) ?></td>
                        <td><?= htmlspecialchars($row['class']) ?></td>
                        <td><?= htmlspecialchars($row['admission_date']) ?></td>
                        <td>
                            <a class="action-btn" href="edit_student.php?id=<?= $row['id'] ?>">Edit</a>
                            <a class="action-btn" href="delete_student.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p style="text-align:center; font-weight:bold;">No students found in the database.</p>
        <?php endif; ?>
    </div>
</main>

<footer>
    &copy; <?= date('Y') ?> School Management System |  
    Designed & Developed by <strong>Charles Mutesa</strong>
</footer>>

</body>
</html>
