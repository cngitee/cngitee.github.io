<?php
// 格式：xxx.com/路径/api.php?id=频道
$encoded = "aHR0cCUzQS8vcGhwLmpkc2hpcGluLmNvbSUzQTg4ODAvY2h1ZGlhbi5waHAlM0Y=";
$decoded = base64_decode($encoded);
$decoded=str_replace('%3A',':',$decoded);
$decoded=str_replace('%3F','?',$decoded);
header("Location: $decoded".$_GET["id"]);exit;