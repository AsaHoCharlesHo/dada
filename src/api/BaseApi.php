<?php

namespace AsaHoCharlesHo\Dada\Api;

/**
 * base api
 */
class BaseApi
{
    private $url;

    private $businessParams;

    public function __construct($url, $params)
    {
        $this->url = $url;
        $this->businessParams = empty($params) ? '' : json_encode($params, JSON_UNESCAPED_UNICODE);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getBusinessParams()
    {
        return $this->businessParams;
    }
}
