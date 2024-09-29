<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.html');
    exit;
}

$id = $_GET['id'];

// ลบข้อมูลลูกค้า
$delete_query = "DELETE FROM customers WHERE id='$id'";

if (mysqli_query($conn, $delete_query)) {
    echo "Customer deleted successfully.";
    header('Location: showdata.php');
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
