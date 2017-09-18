<?php
// +----------------------------------------------------------------------
// | BaseOptController.class.php
// +----------------------------------------------------------------------
// | 时间：2017/9/18
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 尚宝龙 <bravelib@163.com>
// +----------------------------------------------------------------------

//----------------------------------
// 控制器关联Model基础操作
//----------------------------------

namespace Common\Controller;

class BaseOptController extends adminController
{
    protected $mod_obj = NUll;

    public function __construct()
    {
        parent::__construct();
        if (!$this->mod_obj) {
            $this->error("请定义父类的mod_obj初始化为Model实例");
        }
    }

    /**
     * 添加界面
     */
    public function add()
    {
        if (method_exists($this, 'init_add')) {
            $data = $this->init_add();
        }
        $this->display();
    }

    /**
     * 执行添加
     * @param string $redirect_url
     */
    public function add_post($redirect_url = "index")
    {
        if (IS_POST) {
            $data = [];
            if (method_exists($this, 'init_add_post')) {
                $data = $this->init_add_post();
            }
            if ($this->mod_obj->create($data)) {
                if ($this->mod_obj->add() != FALSE) {
                    $this->success("产品添加成功!", U($redirect_url));
                } else {
                    $this->error("产品添加失败!");
                }
            } else {
                $this->error($this->product_mod->getError());
            }
        } else {
            $this->redirect($redirect_url);
        }
    }

    /**
     * 编辑界面
     */
    public function edit()
    {
        if (method_exists($this, 'init_edit')) {
            $data = $this->init_edit();
        }
        $this->display();
    }

    /**
     * 执行编辑
     * @param string $redirect_url
     */
    public function edit_post($redirect_url = "index")
    {
        if (IS_POST) {
            $data = [];
            if (method_exists($this, 'init_edit_post')) {
                $data = $this->init_edit_post();
            }

            if ($this->mod_obj->create($data)) {
                if ($this->mod_obj->save() !== FALSE) {
                    $this->success("产品修改成功!", U($redirect_url));
                } else {
                    $this->error("产品修改失败!");
                }
            } else {
                $this->error($this->mod_obj->getError());
            }
        } else {
            $this->redirect($redirect_url);
        }
    }

    /**
     *上架下架
     */
    public function control()
    {

        $where["id"] = I("id");
        $data = [];
        if (method_exists($this, 'init_control')) {
            $data = $this->init_control();
        }
        $info = $this->mod_obj->where($where)->save($data);
        if ($info !== FALSE) {
            $this->success("操作成功！");
        } else {
            $this->success("修改成功！");
        }
    }

    /**
     * 删除操作
     */
    public function delete()
    {
        $where["id"] = I("id");
        $info = $this->mod_obj->where($where)->delete();
        if ($info !== FALSE) {
            $this->success("删除成功！");
        } else {
            $this->success("删除成功！");
        }
    }
}