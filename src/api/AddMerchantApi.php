<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 注册商户api
 */

class AddMerchantApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/merchantApi/merchant/add", $params);
    }
}
