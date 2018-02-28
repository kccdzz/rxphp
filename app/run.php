<?php 
class Run{
	public function __construct($mod){
        error_reporting(~E_NOTICE);
        date_default_timezone_set('PRC'); //时区设置

		require_once dirname(__DIR__).'/core/require.php';	//PHP的核心代码
		require_once __DIR__.'/../config.php';	//配置文件

        //基础的controller/logic/model
        require_once  __DIR__.'/'.$mod.'/controller/BasicController.php';
        require_once  __DIR__.'/'.$mod.'/logic/BasicLogic.php';
        require_once  __DIR__.'/'.$mod.'/model/BasicModel.php';

		//定义文件路径常量
        define("ROOT", realpath(__DIR__."/../"));    //项目根目录文件路径
        define("SERVICE_PATH", ROOT.'/core/service');     //第三方插件所在路径
        define("STATIC_PATH", ROOT.'/static');            //static文件路径
        define("VIEW_DIR", __DIR__.'/'.$mod.'/view');     //smarty模版文件路径
        define("VIEW_C_DIR", __DIR__.'/'.$mod.'/view_c'); //smarty模版缓存文件路径
        define("_GOTO_", VIEW_DIR."/template/goto.php");  //跳转页面
        define("STR_IS_DEBUG",Conf::$db_cfg['is_show_sql']); //是否打印错误提示

        //定义网络URL常量
        define("_WEBHOST_", 'http://'.$_SERVER['HTTP_HOST']);
        define("STATIC_URL", 'http://'.$_SERVER['HTTP_HOST'].'/static/'.strtolower($mod));

		//获取参数
		if(empty($_GET['c'])){
			$c = 'Index';
		}else{
            $c = $_GET['c'];	//controller控制器
        }

        if(empty($_GET['a'])){
            $a = 'Index';
        }else{
            $a = $_GET['a'];	//action方法
        }

		$host = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		$url = $host.'?c='.$c.'&a=';
		
		$query = $host.'?'.$_SERVER['QUERY_STRING'];
		$query = explode('&', $query);
		foreach($query as $kq=>$vq){
			if(strstr($vq, 'p=')){
				unset($query[$kq]);
			}
		}
		$query = implode('&', $query);
		
		//组装常量
		define("_HOST_", $host);
		define("_QUERY_", $query);
		define("_URL_", $url);
		define("_CONTROLLER_", $c);
		define("_ACTION_", $a);
		define("_CONTENT_", VIEW_DIR."/{$c}/{$a}.php");

		$controller = $c.'Controller';
		$logic = $c.'Logic';
		$model = $c.'Model';

		$controller_path = __DIR__.'/'.$mod.'/controller/'.$controller.'.php';
		$logic_path = __DIR__.'/'.$mod.'/logic/'.$logic.'.php';
		$model_path = __DIR__.'/'.$mod.'/model/'.$model.'.php';
		if(file_exists($controller_path)){
			require_once $controller_path;
		}else{
			exit('404 NOT FOUND');
		}
		
		if(file_exists($logic_path)){
			require_once $logic_path;
		}else{
			exit('invalid params.');
		}
		
		if(file_exists($model_path)){
			require_once $model_path;
		}else{
			exit('invalid params.');
		}
		
		if(!method_exists($controller,$a)){
			exit('404 NOT FOUND');
		}

		//实例化controller
		$const = array(
            'tpl' => $c,
            'controller' => $controller,
            'logic' => $logic,
            'model' => $model,
		);
		$obj = new $controller($const);
		$obj->$a();
	}


	
	
 
}
