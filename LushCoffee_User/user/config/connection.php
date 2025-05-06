<?php
$servername = "localhost";
$username = "root";  // Tên người dùng MySQL của bạn
$password = "";      // Mật khẩu MySQL của bạn
$dbname = "coffee_shop_2";  // Tên cơ sở dữ liệu bạn đã tạo

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thiết lập charset để tránh lỗi font tiếng Việt
$conn->set_charset("utf8");

?>

