<?php
// 資料庫連線參數
$host = 'localhost';
$dbname = 'web99';
$username = 'root';
$password = 'your_password';

try {
    // 嘗試連線資料庫
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // 如果連線成功，返回成功訊息
    echo json_encode(['status' => 'success', 'message' => '資料庫連線成功！']);
} catch (PDOException $e) {
    // 連線失敗時，返回錯誤訊息
    echo json_encode(['status' => 'error', 'message' => '資料庫連線失敗: ' . $e->getMessage()]);
}
?>
