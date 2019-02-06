<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 订单详情查询api
 */

class QueryStatusApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/status/query", $params);
    }
}
