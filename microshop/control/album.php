<?php
/**
 * 默认展示页面
 *
 *
 * * @好商城 (c) 2015-2018 33HAO Inc. (http://www.33hao.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */



defined('In33hao') or exit('Access Invalid!');
class albumControl extends MircroShopControl{

    public function __construct() {
        parent::__construct();
        Tpl::output('index_sign','album');
    }

    //首页
    public function indexOp(){
        Tpl::showpage('album');
    }
}
