<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $member_number = isset($_POST['member_number']) ? $_POST['member_number'] : "";
    $date = isset($_POST['date']) ? $_POST['date'] : "";
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
    $surname = isset($_POST['surname']) ? $_POST['surname'] : "";
    $dob = isset($_POST['dob']) ? $_POST['dob'] : "";
    $age = isset($_POST['age']) ? $_POST['age'] : 0;
    $sex = isset($_POST['sex']) ? $_POST['sex'] : "";
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : "";
    $agency = isset($_POST['agency']) ? $_POST['agency'] : "";
    $businesstype = isset($_POST['businesstype']) ? $_POST['businesstype'] : "";
    $addresscom = isset($_POST['addresscom']) ? $_POST['addresscom'] : "";
    $mobilephone = isset($_POST['mobilephone']) ? $_POST['mobilephone'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";

    // แสดงข้อมูลในรูปแบบตาราง
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>หัวข้อ</th><th>ข้อมูล</th></tr>";
    echo "<tr><td>เลขที่สมาชิก</td><td>$member_number</td></tr>";
    echo "<tr><td>วัน/เดือน/ปี</td><td>$date</td></tr>";
    echo "<tr><td>ชื่อ</td><td>$first_name</td></tr>";
    echo "<tr><td>นามสกุล</td><td>$surname</td></tr>";
    echo "<tr><td>วันเกิด</td><td>$dob</td></tr>";
    echo "<tr><td>อายุ</td><td>$age</td></tr>";
    echo "<tr><td>เพศ</td><td>$sex</td></tr>";
    echo "<tr><td>สัญชาติ</td><td>$nationality</td></tr>";
    echo "<tr><td>หน่วยงาน/บริษัท</td><td>$agency</td></tr>";
    echo "<tr><td>ประเภทธุรกิจ</td><td>$businesstype</td></tr>";
    echo "<tr><td>ที่อยู่บริษัท</td><td>$addresscom</td></tr>";
    echo "<tr><td>โทรศัพท์/มือถือ</td><td>$mobilephone</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "</table>";

    // เชื่อมต่อฐานข้อมูล
    $servername = "localhost"; // ชื่อเซิร์ฟเวอร์ของคุณ
    $username = "root"; // ชื่อผู้ใช้ MySQL ของคุณ
    $password = ""; // รหัสผ่าน MySQL ของคุณ
    $dbname = "dbhw8"; // ชื่อฐานข้อมูลของคุณ

    // สร้างการเชื่อมต่อ
    $conn = new mysqli($servername, $username, $password, $dbname);

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
    }

    // เตรียมคำสั่ง SQL
    $sql = "INSERT INTO members (member_number, date, first_name, surname, dob, age, sex, nationality, agency, businesstype, addresscom, mobilephone, email)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // เตรียม statement
    $stmt = $conn->prepare($sql);

    // ผูกค่ากับ statement (bind parameters)
    $stmt->bind_param("sssssiissssss", $member_number, $date, $first_name, $surname, $dob, $age, $sex, $nationality, $agency, $businesstype, $addresscom, $mobilephone, $email);

    // ดำเนินการ statement
    if ($stmt->execute()) {
        echo "บันทึกข้อมูลสำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }

    // ปิด statement และการเชื่อมต่อ
    $stmt->close();
    $conn->close();
} else {
    echo "ไม่มีข้อมูลที่ถูกส่งมา";
}
?>
