<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo 'My Home Application';
        // $user = M("admin_user") ->order('user_id desc') ->select();
        // print_r($user);
        $this ->display();
    }
}