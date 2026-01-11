<?php// Search the database for this user in the 'school' table
$query = "SELECT * FROM school WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $query);

if (!$result) {
    // This will help you if there is still a column name error
    die("Query Failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
    exit();
} else {
    $error_message = "Invalid Username or Password!";
}='$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // SUCCESS: Set session variables
        $_SESSION['username'] = $user;
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        // FAILURE: Set error message
        $_SESSION['error'] = "Invalid Username or Password!";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; margin-bottom: 20px; }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Ensures padding doesn't break width */
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover { background: #0056b3; }
        .error { color: red; text-align: center; font-size: 14px; }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<p class='error'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="mutesacharles" required>
        <input type="password" name="password" placeholder="Mutesa12" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>