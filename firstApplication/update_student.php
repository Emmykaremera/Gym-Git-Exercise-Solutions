<?php
session_start();
include __DIR__ . '/includes/auth.php';
include __DIR__ . '/config/db.php';

// Only admin can access
if ($_SESSION['role'] !== 'admin') {
    header("Location: dashboard.php");
    exit();
}

// Get student ID from URL
if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}
$id = intval($_GET['id']);

// Fetch current student data
$query = "SELECT * FROM school WHERE id = $id";
$result = mysqli_query($conn, $query);
if (!$result || mysqli_num_rows($result) !== 1) {
    header("Location: dashboard.php");
    exit();
}
$student = mysqli_fetch_assoc($result);

// Handle form submission
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($conn, $_POST['last_name']);
    $age        = mysqli_real_escape_string($conn, $_POST['age']);
    $class      = mysqli_real_escape_string($conn, $_POST['class']);
    $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
    $admission  = mysqli_real_escape_string($conn, $_POST['admission_date']);

    if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty($class) && !empty($gender) && !empty($admission)) {
        $update = "UPDATE school SET 
                   first_name='$first_name', 
                   last_name='$last_name', 
                   age='$age', 
                   class='$class',
                   gender='$gender',
                   admission_date='$admission'
                   WHERE id=$id";

        if (mysqli_query($conn, $update)) {
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Database error: " . mysqli_error($conn);
        }
    } else {
        $error = "All fields are required!";
    }
}

?>

<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container">
    <h2 style="text-align:center; margin-bottom:20px;">Edit Student</h2>

    <?php if (isset($error)) { ?>
        <p style="color:red; text-align:center;"><?= $error ?></p>
    <?php } ?>

    <form method="POST" style="max-width:600px; margin:0 auto;">
        <label>First Name:</label><br>
        <input type="text" name="first_name" value="<?= htmlspecialchars($student['first_name']) ?>" required style="width:100%; padding:8px; margin:5px 0;"><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" value="<?= htmlspecialchars($student['last_name']) ?>" required style="width:100%; padding:8px; margin:5px 0;"><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="<?= $student['age'] ?>" required style="width:100%; padding:8px; margin:5px 0;"><br>

        <label>Class:</label><br>
        <input type="text" name="class" value="<?= htmlspecialchars($student['class']) ?>" required style="width:100%; padding:8px; margin:5px 0;"><br>

        <label>Gender:</label><br>
        <select name="gender" required style="width:100%; padding:8px; margin:5px 0;">
            <option value="">Select Gender</option>
            <option value="Male" <?= $student['gender']=='Male'?'selected':'' ?>>Male</option>
            <option value="Female" <?= $student['gender']=='Female'?'selected':'' ?>>Female</option>
        </select><br>

        <label>Admission Date:</label><br>
        <input type="date" name="admission_date" value="<?= $student['admission_date'] ?>" required style="width:100%; padding:8px; margin:5px 0;"><br>

        <input type="submit" name="submit" value="Update Student" 
               style="background:#215fa1; color:white; padding:10px 20px; border:none; border-radius:6px; cursor:pointer; margin-top:10px;">
    </form>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
