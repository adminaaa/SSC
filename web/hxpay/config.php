<?php
$config=[
	'id'=>21010,
	'key'=>'H29IWunBCPpEB6c41GyRPoKjB4MaZ2Hm',//token
	'key2'=>'w7N3jIXp5sfbtCF3P7xQG96fyAj94Foj',//通信密钥
	'r_url'=>'http://61cpyl.com',//"http://{$_SERVER['SERVER_NAME']}/codepay/return.php",
	'n_url'=>'http://61cpyl.com/hxpay/notify.php',//"http://{$_SERVER['SERVER_NAME']}/codepay/notify.php",
	'api_url'=>'https://www.zhapay.com/pay.html',
];
function curl_request($url,$method='get',$data=null,$https=true){
    //1.初识化curl
    $ch = curl_init($url);
    //2.根据实际请求需求进行参数封装
    //返回数据不直接输出
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //如果是https请求
    if($https === true){
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
    }
    //如果是post请求
    if($method === 'post'){
        //开启发送post请求选项
        curl_setopt($ch,CURLOPT_POST,true);
        //发送post的数据
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    }
    //3.发送请求
    $result = curl_exec($ch);
    //4.返回返回值，关闭连接
    curl_close($ch);
    return $result;
}