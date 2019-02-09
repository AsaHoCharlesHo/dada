<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada\Tests;

use AsaHoCharlesHo\Dada\Config\Config;
use AsaHoCharlesHo\Dada\Api\AddMerchantApi;
use AsaHoCharlesHo\Dada\Client\DadaRequestClient;
use PHPUnit\Framework\TestCase;

class DadaRequestClientTest extends TestCase
{
    public function testBuildRequestParams()
    {
        $config = new Config('10086', true, 'mock-app-key', 'mock-app-secret');
        $param = [
            'mock-param' => 'mock-param-value',
        ];
        $api = new AddMerchantApi($param);
        $dada_client = new DadaRequestClient($config, $api);
        $requestParams = $dada_client->buildRequestParams();

        $this->assertSame('mock-app-key', $requestParams['app_key']);
        $this->assertSame(json_encode($param, JSON_UNESCAPED_UNICODE), $requestParams['body']);
    }

    public function testGetHttpRequestWithPost()
    {
    }
}
