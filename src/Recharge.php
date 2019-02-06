<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12
 * Time: 10:29
 */

namespace AsaHoCharlesHo\Dada;

use AsaHoCharlesHo\Dada\Api\QueryBalanceApi;
use AsaHoCharlesHo\Dada\Api\RechargeApi;
use AsaHoCharlesHo\daDa\Exceptions\InvalidArgumentException;

class Recharge extends Base
{
    private $config;

    public function __construct($source_id, $is_online, $app_key, $app_secret)
    {
        parent::__construct($app_key, $app_secret);
        $this->config = $this->getDadaConfig($source_id, $is_online);
    }

    //获取充值链接
    public function recharge($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new RechargeApi($param);
        return $this->handle($api, $this->config);
    }

    //查询账户余额
    public function queryBalance($param)
    {
        if (!is_array($param)) {
            throw new InvalidArgumentException('Invalid format, should be array');
        }

        $api = new QueryBalanceApi($param);
        return $this->handle($api, $this->config);
    }
}