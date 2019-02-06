<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 重新发布订单api
 */

class ReAddOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/reAddOrder", $params);
    }
}
