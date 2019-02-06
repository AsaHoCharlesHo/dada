<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 发单api
 */

class AddOrderApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/addOrder", $params);
    }
}
