<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\admin\model\TsinghuaNews;
use app\admin\model\TsinghuaRotation;
use think\Db;



class Zhindex extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize(); 
        $web_name = config('site.name');
        $beian = config('site.beian');
        $this->assign('web_name',$web_name);
        $this->assign('beian',$beian);
    }

    public function index()
    {
        
        $news =array_slice(TsinghuaNews::all(),0,3);
        $this->assign('news',$news);
        return $this->view->fetch();
    }

    public function news($page=null)
    {
        // var_dump($page);

        return $this->view->fetch();
    }

    public function about_me()
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
