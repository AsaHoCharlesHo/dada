<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Api\ApiFactory;
use AsaHoCharlesHo\Dada\Exceptions\InvalidArgumentException;

class Dada extends Base
{
    protected $config;

    protected $register_config;

    public function __construct($builder)
    {
        parent::__construct($builder);
        $this->config = $this->getDadaConfig();
        $this->register_config = $this->getRegisterConfig();
    }

    private function validateParam($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }
    }

    /**************** 商铺接口 ********************/
    //获取城市信息接口
    public function getCityList()
    {
        $api = ApiFactory::makeApi('/api/cityCode/list', []);

        return $this->handle($api, $this->config);
    }

    //注册商户
    public function registerMerchant($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/merchantApi/merchant/add', $param);

        return $this->handle($api, $this->register_config);
    }

    //批量新增门店
    //返回成功导入数组及失败导入的原因数组
    public function addShop($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/shop/add', $param);

        return $this->handle($api, $this->config);
    }

    //编辑门店
    public function updateShop($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/shop/update', $param);

        return $this->handle($api, $this->config);
    }

    //门店详情
    public function getShopDetail($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/shop/detail', $param);

        return $this->handle($api, $this->config);
    }

    /**************** 订单接口 ********************/
    //新增配送单接口
    public function addOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/addOrder', $param);

        return $this->handle($api, $this->config);
    }

    //重新发布订单
    public function reAddOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/reAddOrder', $param);

        return $this->handle($api, $this->config);
    }

    //查询订单运费
    public function queryDeliverFee($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/queryDeliverFee', $param);

        return $this->handle($api, $this->config);
    }

    //查询运费后发单
    public function addAfterQuery($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/addAfterQuery', $param);

        return $this->handle($api, $this->config);
    }

    //订单详情查询
    public function queryStatus($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/status/query', $param);

        return $this->handle($api, $this->config);
    }

    //增加小费
    public function addTip($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/addTip', $param);

        return $this->handle($api, $this->config);
    }

    //取消订单
    public function formalCancel($param)
    {
        $this->validateParam($param);

        $api = ApiFactory::makeApi('/api/order/formalCancel', $param);

        return $this->handle($api, $this->config);
    }

    //获取取消原因
    public function reasons()
    {
        $api = ApiFactory::makeApi('/api/order/cancel/reasons', []);

        return $this->handle($api, $this->config);
    }

    //妥投异常之物品返回完成
    public function confirmReturnGoods($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/confirm/goods', $param);

        return $this->handle($api, $this->config);
    }

    /**************** 充值接口 ********************/
    //获取充值链接
    public function recharge($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/recharge', $param);

        return $this->handle($api, $this->config);
    }

    //查询账户余额
    public function queryBalance($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/balance/query', $param);

        return $this->handle($api, $this->config);
    }

    /**************** 测试回调接口 ********************/
    //接受订单(仅在测试环境供调试使用)
    public function acceptOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/accept', $param);

        return $this->handle($api, $this->config);
    }

    //取消订单(仅在测试环境供调试使用)
    public function cancelOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/cancel', $param);

        return $this->handle($api, $this->config);
    }

    //完成订单(仅在测试环境供调试使用)
    public function finishOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/finish', $param);

        return $this->handle($api, $this->config);
    }

    //完成取货(仅在测试环境供调试使用)
    public function fetchOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/fetch', $param);

        return $this->handle($api, $this->config);
    }

    //订单过期(仅在测试环境供调试使用)
    public function expireOrder($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/expire', $param);

        return $this->handle($api, $this->config);
    }

    //异常妥投物品返还中(仅在测试环境供调试使用)
    public function returningGoods($param)
    {
        $this->validateParam($param);
        $api = ApiFactory::makeApi('/api/order/delivery/abnormal/back', $param);

        return $this->handle($api, $this->config);
    }
}
