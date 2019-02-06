<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 获取取消原因api
 */

class CancelReasonsApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/cancel/reasons", $params);
    }
}
