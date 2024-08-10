<?php
$html = file_get_contents('https://www.gdtv.cn/ac71d064-ba07-4276-ba30-738160d4b7dd');  
echo $html; 

/*
//By mxdyeah.
//https://discuz.mxdyeah.top/mxdyeah_discuz_thread-38-1-1.html
header("content-type:text/html;charset=utf-8");//添加编码格式，防止乱码
header('Access-Control-Allow-Origin:*');//请求头
$text=file_get_contents('https://www.gdtv.cn/tvChannelDetail/51');/*取得指定地址的內容，储存至文本*/
preg_match_all('/<video ">(.*?)<\/video>/', $text, $match);//正则表达式，储存至二维数组match
/*[0]输出网页代码，[1]则直接显示结果*/
//echo "+86 16521686454"."<hr>";
print_r($match)[0];exit; //打印出结果;



/*
$cityId = '5A';
$playId= $_GET['id'];
$relativeId = $playId;
$type='1';
$appId = "kdds-chongqingdemo";
$url ='http://portal.centre.bo.cbnbn.cn/others/common/playUrlNoAuth?cityId=5A&playId='.$playId.'&relativeId='.$relativeId.'&type=1';
$curl = curl_init();



$timestamps = number_format(microtime(true), 3, '', '');
$sign =md5('aIErXY1rYjSpjQs7pq2Gp5P8k2W7P^Y@appId' . $appId . "cityId" . $cityId. "playId" . $playId . "relativeId" . $relativeId . "timestamps" . $timestamps . "type" . $type);
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'appId: kdds-chongqingdemo',
    'sign: '.$sign,
    'timestamps:'.$timestamps,
    'Content-Type: application/json;charset=utf-8'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$url = (json_decode($response));
echo $curl;
//header('location:'.$url->data->result->protocol[0]->transcode[0]->url);
?>
