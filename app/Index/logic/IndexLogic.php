<?php

class IndexLogic extends BasicLogic {
    private $model;
    public function __construct($const){
        parent::__construct($const);
        $this->model = new $const['model']($const);
    }


    public function getList($field,$get,$order,$limit=null){
        $list = $this->model::getList($field,$get,$order,$limit);
        $list = $this->handleDataList($list);
        return $list;
    }

    public function getInfoById($id){
        $info = $this->model::getInfo("*","id={$id}");
        if(!$info){
            return array();
        }
        $info = $this->handleDataList(array($info));
        return $info[0];
    }

    public function getField($field,$id){
        return $this->model::getField($field,$id);
    }

    public function addData($post,$files=null){
        $data = $this->handlePostData($post,$files);
        return $this->model::addData($data);
    }

    public function updateData($post,$files=null){
        $data = $this->handlePostData($post,$files);
        return $this->model::updateData($data);
    }


    /*-------------------- 私有调用 --------------------*/
    //获取文章信息后的数据处理
    private function handleDataList($list){
        if(!$list){
            return array();
        }

        foreach($list as $k=>$v){
            $list[$k]['create_time'] = date("Y-m-d H:i:s",$v['create_time']);
            $list[$k]['update_time'] = $v['update_time']==0?'--':date("Y-m-d H:i:s",$v['update_time']);
        }
        //your code...

        return $list;
    }


    //执行添加/修改 操作的post数据的处理
    private function handlePostData($post,$files){
        //your code...

        return $post;
    }



}
