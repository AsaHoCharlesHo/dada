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

use AsaHoCharlesHo\Dada\Api\ApiFactory;
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
        $api = ApiFactory::makeApi('', []);

        return $this->handle($api, $this->config);
    }

    //注册商户
    public function registerMerchant($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }
        $api = ApiFactory::makeApi('/merchantApi/merchant/add', $param);

        return $this->handle($api, $this->register_config);
    }

    //批量新增门店
    //返回成功导入数组及失败导入的原因数组
    public function addShop($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }
        $api = ApiFactory::makeApi('/api/shop/add', $param);

        return $this->handle($api, $this->config);
    }

    //编辑门店
    public function updateShop($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = ApiFactory::makeApi('/api/shop/update', $param);

        return $this->handle($api, $this->config);
    }

    //门店详情
    public function getShopDetail($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = ApiFactory::makeApi('/api/shop/detail', $param);

        return $this->handle($api, $this->config);
    }
}
