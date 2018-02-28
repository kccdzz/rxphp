<?php

class IndexModel{
    private static $tbname = 'goods';

    /**
     * 获取总数
     */
    public static function getCount($get){
        $where = self::_getWhereCondition($get);
        return M::queryCount(self::$tbname,$where);
    }

    /**
     * 获取列表
     */
    public static function getList($field,$get,$order,$limit=null){
        $where = self::_getWhereCondition($get);
        return M::queryList(self::$tbname,$field,$where,$order,$limit);
    }

    /**
     * 获取详情
     */
    public static function getInfo($field,$where){
        return M::queryInfo(self::$tbname,$field,$where);
    }

    /**
     * 获取字段
     */
    public static function getField($field,$id){
        return M::queryField(self::$tbname,$field,"id={$id}");
    }


    /**
     * 添加操作
     */
    public static function addData($data){
        return M::insert(self::$tbname,$data);
    }

    /**
     * 修改操作
     */
    public static function updateData($data){
        return M::update(self::$tbname,$data);
    }

    /**
     * 删除操作
     */
    public static function deleteData($id){
        return M::delete(self::$tbname,"id={$id}");
    }

    /**
     * 执行SQL语句
     */
    public static function execSql($sql){
        return M::execSql($sql);
    }



    private static function _getWhereCondition($get){
        $where = "1=1";

        if(cz($get['id'])){
            $where .= " AND id={$get['id']}";
        }
        if(cz($get['type'])){
            $where .= " AND type='{$get['type']}'";
        }
        if(cz($get['name'])){
            $where .= " AND name like '%{$get['name']}%' ";
        }

        return $where;
    }



}
