<?php
/**
 * 商品信息Controller
 */
class IndexController extends BasicController {
    private $logic;
    public function __construct($const){
        parent::__construct($const['tpl']);
        $this->logic = new $const['logic']($const);
    }

    /**
     * 商品列表
     */
    public function index(){
        $get = $_GET;

        //当前第几页
        if(isset($get['p'])){
            $p = $get['p'];
        }else{
            $p = 1;
        }
        //每页显示多少条
        $size = 10;
        //获取总数
        $count = $this->logic->getCount($get);

        //获取列表
        $list = $pages = array();
        if($count > 0){
            $pages = getPageLimit($count,$p,$size);
            $limit = $pages['limit'];
            $order = "create_time desc,id desc";
            $list = $this->logic->getList("*",$get,$order,$limit);
        }

        //P($list);
        $this->smarty->assign("title","商品信息列表");
        $this->smarty->assign("list",$list);
        $this->smarty->assign("get",$get);
        $this->smarty->assign("p",$pages);
        $this->smarty->display("index.html");

    }

    /**
     * 添加或修改界面
     */
    public function add(){
        if(!empty($_GET['id'])){
            $title = "编辑商品信息";
            $info = $this->logic->getInfoById($_GET['id']);
            $this->smarty->assign("info",$info);
        }else{
            $title = "添加商品信息";
        }

        $this->smarty->assign("title",$title);
        $this->smarty->display("add.html");
    }


    /**
     * 添加或修改操作
     */
    public function add_exec(){
        if(!empty($_POST['id'])){
            $_POST['update_time'] = time();
            $res = $this->logic->updateData($_POST,$_FILES);
        }else{
            $_POST['create_time'] = time();
            $res = $this->logic->addData($_POST,$_FILES);
        }
        $href = 'index';
        include _GOTO_;
    }

    /**
     * 删除操作
     */
    public function del(){
        $res = $this->logic->deleteData($_GET['id']);
        $href = 'index';
        include _GOTO_;
    }





}
