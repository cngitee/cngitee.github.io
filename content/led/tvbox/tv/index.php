<?php
//header("Location: live.txt");
//exit;//防止下方的代码执行，中断执行
//include_once('live.txt');//格式会变化
$file = '../live.txt'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
$cbody[$i]=str_replace('mitv','p2p',$cbody[$i]);//修改视频编码格式
echo $cbody[$i];echo "\r\n"; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}