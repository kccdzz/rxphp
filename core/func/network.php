<?php
/* 自定义网络相关的函数 */

//获取真实的客户端IP地址
function getRealIP(){
    $ip=getenv('REMOTE_ADDR');
    $ip_ = getenv('HTTP_X_FORWARDED_FOR');
    if (($ip_ != "") && ($ip_ != "unknown")){
        $ip=$ip_;
    }
    return $ip;
}





