<?php 

class BasicController{
	/**
     * 这里主要是登录相关的入口关键部分的代码
     */
    public $smarty;

	public function __construct($tpl){
        session_start();

        /*验证是否登录*/
        //your code ...


        /*Smarty模板配置*/
        $common = array(
            'url' => _URL_,
            'host' => _HOST_,
            'webhost' => _WEBHOST_,
            'static_url' => STATIC_URL,
        );

        require_once ROOT.'/core/smarty/SmartyBC.class.php';
        $this->smarty = new SmartyBC();
        $this->smarty->left_delimiter="<{";
        $this->smarty->right_delimiter="}>";
        $this->smarty->template_dir=VIEW_DIR."/{$tpl}/";
        $this->smarty->compile_dir=VIEW_C_DIR."/{$tpl}/";

        $this->smarty->assign('common',$common);

    }

}
