<?php 

/**
 * 打印数组并终止程序
 * P --> print_r()
 * @param array $arr
 */
function P($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	exit;
}

/**
 * 打印数组
 * @param array $arr
 */
function W($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

/**
 * 输出字符串
 * E --> echo
 * @param string $str
 */
function E($str){
    echo $str;
}

/**
 * 判断变量是否存在
 * @param $var
 * @return bool
 */
function cz($var){
    if(isset($var) && !empty($var)){
        return true;
    }else{
        return false;
    }
}
