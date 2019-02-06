<?php
/**
 * Created by PhpStorm.
 * User: Asa Ho
 * Date: 2018/12/23
 * Time: 21:54
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Api\AddShopApi;
use AsaHoCharlesHo\Dada\Api\AddMerchantApi;
use AsaHoCharlesHo\Dada\Api\UpdateShopApi;
use AsaHoCharlesHo\Dada\Api\DetailShopApi;
use AsaHoCharlesHo\Dada\Api\CityCodeListApi;
use AsaHoCharlesHo\Dada\Exceptions\InvalidArgumentException;

class Shop extends Base
{
    private $config;

    private $register_config;

    public function __construct($source_id, $is_online, $app_key, $app_secret)
    {
        parent::__construct($app_key, $app_secret);
        $this->config = $this->getDadaConfig($source_id, $is_online);
        $this->register_config = $this->getDadaConfig('', $is_online);
    }

    //获取城市信息接口
    public function getCityList()
    {
        $api = new CityCodeListApi('');
        return $this->handle($api, $this->config);
    }

    //注册商户
    public function registerMerchant($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }
        $api = new AddMerchantApi($param);
        return $this->handle($api, $this->register_config);
    }

    //批量新增门店
    //返回成功导入数组及失败导入的原因数组
    public function addShop($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }
        $api = new AddShopApi($param);
        return $this->handle($api, $this->config);
    }

    //编辑门店
    public function updateShop($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new UpdateShopApi($param);
        return $this->handle($api, $this->config);
    }

    //门店详情
    public function getShopDetail($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new DetailShopApi($param);
        return $this->handle($api, $this->config);
    }
}