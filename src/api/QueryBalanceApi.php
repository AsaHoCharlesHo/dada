<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 查询账户余额api
 */

class QueryBalanceApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/balance/query", $params);
    }
}
