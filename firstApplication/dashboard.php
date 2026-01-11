<?php
session_start();
include 'includes/auth.php';
include 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>School Dashboard</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
:root{
    --primary:#0b63b6;
    --secondary:#0aa1dd;
    --light:#f4f7fb;
    --dark:#1c1c1c;
}

/* RESET */
*{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI}

/* ================= HEADER ================= */
header{
    background:linear-gradient(to right,var(--primary),var(--secondary));
    padding:15px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
}

.logo{
    font-size:22px;
    font-weight:bold;
}

nav a{
    color:white;
    margin-left:25px;
    text-decoration:none;
    font-weight:500;
}

nav a:hover{ text-decoration:underline }

/* ================= HERO ================= */
.hero{
    background:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),
    url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f');
    background-size:cover;
    padding:80px 20px;
    color:white;
    text-align:center;
}

.hero h1{
    font-size:42px;
    margin-bottom:10px;
}

/* ================= STATS ================= */
.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
    width:90%;
    margin:-50px auto 50px;
}

.card{
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
    text-align:center;
    animation:fadeUp .8s ease;
}

.card i{
    font-size:40px;
    color:var(--primary);
    margin-bottom:10px;
}

.card h2{ font-size:32px }
.card p{ color:gray }

@keyframes fadeUp{
    from{opacity:0;transform:translateY(40px)}
    to{opacity:1;transform:translateY(0)}
}

/* ================= STUDENTS TABLE ================= */
.students{
    width:90%;
    margin:60px auto;
}

.students h2{
    text-align:center;
    color:var(--primary);
    margin-bottom:25px;
    font-size:30px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

th{
    background:linear-gradient(to right,var(--primary),var(--secondary));
    color:white;
    padding:14px;
}

td{
    padding:12px;
    text-align:center;
}

tr:nth-child(even){ background:#f5f5f5 }
tr:hover{ background:#e6f0ff }

.action a{
    padding:6px 12px;
    border-radius:6px;
    color:white;
    text-decoration:none;
    font-size:13px;
}

.edit{ background:var(--secondary) }
.delete{ background:#d9534f }

/* ================= FOOTER ================= */
footer{
    background:var(--dark);
    color:white;
    padding:25px;
    text-align:center;
    margin-top:80px;
}
</style>
</head>

<body>

<!-- ================= HEADER ================= -->
<header>
    <div class="logo"><i class="fa-solid fa-school"></i> My School</div>
    <nav>
        <a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="add_student.php"><i class="fa fa-user-plus"></i> Add Student</a>
         <a href="contact.php">Contact</a> |
        <a href="about.php">About</a> |
        <a href="view_students.php">View Students</a> | 
        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>  
    </nav>
</header>
<section class="hero">
    <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></h1>
</section>

<!-- ================= STUDENTS TABLE ================= -->
<section class="students">
<h2>Registered Students</h2>

<table>
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Class</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php
$result = mysqli_query($conn,"SELECT * FROM school ORDER BY id DESC");
if($result && mysqli_num_rows($result)>0):
while($row=mysqli_fetch_assoc($result)):
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['first_name'].' '.$row['last_name']) ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['class'] ?></td>
    <td class="action">
        <a class="edit" href="edit_student.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="delete" href="delete_student.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Delete this student?')">Delete</a>
    </td>
</tr>
<?php endwhile; else: ?>
<tr><td colspan="5">No students found</td></tr>
<?php endif; ?>
</tbody>
</table>
</section>

<!-- ================= FOOTER ================= -->
<footer style="
    background:#215fa1;
    color:white;
    text-align:center;
    padding:20px 25px;
    box-shadow:0 -2px 6px rgba(0,0,0,0.15);
    margin-top:50px;
    font-size:14px;
    position: relative;
">

    &copy; <?= date('Y') ?> School Management System |  
    Designed & Developed by <strong>Charles Mutesa</strong>

    <div style="margin-top:5px; font-size:13px; color:#d1e0f0;">
        <span>💡 Tip: Use the dashboard cards above for quick navigation!</span>
    </div>

    <div style="margin-top:8px;">
        <!-- Social links (innovation: add quick contact icons) -->
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mutesa958@gmail.com" target="_blank" style="color:#ffd700; margin:0 8px; text-decoration:none;">✉️ Email</a>

        <a href="https://github.com/CharlesMutesa" target="_blank" style="color:#ffd700; margin:0 8px; text-decoration:none;">💻 GitHub</a>
        <a href="https://linkedin.com/in/CharlesMutesa" target="_blank" style="color:#ffd700; margin:0 8px; text-decoration:none;">🔗 LinkedIn</a>
    </div>
</footer>


</body>
</html>
