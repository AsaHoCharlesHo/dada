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
 * 注册商户api.
 */
class AddMerchantApi extends BaseApi
{
    public function __construct($params)
    {
        parent::__construct('/merchantApi/merchant/add', $params);
    }
}
