<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="wrap"> 
	<div class="header"></div>
	<div class="content"> 
		<img src="/public/home/images/shangke_conew1.jpg">
	</div>
	<div class="footer"><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); ?>:<?php echo ($vo["tel"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?></div>
</div>
	
</body>
</html>