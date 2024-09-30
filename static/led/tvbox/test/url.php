<title>TVBox</title>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<?php
//网络直播电视
$ch = curl_init();
$timeout = 5;
curl_setopt ($ch, CURLOPT_URL, 'https://ghproxy.net/raw.githubusercontent.com/PizazzGY/TVBox_warehouse/main/live.txt');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
echo $file_contents;
/*
//每天下午12点到晚上23点刷新
date_default_timezone_set("Asia/Shanghai");
if(date('G')>12 && date('G')<23){
//写入本地TXT
$myfile = fopen("live.txt", "w+") or die("Unable to open file!");//这个是根目录生成文件，w参数覆盖
fwrite($myfile, $file_contents);//写入内容
fclose($myfile);//关闭该操作
//写入操作完成
}
  else
  {
  //echo "12点前输出0";
}