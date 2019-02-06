<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 订单过期(仅在测试环境供调试使用)api
 */

class TestExpireOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/expire", $params);
    }
}
