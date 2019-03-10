<?php
/**
 * Created by PhpStorm.
 * User: Asa Ho
 * Date: 2019/3/10
 * Time: 23:02
 */

namespace AsaHoCharlesHo\Dada\Api;


class ApiFactory
{
    public static function makeApi($url, $params)
    {
        return new Api($url, $params);
    }
}