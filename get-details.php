<?php
// 引入数据库连接
require_once "db_connect.php";

// 检查是否有 POST 请求并且 'id' 参数存在
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // 准备 SQL 查询
    $sql = "SELECT * FROM images JOIN author ON images.author_id = author.a_id WHERE images.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $details = $result->fetch_assoc();

    // 设置响应头为 JSON
    header('Content-Type: application/json');
    // 返回查询结果
    echo json_encode($details);
} else {
    // 如果没有提供 'id'，返回错误
    echo json_encode(['error' => 'No ID provided']);
}
