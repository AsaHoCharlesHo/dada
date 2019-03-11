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
use AsaHoCharlesHo\Dada\Exceptions\HttpException;

class Base
{
    protected $source_id = '';

    protected $is_online = false;

    protected $app_key;

    protected $app_secret;

    public function __construct($builder)
    {
        $this->source_id = $builder->source_id;
        $this->is_online = $builder->is_online;
        $this->app_key = $builder->app_key;
        $this->app_secret = $builder->app_secret;
    }

    public function getDadaConfig()
    {
        return new config\Config($this->source_id, $this->is_online, $this->app_key, $this->app_secret);
    }

    public function getRegisterConfig()
    {
        return new config\Config('', $this->is_online, $this->app_key, $this->app_secret);
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
