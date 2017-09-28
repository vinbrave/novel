<?php
/**
 * Created by PhpStorm.
 * User: vinbrave
 * Date: 2017/9/28
 * Time: 9:47
 */
namespace Admin\Controller;

use Think\Controller;

class PublicController extends Controller
{

    public function login()
    {

        if (isset($_SESSION['ADMIN_ID'])) {
            $this->success("登陆成功", U("Index/index"));
        } else {
            $this->display();
        }

    }

    public function dologin()
    {
        $name = I("post.username");
        if (empty($name)) {
            $this->error("用户名为空!");
        }
        $pass = I("post.password");
        if (empty($pass)) {
            $this->error("密码为空!");
        }
        $verrify = I("post.verify");
        if (empty($verrify)) {
            $this->error("验证码不能为空");
        }
        //首先验证 验证码
        if (sp_check_verify_code()) {
            $user = D("Common/Users");
            $where = ['username' => $name];
            $result = $user->where($where)->find();
            if (!empty($result) && $result['user_type'] == 1) {
                if(sp_compare_password($pass,$result['password'])){

                    $group = M("RoleUser")->alias('a')->join(C('DB_PREFIX').'role as b on a.role_id=b.id')->where(array('user_id'=>$result['id'],'status'=>1));
                    if($result['id']!=1 && empty($group) || $result['user_status']!=1){
                        $this->error("该账号异常!");
                    }

                    $_SESSION['ADMIN_ID'] = $result['id'];
                    $_SESSION['name'] = $result['username'];
                    $result['last_login_ip'] = get_client_ip(0,true);
                    $result['last_login_time'] = date("Y-m-d H:i:s");
                    $user->save($result);
                    setcookie("admin_username",$name,time()+30*24*3600,"/");
                    $this->success("登陆成功",U("Index/index"));

                }else{
                    $this->error("密码错误!");
                }
            }else{
                $this->error("用户名不存在!");
            }
        } else {
            $this->error("验证码输入错误!");

        }
    }

    public function logout()
    {
        session('ADMIN_ID', null);
        redirect(__ROOT__ . "/index.php");
    }
}