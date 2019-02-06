<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 获取充值链接api
 */

class RechargeApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/recharge", $params);
    }
}
