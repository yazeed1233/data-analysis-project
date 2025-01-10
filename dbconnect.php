<?php
$servername = "localhost";
$username = "root"; // اسم المستخدم الخاص بك
$password = "my-secret-password"; // كلمة المرور الخاصة بك
$dbname = "myproject"; // اسم قاعدة البيانات

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>


