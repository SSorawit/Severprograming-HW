<?php
session_start();
session_destroy();  // ลบ session ทั้งหมด
header('Location: index.html');  // กลับไปยังหน้า login
exit;
?>
