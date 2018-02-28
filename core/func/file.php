<?php 

/**
 * 自定义文件相关的函数
 */


/**
 * 删除非空目录
 * $isDelFolder 是否删除目录
 */
function deldir($dirname,$isDelFolder=false){
    if(file_exists($dirname)) {
        $dir=opendir($dirname);
        while($filename=readdir($dir)){
            if($filename!="."&& $filename!=".."){
                $file=$dirname."/".$filename;
                unlink($file);
            }
        }
        closedir($dir);

        if($isDelFolder){
            rmdir($dirname);
        }
    }
}



