<?php
// 获取前端 JSON 数据
$data = json_decode(file_get_contents("php://input"), true);
$lat = $data['latitude'];
$lon = $data['longitude'];
$acc = $data['accuracy'];
$time = date("Y-m-d H:i:s");

// 构造记录内容
$logEntry = "[$time] 纬度：$lat，经度：$lon，精度：$acc 米\n";

// 记录到 log.txt 文件中
file_put_contents("location-log.txt", $logEntry, FILE_APPEND);

// 可选：返回成功提示
echo "位置已记录";
?>
