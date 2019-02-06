<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 取消订单(仅在测试环境供调试使用)api
 */

class TestCancelOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/cancel", $params);
    }
}
