<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2019/6/5
 * Time: 14:04
 */
namespace app\web\controller;
use  think\Controller;
class Index extends Controller{
    public function index(){
     return   $this->fetch();
    }
    public function page1(){
        return   $this->fetch();
    }
    public function page2(){
        return   $this->fetch();
    }
}