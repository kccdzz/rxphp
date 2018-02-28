<?php 

class BasicLogic{

    private $model;
    public function __construct($const){
        $this->model = new $const['model'];
    }


    /**
     * 获取数据总数
     */
    public function getCount($get){
        return $this->model::getCount($get);
    }

    /**
     * 获取数据列表
     */
    public function getList($field,$get,$order,$limit=null){
        return $this->model::getList($field,$get,$order,$limit);
    }

    /**
     * 获取数据详情
     */
    public function getInfo($id){
        return $this->model::getInfo("*","id={$id}");
    }

    /**
     * 获取数据字段
     */
    public function getField($field,$id){
        return $this->model::getField($field,"id={$id}");
    }

    /**
     * 添加操作
     */
    public function addData($data){
        return $this->model::addData($data);
    }

    /**
     * 修改操作
     */
    public function updateData($data){
        return $this->model::updateData($data);
    }

    /**
     * 删除操作
     */
    public function deleteData($id){
        return $this->model::deleteData($id);
    }

    /**
     * 执行SQL语句
     */
    public function execSql($sql){
        return $this->model::execSql($sql);
    }


}
