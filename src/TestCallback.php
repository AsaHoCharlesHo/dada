<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12
 * Time: 10:29
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Api\ReturningGoodsApi;
use AsaHoCharlesHo\Dada\Api\TestAcceptOrderApi;
use AsaHoCharlesHo\Dada\Api\TestCancelOrderApi;
use AsaHoCharlesHo\Dada\Api\TestExpireOrderApi;
use AsaHoCharlesHo\Dada\Api\TestFetchOrderApi;
use AsaHoCharlesHo\Dada\Api\TestFinishOrderApi;
use AsaHoCharlesHo\Dada\Exceptions\InvalidArgumentException;

class TestCallback extends Base
{
    public $config;

    public function __construct($source_id, $is_online, $app_key, $app_secret)
    {
        parent::__construct($app_key, $app_secret);
        $this->config = $this->getDadaConfig($source_id, $is_online);
    }

    //接受订单(仅在测试环境供调试使用)
    public function acceptOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new TestAcceptOrderApi(json_encode($param));
        return $this->handle($api, $this->config);
    }

    //取消订单(仅在测试环境供调试使用)
    public function cancelOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new TestCancelOrderApi(json_encode($param));
        return $this->handle($api, $this->config);
    }

    //完成订单(仅在测试环境供调试使用)
    public function finishOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new TestFinishOrderApi(json_encode($param));
        return $this->handle($api, $this->config);
    }

    //完成取货(仅在测试环境供调试使用)
    public function fetchOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new TestFetchOrderApi(json_encode($param));
        return $this->handle($api, $this->config);
    }

    //订单过期(仅在测试环境供调试使用)
    public function expireOrder($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new TestExpireOrderApi(json_encode($param));
        return $this->handle($api, $this->config);
    }

    //异常妥投物品返还中(仅在测试环境供调试使用)
    public function returningGoods($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new ReturningGoodsApi(json_encode($param));
        return $this->handle($api, $this->config);
    }
}