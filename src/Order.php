<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12
 * Time: 10:29
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Api\AddAfterQueryApi;
use AsaHoCharlesHo\Dada\Api\AddOrderApi;
use AsaHoCharlesHo\Dada\Api\AddTipApi;
use AsaHoCharlesHo\Dada\Api\CancelReasonsApi;
use AsaHoCharlesHo\Dada\Api\ConfirmReturnGoodsApi;
use AsaHoCharlesHo\Dada\Api\FormalCancelApi;
use AsaHoCharlesHo\Dada\Api\QueryDeliverFeeApi;
use AsaHoCharlesHo\Dada\Api\QueryStatusApi;
use AsaHoCharlesHo\Dada\Api\ReAddOrderApi;
use AsaHoCharlesHo\daDa\Exceptions\InvalidArgumentException;

class Order extends Base
{
    private $config;

    public function __construct($source_id, $is_online, $app_key, $app_secret)
    {
        parent::__construct($app_key, $app_secret);
        $this->config = $this->getDadaConfig($source_id, $is_online);
    }

    //新增配送单接口
    public function addOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new AddOrderApi($param);
        return $this->handle($api, $this->config);
    }

    //重新发布订单
    public function reAddOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new ReAddOrderApi($param);
        return $this->handle($api, $this->config);
    }

    //查询订单运费
    public function queryDeliverFee($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new QueryDeliverFeeApi($param);
        return $this->handle($api, $this->config);
    }

    //查询运费后发单
    public function addAfterQuery($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new AddAfterQueryApi($param);
        return $this->handle($api, $this->config);
    }

    //订单详情查询
    public function queryStatus($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new QueryStatusApi($param);
        return $this->handle($api, $this->config);
    }

    //增加小费
    public function addTip($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new AddTipApi($param);
        return $this->handle($api, $this->config);
    }

    //取消订单
    public function formalCancel($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new FormalCancelApi($param);
        return $this->handle($api, $this->config);
    }

    //获取取消原因
    public function reasons()
    {
        $api = new CancelReasonsApi('');
        return $this->handle($api, $this->config);
    }

    //妥投异常之物品返回完成
    public function confirmReturnGoods($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new ConfirmReturnGoodsApi($param);
        return $this->handle($api, $this->config);
    }
}
