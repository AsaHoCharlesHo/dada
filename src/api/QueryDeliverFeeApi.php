<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 查询订单运费api
 */

class QueryDeliverFeeApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/queryDeliverFee", $params);
    }
}
