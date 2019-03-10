<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada\Api;

/**
 * base api.
 */
class Api implements ApiInterface
{
    protected $url;

    protected $businessParams;

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
