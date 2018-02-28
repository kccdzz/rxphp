<?php 

//MySQL数据库连接信息
function connMySQL($db_cfg){
	$host = $db_cfg['host'];
	$user = $db_cfg['user'];
	$password = $db_cfg['password'];
	$db_name = $db_cfg['db_name'];
	$port = $db_cfg['port'];
	$conn = mysqli_connect($host, $user, $password, $db_name, $port);
	if($conn){
		//echo 'OK';
		return $conn;
	}else{
		echo 'DB connect failed...';
		exit;
	}
}

//memcached连接信息
function connMemcached($db_cfg){

}

//redis连接信息
function connRedis($db_cfg){

}