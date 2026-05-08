<?php

// ===== إعدادات قاعدة البيانات =====
// غيّر هذه القيم بعد ما تنشئ قاعدة البيانات في الاستضافة
$DB_HOST = 'localhost';
$DB_USER = 'your_db_user';      // ← غيّرها
$DB_PASS = 'your_db_password';  // ← غيّرها
$DB_NAME = 'your_db_name';      // ← غيّرها
// ====================================

if (isset($_POST['Regbtn'])) {

    $name     = trim($_POST['name']);
    $username = trim($_POST['user']);
    $email    = trim($_POST['email']);
    $number   = trim($_POST['number']);
    $pwd      = $_POST['pwd'];
    $date     = $_POST['date'];
    $gender   = $_POST['gender'];
    $plan     = $_POST['plan'];

    // تشفير كلمة المرور
    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare(
        "INSERT INTO members (name, user, email, pwd, number, start_date, gender, plan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if (!$stmt) {
        die('Error: ' . $conn->error);
    }

    $stmt->bind_param("ssssssss", $name, $username, $email, $hashed_pwd, $number, $date, $gender, $plan);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: success.php");
        exit();
    } else {
        die('Error saving data: ' . $conn->error);
    }
}
?>
