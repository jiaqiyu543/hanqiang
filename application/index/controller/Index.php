<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\admin\model\TsinghuaNews;
use app\admin\model\TsinghuaRotation;
use think\Db;



class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    protected $AppID = "wxf97f7b95e24ec36b";
    protected $AppSecret = "791f883d218a4fee715e5c3bfbb608d3";

    public function _initialize()
    {
        parent::_initialize(); 
        $web_name = config('site.name');
        $beian = config('site.beian');
        $this->assign('web_name',$web_name);
        $this->assign('beian',$beian);
    }
    public function auth()
    {
      $code = $_GET['code'];
      # 获取accessToken和openID
      $api = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->AppID."&secret=".$this->AppSecret."&code=".$code."&grant_type=authorization_code";
      $text =  file_get_contents($api);
      $js_obj = json_decode($text);
      
      if(!property_exists($js,'errcode')){
        $access_token = $js_obj -> access_token ;
        $openid =  $js_obj -> openid ;
        $refresh_token = $js_obj -> refresh_token ;
        $url_info = "https://api.weixin.qq.com/sns/userinfo?access_token=". $access_token ."&openid=".$openid."&lang=zh_CN";
        $info_text = file_get_contents($url_info);
        echo $info_text;
        
      }
      else{
        echo("获取access_token出错了");
      }
      
    }

    public function index()
    {
        
        $news =array_slice(TsinghuaNews::all(),0,4);
        foreach ($news as $key => $value) {
            if ( mb_strlen($news[$key]['introduction']) > 100 ) {
                $news[$key]['introduction'] = mb_substr($news[$key]['introduction'],0,100,"utf-8") . '...';
            }
           
        }
        $this->assign('news',$news);
        return $this->view->fetch();
    }

    public function news($page=null)
    {
        $page = 1;
        $New = new TsinghuaNews;
        $page_news = Db('tsinghua_news') ->paginate(10,$page)->each(function($item, $key){
            $item['create_time'] = 'News on ' . date('j  M , Y',$item['create_time']);
            return $item;
        });
        
        $this->assign('data',$page_news);
        return $this->view->fetch();
    }

    public function new($id)
    {
        return $this->view->fetch();
    }
    public function publication($id)
    {
        return $this->view->fetch();
    }

    public function resea($id)
    {
        return $this->view->fetch();
    }
    public function members()
    {
        $page = 1;
        $New = new TsinghuaNews;
        $page_news = Db('tsinghua_news') ->paginate(10,$page)->each(function($item, $key){
            $item['create_time'] = 'News on ' . date('j  M , Y',$item['create_time']);
            return $item;
        });
        
        $this->assign('data',$page_news);
        return $this->view->fetch();
    }

    public function research()
    {
        return $this->view->fetch();
    }

    public function links()
    {
        return $this->view->fetch();
    }


    public function member($id)
    {
        
        return $this->view->fetch();
    }
    
    public function facilities()
    {
        return $this->view->fetch();
    }
    
    public function contact_us()
    {
        return $this->view->fetch('about_me');
    }

    public function gallery()
    {
        $news =array_slice(TsinghuaNews::all(),0,4);
        foreach ($news as $key => $value) {
            if ( mb_strlen($news[$key]['introduction']) > 100 ) {
                $news[$key]['introduction'] = mb_substr($news[$key]['introduction'],0,100,"utf-8") . '...';
            }
           
        }
        $this->assign('news',$news);
        return $this->view->fetch();
    }
    public function test()
    {
        var_dump(config('site'));
    }

    public function publications()
    {
        return $this->view->fetch();
    }

    //首页轮播图页面
    public function rotation()
    {
        $imgs = TsinghuaRotation::all(); //Db::table('fa_tsinghua_rotation')->select();
        $this->view->assign('imgs',$imgs);
        return $this->view->fetch('lunbo');
    }


}
