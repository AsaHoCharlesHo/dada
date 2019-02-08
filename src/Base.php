<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Client\DadaRequestClient;
use AsaHoCharlesHo\Dada\Config\DadaConstant;
use AsaHoCharlesHo\daDa\Exceptions\HttpException;

class Base
{
    private $app_key;

    private $app_secret;

    public function __construct($app_key, $app_secret)
    {
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
    }

    public function getDadaConfig($source_id, $is_online)
    {
        return new config\Config($source_id, $is_online, $this->app_key, $this->app_secret);
    }

    public function handle($api, $config)
    {
        try {
            $dada_client = new DadaRequestClient($config, $api);
            $resp = $dada_client->makeRequest();
            if (DadaConstant::FAIL_CODE == $resp->code) {
                //api 调用异常，返回为空
                throw new HttpException(DadaConstant::FAIL_MSG, DadaConstant::FAIL_CODE);
            }

            return $resp;
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
