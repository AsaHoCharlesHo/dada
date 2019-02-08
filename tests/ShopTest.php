<?php
/**
 * Created by PhpStorm.
 * User: Asa Ho
 * Date: 2019/2/6
 * Time: 0:59
 */

namespace AsaHoCharlesHo\Dada\Tests;

use AsaHoCharlesHo\Dada\Api\CityCodeListApi;
use AsaHoCharlesHo\Dada\Client\DadaRequestClient;
use AsaHoCharlesHo\Dada\Config\Config;
use AsaHoCharlesHo\Dada\Shop;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class ShopTest extends TestCase
{
    public function testGetDadaConfig()
    {
        $shop = new Shop('mock-source-id', 'false', 'mock-app-key', 'mock-app-secret');

        $this->assertInstanceOf(Config::class, $shop->getDadaConfig('mock-source-id', 'false'));
    }

    /*public function testGetCityList()
    {
        $api = new CityCodeListApi();

        $m = \Mockery::mock(Shop::class, ['mock-source-id', 'false', 'mock-app-key', 'mock-app-secret'])->makePartial();


        $dada_client = new DadaRequestClient($m->allows()->config, $api);

        // 创建模拟接口响应值。
        $response = new Response(200, [], '{"success": true}');

        // 创建模拟 http client。
        $client = \Mockery::mock(Client::class);

        // 指定将会产生的形为（在后续的测试中将会按下面的参数来调用）。
        $client->allows()->post('https://restapi.amap.com/v3/weather/weatherInfo', [
            'query' => [
                'key' => 'mock-key',
                'city' => '深圳',
                'output' => 'json',
                'extensions' => 'base',
            ]
        ])->andReturn($response);

        // 将 `getHttpClient` 方法替换为上面创建的 http client 为返回值的模拟方法。
        $w = \Mockery::mock(Shop::class, ['mock-key'])->makePartial();
        $w->allows()->getHttpClient()->andReturn($client); // $client 为上面创建的模拟实例。

        // 然后调用 `getWeather` 方法，并断言返回值为模拟的返回值。
        $this->assertSame(['success' => true], $w->getWeather('深圳'));
    }*/

    /*public function testRegisterMerchant()
    {

    }

    public function testAddShop()
    {

    }

    public function testUpdateShop()
    {

    }

    public function testGetShopDetail()
    {

    }*/
}