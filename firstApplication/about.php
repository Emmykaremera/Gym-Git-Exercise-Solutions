<?php
session_start();
include __DIR__ . '/includes/auth.php';
include __DIR__ . '/includes/header.php';
?>

<div style="
    max-width:1000px;
    margin:40px auto;
    padding:30px;
    background:white;
    border-radius:10px;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
">

    <h2 style="text-align:center;">About 📘 StudentSystem</h2>

    <!-- Intro -->
    <p style="text-align:center; color:#666; margin-bottom:30px;">
        A simple, secure, and efficient Student Registration & Management System
    </p>

    <!-- ROLE-BASED TEXT -->
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <p style="text-align:center; margin-top:15px;">
            As an administrator, you have full control over students,
            system settings, and reports.
        </p>
    <?php else: ?>
        <p style="text-align:center; margin-top:15px;">
            This system allows users to view student information
            securely and efficiently.
        </p>
    <?php endif; ?>

    <!-- SYSTEM PURPOSE -->
    <h3>🎓 System Purpose</h3>
    <p>
        StudentSystem was developed to help schools manage student
        records accurately and securely.
    </p>

    <!-- SYSTEM FEATURES -->
    <h3>⚙️ Key Features</h3>
    <ul>
        <li>Student registration</li>
        <li>Role-based access</li>
        <li>Secure login system</li>
        <li>Centralized database</li>
    </ul>

    <!-- CONTACT FORM -->
    <h3>📨 Contact Us</h3>
    <form method="POST">
        <input name="name" placeholder="Your Name" required style="width:100%; padding:8px; margin:5px 0;"><br>
        <input name="email" type="email" placeholder="Email" required style="width:100%; padding:8px; margin:5px 0;"><br>
        <textarea name="message" placeholder="Message" required style="width:100%; padding:8px; margin:5px 0;"></textarea><br>
        <button name="send" style="background:#215fa1; color:white; padding:10px 15px; border:none; border-radius:6px; cursor:pointer;">Send Message</button>
    </form>

</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
