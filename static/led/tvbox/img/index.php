<?php
//header("Location: ./N14_0598.png");exit;//防止下方的代码执行，中断执行
// 设置不缓存页面
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
// 选择随机图片
$url ="https://hkfx.net/led/tvbox/img/";//远程路径
$images = array($url.'7561bf03.jpeg', $url.'lyf.jpeg',$url.'N14_0598.jpeg');//文件名称
$image = array_rand($images);
// 输出图片
header('Content-Type: image/jpeg');
readfile($images[$image]);