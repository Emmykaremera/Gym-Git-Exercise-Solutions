<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include __DIR__ . '/../config/db.php';

/* Fetch system settings */
$sys = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM system_settings LIMIT 1")
);
?>

<header style="
    background:#215fa1;
    color:white;
    padding:15px 25px;
    box-shadow:0 2px 6px rgba(0,0,0,0.15);
">

    <!-- Top row -->
    <div style="display:flex; justify-content:space-between; align-items:center;">

        <!-- Logo or System Name -->
        <div style="font-size:22px; font-weight:bold; display:flex; align-items:center; gap:10px;">
            <?php if (!empty($sys['school_logo'])): ?>
                <img src="assets/logo/<?= htmlspecialchars($sys['school_logo']) ?>" height="40">
            <?php else: ?>
                📘 My School
            <?php endif; ?>
        </div>

        <!-- Mobile menu icon -->
        <div style="font-size:22px; cursor:pointer;">
            ☰
        </div>
    </div>

    <!-- Navigation -->
    <nav style="
        display:flex;
        justify-content:center;
        gap:22px;
        margin-top:12px;
        font-size:15px;
        font-weight:500;
        flex-wrap:wrap;
    ">
        <a href="dashboard.php" style="color:white; text-decoration:none;">🏠 Dashboard</a>
        <a href="add_student.php" style="color:#ffd700; text-decoration:none;">➕ Add Student</a>
        <a href="view_students.php" style="color:white; text-decoration:none;">📋 View Students</a>
        <a href="contact.php" style="color:white; text-decoration:none;">✉️ Contact</a>
        <a href="about.php" style="color:white; text-decoration:none;">ℹ️ About</a>
        <a href="logout.php" style="color:white; text-decoration:none;">🚪 Logout</a>
    </nav>

</header>
