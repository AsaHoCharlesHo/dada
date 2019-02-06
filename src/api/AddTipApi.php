<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 增加小费api
 */

class AddTipApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/order/addTip", $params);
    }
}
