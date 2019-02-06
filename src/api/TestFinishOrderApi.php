<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 完成订单(仅在测试环境供调试使用)api
 */

class TestFinishOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/finish", $params);
    }
}
