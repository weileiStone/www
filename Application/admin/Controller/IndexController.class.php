<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function tel(){
    	$tel=M('tel');
    	$data['name']='stone';
    	$data['tel']='1223134';
	    if($tel->add($data)){
	    	echo "right";
	    }else{
	    	echo"error";
	    }	;
    }

    public function tel1(){
    	$tel=M('tel');
    	$data=$tel->where('id>1')->limit(3)->select();
    	//echo "<pre>";
    	//var_dump($res);
    	$this->assign('data',$data);
    	$this->display();
    }

    public function tel2(){
    	$tel=M('tel');
    	$data[]=array('name'=>'leaf','tel'=>'6454636');
    	$data[]=array('name'=>'qwer','tel'=>'4652313');
    	if($tel->addAll($data)){
    		echo "rg";
    	}else{
    		echo "error";
    	}
    }
    public function tel3(){
    	$tel=M('tel');
    	$res=$tel->where('id>1')->select();
    	if($res){
    		echo "<pre>";
    		var_dump($res);
    	}else{
    		echo "error";
    	}
    }
}