<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $province = $_POST['province'];
    $email = $_POST['email'];

    // ตรวจสอบการยืนยันรหัสผ่านและความซับซ้อนของรหัสผ่าน
    if ($password != $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }
    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $password)) {
        echo "Password must be at least 8 characters long, contain at least one number, one uppercase, and one lowercase letter.";
        exit;
    }

    // ตรวจสอบอีเมลซ้ำ
    $check_email = "SELECT * FROM customers WHERE email='$email'";
    $result = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists.";
        exit;
    }

    // ลงทะเบียนสมาชิก
    $password_hash = md5($password);
    $query = "INSERT INTO customers (username, password, first_name, last_name, gender, age, province, email) 
              VALUES ('$username', '$password_hash', '$first_name', '$last_name', '$gender', '$age', '$province', '$email')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
