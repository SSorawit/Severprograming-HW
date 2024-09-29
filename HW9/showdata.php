<?php
session_start();
include 'db_connect.php';

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินเข้ามาหรือไม่
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit;
}

// แยกการแสดงผลสำหรับ admin และ customer
if ($_SESSION['role'] == 'admin') {
    // แสดงข้อมูลสำหรับ admin
    $query = "SELECT * FROM customers";
    $result = mysqli_query($conn, $query);
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin - Customer Data</title>
    </head>
    <body>
        <h2>Customer Data</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['first_name']; ?></td>
                <td><?= $row['last_name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <!-- ฟอร์มเพิ่มลูกค้าใหม่ -->
        <h3>Add New Customer</h3>
        <form action="add_customer.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required><br><br>
            
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            
            <label for="gender">Gender:</label>
            <input type="text" name="gender" required><br><br>
            
            <label for="age">Age:</label>
            <input type="number" name="age" required><br><br>
            
            <label for="province">Province:</label>
            <input type="text" name="province" required><br><br>

            <button type="submit">Add Customer</button>
        </form>
        <!-- ปุ่ม Logout -->
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </body>
    </html>

    <?php
} elseif ($_SESSION['role'] == 'customer') {
    // แสดงข้อมูลสำหรับ customer
    $username = $_SESSION['username'];
    $query = "SELECT * FROM customers WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $customer = mysqli_fetch_assoc($result);
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Customer Dashboard</title>
    </head>
    <body>
        <h2>Welcome, <?= $customer['first_name'] . " " . $customer['last_name']; ?></h2>
        <p>Email: <?= $customer['email']; ?></p>
        <p>Gender: <?= $customer['gender']; ?></p>
        <p>Age: <?= $customer['age']; ?></p>
        <p>Province: <?= $customer['province']; ?></p>
        <!-- ปุ่ม Logout -->
        <form action="logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </body>
    </html>

    <?php
} else {
    // กรณี role ไม่ถูกต้อง ส่งกลับไปยังหน้า login
    header('Location: index.html');
    exit;
}
?>
