<?php
  const DBHOST = 'localhost';        // Tên máy chủ cơ sở dữ liệu
  const DBUSER = 'root';             // Tên người dùng MySQL
  const DBPASS = '';                 // MySQL Password
  const DBNAME = 'database';  // MySQL Password

  // Mạng nguồn dữ liệu
  $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . '';

  // Kết nối bằng PDO (Đầu ra dữ liệu PHP)
  try {
    $conn = new PDO($dsn, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
  }
?> 
