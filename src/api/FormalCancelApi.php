<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 取消订单(线上环境)api
 */

class FormalCancelApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/formalCancel", $params);
    }
}
