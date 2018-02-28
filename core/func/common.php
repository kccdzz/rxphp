<?php 

/**
 * 组装insert语句的关键部分
 */
function getInsertData($data){
	$field = $values = '';
	foreach ($data as $k=>$v){
		$field .= "`{$k}`,";
		$values .= "'{$v}',";
	}
	$field = substr($field, 0, -1);
	$values = substr($values, 0, -1);
	
	return array($field,$values);
}

/**
 * 组装update语句的关键部分
 */
function getUpdateData($data){
	$str = "";
	foreach ($data as $k=>$v){
		$str .= "$k='{$v}',";
	}
	$str = substr($str, 0, -1);
	
	return $str;
}

/**
 * 分页关键部分
 * @param $count 记录总数
 * @param $page 当前第几页，刚开始是1
 * @param $page_size 每页显示的条数,默认是10
 */
function getPageLimit($count,$page,$page_size=10){
	$page_count = ceil($count / $page_size); //总页数
	if($page < 1){
		$page = 1;
	}
	if($page > $page_count){
		$page = $page_count;
	}
	$next_page = $page==$page_count ? $page_count : $page+1; //下一页
	$front_page = $page==1 ? 1 : $page - 1; //上一页
	$start = ($page - 1) * $page_size;
	$limit = "$start,$page_size";

	//分页数组
    $page_list = array();
    for($i=1;$i<=$page_count;$i++){
        $page_list[] = $i;
    }

	$res = array(
		'limit' => $limit, //分页信息
		'page' => $page, //当前第几页
        'page_size' => $page_size, //每页显示多少条
		'page_count' => $page_count, //总页数
        'page_list' => $page_list, //分页数组
		'count' => $count, //总记录数
		'front_page' => $front_page, //上一页
		'next_page' => $next_page, //下一页
	);
	return $res;
}


/**
 * 输出JSON
 * $bool true/false
 * $msg 错误信息
 * $data 返回的数组array
 */
function retJson($bool,$msg='',$data=array()){
    $res = array(
        'bool' => $bool,
        'msg' => $msg,
        'data' => $data,
    );

    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    exit;
}



