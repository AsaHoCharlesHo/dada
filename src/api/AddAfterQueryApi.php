<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 查询运费后发单api
 */

class AddAfterQueryApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/addAfterQuery", $params);
    }
}
