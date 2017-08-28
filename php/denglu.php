<?php
	header("content-type:text/html;charset=utf-8");
$name = $_POST["username"];
$psw = $_POST["password"];
$arr =array(array("username" => "13500000000","password" => "123456"),array("username" => "13300000000","password"=>"123456")); 

foreach($arr as $item){
	if($item["username"] == $name && $item["password"] == $psw){
		echo "1";
		break;
	}else{
		echo "0";
	}
}
?>