<?php
	header("content-type:text/html;charset=utf-8");
$name = $_GET["username"];
$psw = $_GET["password"];
$arr_username  = array("13500000000","13900000000","13300000000","15200000000","13500000001","13900000001","13300000001","15200000001");
$arr_password  = array("abc1234","aaa22222","aaaa33333","bbbb44444");

if(in_array($name,$arr_username) && in_array($psw,$arr_password)){
	echo "1";
}else{
	echo "0";
}
?>