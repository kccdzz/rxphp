<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>跳转页面</title>
</head>

<body>

	 <?php if($res){ ?>
	 
	 <p style="color:green">
	 	操作成功，点击 <a href="<?php echo _URL_.$href?>"><b>这里</b></a> 跳转...
	 </p>
	 
	 <?php }else{ ?>
	 
	 <p style="color:red">
	 	操作失败，点击 <a href="javascript:history.back()"><b>这里</b></a> 返回...
	 </p>
	 
	 <?php } ?>

</body>
</html>
            