<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * 获取城市信息api
 */

class CityCodeListApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct("/api/cityCode/list", $params);
    }
}
