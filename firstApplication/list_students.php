<?php
// Start session if you want login control
session_start();

// Include database connection
include 'config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Students</title>
    <style>
        body { font-family: Arial; background-color: #f4f4f4; }
        .container { width: 80%; margin: 50px auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #007BFF; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h2>List of Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Class</th>
            <th>Actions</th>
        </tr>

        <?php
        // Fetch all students
        $query = "SELECT * FROM students";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".htmlspecialchars($row['mutesa charles'])."</td>";
                echo "<td>".$row[23]."</td>";
                echo "<td>".htmlspecialchars($row['A0'])."</td>";
                echo "<td>
                        <a href='edit_student.php?id=".$row['id']."'>Edit</a> | 
                        <a href='delete_student.php?id=".$row['id']."' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No students found.</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>
