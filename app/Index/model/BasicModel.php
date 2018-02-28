<?php 

class M{

    /**
     * 实例化数据库
     */
	public static function initDB(){
        $db = new Mysql(Conf::$db_cfg);
		return $db;
	}


    /**
     * 查询数据总数count
     * @param   $tbname string  表名
     * @param   $where  string  where条件
     * @param   $group  string  group by分组
     * @param   $having string  having条件
     * @return  $rs     int     返回数据条数
     */
    public static function queryCount($tbname,$where=null,$group=null,$having=null){
        $sql = "SELECT count(*) as nums FROM {$tbname}";
        if($where){
            $sql .= " WHERE {$where}";
        }
        if($group){
            $sql .= " GROUP BY {$group}";
        }
        if($having){
            $sql .= " HAVING {$having}";
        }
        $res = self::initDB()->query($sql);
        if($res){
            $rs = $res[0]['nums'];
        }else{
            $rs = 0;
        }

        return $rs;
    }

	/**
	 * 查询数据列表
     * @param   $tbname string  表名
     * @param   $field  string  字段
     * @param   $where  string  where条件
     * @param   $order  string  order by 排序
     * @param   $limit  string  limit 分页
     * @param   $group  string  group by分组
     * @param   $having string  having条件
     * @return  $rs     array() 返回数据结果集列表数组
	 */
	public static function queryList($tbname,$field="*",$where=null,$order=null,$limit=null,$group=null,$having=null){
	    $sql = "SELECT {$field} FROM {$tbname}";
        if($where){
            $sql .= " WHERE {$where}";
        }
        if($order){
            $sql .= " ORDER BY {$order}";
        }
        if($limit){
            $sql .= " LIMIT {$limit}";
        }
        if($group){
            $sql .= " GROUP BY {$group}";
        }
        if($having){
            $sql .= " HAVING {$having}";
        }
        $rs = self::initDB()->query($sql);
        return $rs;
	}

    /**
     * 查询数据详情
     * @param   $tbname string  表名
     * @param   $field  string  字段
     * @param   $where  string  where条件
     * @return  $rs     array() 返回数据结果详情数组
     */
    public static function queryInfo($tbname,$field="*",$where=null){
        $sql = "SELECT {$field} FROM {$tbname}";
        if($where){
            $sql .= " WHERE {$where}";
        }
        $sql .= " LIMIT 1";

        $info = self::initDB()->query($sql);

        if($info){
            $rs = $info[0];
        }else{
            $rs = array();
        }
        return $rs;
    }

    /**
     * 查询数据字段
     * @param   $tbname string  表名
     * @param   $field  string  字段
     * @param   $where  string  where条件
     * @return  $rs     string  返回数据结果字段字符串
     */
    public static function queryField($tbname,$field,$where=null){
        $sql = "SELECT {$field} FROM {$tbname}";
        if($where){
            $sql .= " WHERE {$where}";
        }
        $sql .= " LIMIT 1";

        $info = self::initDB()->query($sql);

        if($info){
            $rs = $info[0][$field];
        }else{
            $rs = "";
        }

        return $rs;
    }

    /**
     * 按照SQL语句查询
     * @param   $sql    SQL语句
     * @return  $rs     array() 返回数据结果集列表数组
     */
    public static function query($sql){
        $rs = self::initDB()->query($sql);
        return $rs;
    }


	/**
	 * 添加操作
	 */
	public static function insert($tbname,$data){
        $ins = getInsertData($data);
		$sql = "INSERT INTO {$tbname} ({$ins[0]}) VALUES ({$ins[1]})";
        return self::initDB()->execute($sql,'insert');
	}

	/**
	 * 修改操作
	 */
	public static function update($tbname,$data,$where=null){
        if(!$where){
            $where = "id={$data['id']}";
            unset($data['id']);
        }
        $update_str = getUpdateData($data);
		$sql = "UPDATE {$tbname} SET {$update_str} WHERE {$where}";
        return self::initDB()->execute($sql);
	}

	/**
	 * 删除操作
	 */
	public static function delete($tbname,$where){
		$sql = "DELETE FROM {$tbname} WHERE {$where}";
        return self::initDB()->execute($sql);
	}

    /**
     * 执行SQL语句
     */
	public static function execSql($sql){
        return self::initDB()->execute($sql);
    }

	
}
