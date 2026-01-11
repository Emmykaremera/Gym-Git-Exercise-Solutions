<?php
include 'config/db.php';
include 'includes/auth.php';

if ($_SESSION['role'] !== 'admin') {
    exit("Access denied");
}

if (isset($_POST['upload'])) {

    if (!is_dir(__DIR__ . "/assets/logo")) {
        mkdir(__DIR__ . "/assets/logo", 0777, true);
    }

    $logo = basename($_FILES['logo']['name']);
    $tmp  = $_FILES['logo']['tmp_name'];

    $uploadDir = __DIR__ . "/assets/logo/";

    if (move_uploaded_file($tmp, $uploadDir . $logo)) {
        mysqli_query($conn,
            "UPDATE system_settings SET school_logo='$logo' WHERE id=1"
        );
        echo "Logo uploaded successfully";
    } else {
        echo "Upload failed";
    }
}
?>
