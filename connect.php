<?php
$serverName = "localhost"; // เชื่อมต่อกับ MySQL บนเซิร์ฟเวอร์ localhost
$username = "root"; // ชื่อผู้ใช้ MySQL
$password = ""; // รหัสผ่าน MySQL
$database = "sqlInjectionTest"; // ชื่อของฐานข้อมูลที่คุณต้องการเชื่อมต่อ

// เชื่อมต่อกับ MySQL
$conn = mysqli_connect($serverName, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("การเชื่อมต่อ MySQL ล้มเหลว: " . mysqli_connect_error());
}

// echo "การเชื่อมต่อ MySQL สำเร็จ!";
// คุณสามารถทำงานกับฐานข้อมูล MySQL ที่นี่
// เมื่อเสร็จสิ้นการใช้งาน, อย่าลืมปิดการเชื่อมต่อด้วย mysqli_close($conn);
?>
