<?php
// +----------------------------------------------------------------------
// | CategoryController.class.php
// +----------------------------------------------------------------------
// | 时间：2017/9/18
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 尚宝龙 <bravelib@163.com>
// +----------------------------------------------------------------------

//----------------------------------
// 爬虫操作
//----------------------------------

namespace Admin\Controller;

use Common\Controller\BaseOptController;

class CrawlerController extends BaseOptController
{
    public function __construct()
    {
        $this->mod_obj = M("category");

        parent::__construct();
    }

    public function init_add()
    {

    }

    public function index()
    {
        $this->display();
    }
}