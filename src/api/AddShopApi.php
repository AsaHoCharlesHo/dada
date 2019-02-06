<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 新增门店api
 */

class AddShopApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/shop/add", $params);
    }
}
