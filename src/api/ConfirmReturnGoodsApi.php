<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 妥投异常之物品返回完成api
 */

class ConfirmReturnGoodsApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/confirm/goods", $params);
    }
}
