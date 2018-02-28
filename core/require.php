<?php 

/**
 * 核心入口文件
 */

require_once __DIR__.'/common.php';
require_once __DIR__.'/conn_db.php';
require_once __DIR__.'/mysql.class.php';


//core/common目录下的所有函数文件
$core_common_dir = __DIR__.'/func';
$core_common_files = getAllFiles($core_common_dir);
foreach($core_common_files as $c_com_key=>$c_com_val){
    require_once $core_common_dir.'/'.$c_com_val;
}


/**
 * 获取目录下的所有文件名
 */
function getAllFiles($dir){
    $handler = opendir($dir);
    $list = array();
    while( ($filename = readdir($handler)) !== false ) {
        if($filename != "." && $filename != ".."){
            $list[] = $filename;
        }
    }

    closedir($handler);
    return $list;
}