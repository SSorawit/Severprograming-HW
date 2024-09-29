<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.html');
    exit;
}

// รับค่าจากฟอร์ม
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // เข้ารหัสรหัสผ่าน
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$province = $_POST['province'];

// ตรวจสอบว่ามี username หรือ email ซ้ำหรือไม่
$check_query = "SELECT * FROM customers WHERE username = '$username' OR email = '$email'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo "Username or Email already exists!";
} else {
    // เพิ่มข้อมูลลูกค้าใหม่ในฐานข้อมูล
    $query = "INSERT INTO customers (username, password, first_name, last_name, email, gender, age, province) 
              VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$gender', '$age', '$province')";

    if (mysqli_query($conn, $query)) {
        echo "New customer added successfully!";
        header('Location: showdata.php'); // กลับไปที่หน้าข้อมูลลูกค้า
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
