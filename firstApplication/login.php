<?php
session_start();
include 'config/db.php';

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = mysqli_prepare($conn, "SELECT password, role FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $db_password, $role);
    mysqli_stmt_fetch($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        if ($password === $db_password) { // plain text password
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }

    mysqli_stmt_close($stmt);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f2f2f2;
        }

        .login-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 8px 12px;
            margin: 8px 0;
            font-size: 14px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button.login-btn {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
            background-color: #215fa1;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button.login-btn:hover {
            background-color: #0056b3;
        }

        .password-box {
            position: relative;
        }

        .password-box input {
            padding-right: 35px; /* space for eye icon */
        }

        .eye-icon {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 16px;
            color: #555;
        }

        .eye-icon:hover {
            color: #000;
        }

        .error-msg {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php if ($error): ?>
        <div class="error-msg"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>

        <div class="password-box">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <span class="eye-icon" onclick="togglePassword()">👁️</span>
        </div>

        <button type="submit" name="login" class="login-btn">Login</button>
    </form>
</div>

<script>
function togglePassword() {
    const pwd = document.getElementById("password");
    const eye = document.querySelector(".eye-icon");

    if (pwd.type === "password") {
        pwd.type = "text";
        eye.textContent = "🙈"; // closed eye
    } else {
        pwd.type = "password";
        eye.textContent = "👁️"; // open eye
    }
}
</script>

</body>
</html>
