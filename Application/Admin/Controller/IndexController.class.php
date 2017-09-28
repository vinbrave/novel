<?php

namespace Admin\Controller;

use Common\Controller\adminController;


class IndexController extends adminController
{

    public function _initialize()
    {
        parent::_initialize();
        $this->initMenu();
    }


    public function index()
    {
//        if (C('LANG_SWITCH_ON')) {
//            $this->load_menu_lang();
//        }


        $this->display();
    }

    private function load_menu_lang()
    {
        $apps = sp_scan_dir(APP_PATH . "*", GLOB_ONLYDIR);
        $error_menus = array();
        foreach ($apps as $app) {
            if (is_dir(APP_PATH . $app)) {
                $admin_menu_lang_file = APP_PATH . $app . "/Lang/" . LANG_SET . "/admin_menu.php";
                echo $admin_menu_lang_file;
                die();
                if (is_file($admin_menu_lang_file)) {
                    $lang = include $admin_menu_lang_file;
                    L($lang);
                }
            }
        }
    }
}