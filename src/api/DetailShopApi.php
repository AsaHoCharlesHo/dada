<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 门店详情api
 */

class DetailShopApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/shop/detail", $params);
    }
}
