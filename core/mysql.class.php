<?php 

/**
 * MySQL数据库的基本操作
 * @author renxing
 */

class Mysql{
	
	private $conn; //数据库连接属性
	private $is_show_sql; //是否输出执行的SQL语句
	private $echo_sql; //要输出的SQL语句
	
	//构造函数
	public function __construct($db_cfg){
		$this->conn = connMySQL($db_cfg);
		mysqli_query($this->conn, "set names utf8");
		$this->is_show_sql = $db_cfg['is_show_sql'];
	}


	/**
	 * 查询全部数据
	 * 
	 */
	public function query($sql){
		$this->echo_sql .= '[SQL] '.$sql.'<br>';
		
		$result = mysqli_query($this->conn, $sql);
		
		$res = array();
		while ($row = @mysqli_fetch_assoc($result)){
			$res[] = $row;
		}
		return $res;
	}
	

	/**
	 * 执行操作(insert/update/delete)
	 */
    public function execute($sql,$type=null){
		$this->echo_sql .= '[SQL] '.$sql.'<br>';

		$res = mysqli_query($this->conn, $sql);
		if($type == 'insert'){
            return mysqli_insert_id($this->conn);
        }else{
            return $res;
        }
	}

	
	//析构函数：关闭数据库
	public function __destruct(){
		mysqli_close($this->conn);
		if($this->is_show_sql){
			echo $this->echo_sql;
		}
	}
	
}