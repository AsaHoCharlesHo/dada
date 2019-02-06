<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 异常妥投物品返还中(仅在测试环境供调试使用)api
 */

class ReturningGoodsApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/delivery/abnormal/back", $params);
    }
}
