<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 12:46
 */

namespace Common\Controller;

use Think\Controller;

class adminController extends Controller
{
    //

    public function _initialize(){

        if(isset($_SESSION['ADMIN_ID'])){
        $users_obj = M("Users");
            $id = $_SESSION['ADMIN_ID'];
            $user = $users_obj->where(['id'=>$id])->find();
            if(!$this->check_access($id)){
                $this->error("您没有访问权限!");
                exit();
            }

        }else{
            //$this->error("您还没有登陆,请登录!",U("Admin/Public/login"));
            //echo U("index.php/Admin/Public/login");
            header("Location:".U("Admin/Public/login"));
            exit();
        }
    }

    private function check_access($uid){
        if($uid==1){
            return true;
        }

        $rule=MODULE_NAME.CONTROLLER_NAME.ACTION_NAME;
        $no_need_check_rules = array("AdminIndexindex","AdminMainindex");

        if(!in_array($rule,$no_need_check_rules)){
            return sp_auth_check($uid);
        }else{
            return true;
        }
    }
}