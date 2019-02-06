<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 接受订单(仅在测试环境供调试使用)api
 */

class TestAcceptOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/accept", $params);
    }
}
