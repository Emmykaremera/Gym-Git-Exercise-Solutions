<?php
session_start();
include 'config/db.php';

// Check ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: view_students.php");
    exit();
}

$id = intval($_GET['id']);

// Fetch student
$result = mysqli_query($conn, "SELECT * FROM school WHERE id=$id");
if (mysqli_num_rows($result) == 0) {
    die("Student not found");
}

$student = mysqli_fetch_assoc($result);

// Update student
if (isset($_POST['update'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($conn, $_POST['last_name']);
    $age        = mysqli_real_escape_string($conn, $_POST['age']);
    $class      = mysqli_real_escape_string($conn, $_POST['class']);
    $id         = intval($_POST['id']);

    $sql = "UPDATE school 
            SET first_name='$first_name',
                last_name='$last_name',
                age='$age',
                class='$class'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_students.php?success=updated");
        exit();
    } else {
        $error = "Update failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <label>First Name</label><br>
    <input type="text" name="first_name" value="<?= htmlspecialchars($student['first_name']) ?>" required><br><br>

    <label>Last Name</label><br>
    <input type="text" name="last_name" value="<?= htmlspecialchars($student['last_name']) ?>" required><br><br>

    <label>Age</label><br>
    <input type="number" name="age" value="<?= $student['age'] ?>"><br><br>

    <label>Class</label><br>
    <input type="text" name="class" value="<?= htmlspecialchars($student['class']) ?>"><br><br>

    <button type="submit" name="update">Update Student</button>
</form>

<p><a href="view_students.php">Back to Students List</a></p>

</body>
</html>
