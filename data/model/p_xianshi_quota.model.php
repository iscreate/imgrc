<?php
/**
 * 限时折扣套餐模型
 *
 *
 *
 * * @好商城 (c) 2015-2018 33HAO Inc. (http://www.33hao.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */
defined('In33hao') or exit('Access Invalid!');
class p_xianshi_quotaModel extends Model{

    public function __construct(){
        parent::__construct('p_xianshi_quota');
    }

    /**
     * 读取限时折扣套餐列表
     * @param array $condition 查询条件
     * @param int $page 分页数
     * @param string $order 排序
     * @param string $field 所需字段
     * @return array 限时折扣套餐列表
     *
     */
    public function getXianshiQuotaList($condition, $page=null, $order='', $field='*') {
        $result = $this->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;
    }

    /**
     * 读取单条记录
     * @param array $condition
     *
     */
    public function getXianshiQuotaInfo($condition) {
        $result = $this->where($condition)->find();
        return $result;
    }

    /**
     * 获取当前可用套餐
     * @param int $store_id
     * @return array
     *
     */
    public function getXianshiQuotaCurrent($store_id) {
        $condition = array();
        $condition['store_id'] = $store_id;
        $condition['end_time'] = array('gt', TIMESTAMP);
        return $this->getXianshiQuotaInfo($condition);
    }

    /*
     * 增加
     * @param array $param
     * @return bool
     *
     */
    public function addXianshiQuota($param){
        return $this->insert($param);
    }

    /*
     * 更新
     * @param array $update
     * @param array $condition
     * @return bool
     *
     */
    public function editXianshiQuota($update, $condition){
        return $this->where($condition)->update($update);
    }

    /*
     * 删除
     * @param array $condition
     * @return bool
     *
     */
    public function delXianshiQuota($condition){
        return $this->where($condition)->delete();
    }
}
