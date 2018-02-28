<?php 

class Conf{

    //访问域名
    public static $host = 'http://xxx.com';

	//数据库配置信息
	public static $db_cfg = array(
		'host' => '127.0.0.1',
		'user' => 'root',
		'password' => 'root',
		'db_name' => 'rxphp',
		'port' => '3306',
		'is_show_sql' => false, //是否输出查询的SQL语句
	);

}


