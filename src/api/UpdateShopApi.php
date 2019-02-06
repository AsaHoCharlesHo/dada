<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 编辑门店api
 */

class UpdateShopApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/shop/update", $params);
    }
}
