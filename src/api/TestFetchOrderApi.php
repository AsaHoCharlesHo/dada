<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 完成取货(仅在测试环境供调试使用)api
 */

class TestFetchOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/fetch", $params);
    }
}
