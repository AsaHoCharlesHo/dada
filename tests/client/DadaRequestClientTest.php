<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada\Tests\Client;

use AsaHoCharlesHo\Dada\Config\Config;
use AsaHoCharlesHo\Dada\Api\BaseApi;
use AsaHoCharlesHo\Dada\Client\DadaRequestClient;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class DadaRequestClientTest extends TestCase
{
//    public function testBuildRequestParams()
//    {
//        $config = new Config('10086', true, 'mock-app-key', 'mock-app-secret');
//        $api = new DummyApi();
//        $dada_client = new DadaRequestClient($config, $api);
//        $requestParams = $dada_client->buildRequestParams();
//        $this->assertSame('mock-app-key', $requestParams['app_key']);
//        $this->assertSame(json_encode(['mock-param' => 'mock-param-value'], JSON_UNESCAPED_UNICODE), $requestParams['body']);
//    }
//
//    public function testGetHttpRequestWithPost()
//    {
//        /*$config = new Config('10086', true, 'mock-app-key', 'mock-app-secret');
//        $api = new DummyApi();
//        $url = $config->getHost().$api->getUrl();
//
//        $dada_client = new DadaRequestClient($config, $api);
//        $requestParams = $dada_client->buildRequestParams();
//
//        // 创建模拟接口响应值。
//        $response = new Response(200, [], '{"success": true}');
//
//        // 创建模拟 http client。
//        $client = \Mockery::mock(DadaRequestClient::class, ['10086', true, 'mock-app-key', 'mock-app-secret'])->makePartial();
//
//        // 指定将会产生的行为（在后续的测试中将会按下面的参数来调用）。
//        $client->allows()->getHttpRequestWithPost($requestParams)->andReturn($response);
//
//        // 然后调用 `getWeather` 方法，并断言返回值为模拟的返回值。
//        $this->assertSame(['success' => true], $client->getHttpRequestWithPost($requestParams));*/
//    }
}

/*class DummyApi extends BaseApi
{
    public function __construct()
    {
        $param = [
            'mock-param' => 'mock-param-value',
        ];
        parent::__construct('/mock_url', $param);
    }
}*/
