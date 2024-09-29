<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.html');
    exit;
}

$id = $_GET['id'];

// ดึงข้อมูลลูกค้าที่จะแก้ไข
$query = "SELECT * FROM customers WHERE id='$id'";
$result = mysqli_query($conn, $query);
$customer = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $province = $_POST['province'];
    $email = $_POST['email'];

    // อัปเดตข้อมูล (ยกเว้น username และ password)
    $update_query = "UPDATE customers SET first_name='$first_name', last_name='$last_name', gender='$gender', age='$age', province='$province', email='$email' WHERE id='$id'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "Customer updated successfully.";
        header('Location: showdata.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h2>Edit Customer</h2>
    <form method="POST">
        First Name: <input type="text" name="first_name" value="<?= $customer['first_name'] ?>" required><br>
        Last Name: <input type="text" name="last_name" value="<?= $customer['last_name'] ?>" required><br>
        Gender: 
        <select name="gender" required>
            <option value="Male" <?= $customer['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $customer['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select><br>
        Age: <input type="number" name="age" value="<?= $customer['age'] ?>" required><br>
        Province: <input type="text" name="province" value="<?= $customer['province'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $customer['email'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
