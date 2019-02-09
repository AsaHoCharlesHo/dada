<?php

/*
 * This file is part of the asa-charles-ho/dada
 *
 * (c) asa ho <asa_ho@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AsaHoCharlesHo\Dada\Tests\Config;

use AsaHoCharlesHo\Dada\Config\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testConfig()
    {
        $config = new Config('10086', true, 'mock-app-key', 'mock-app-secret');

        $this->assertSame('10086', $config->getSourceId());
        $this->assertSame('10086', $config->source_id);

        $this->assertSame('mock-app-key', $config->getAppKey());
        $this->assertSame('mock-app-key', $config->app_key);

        $this->assertSame('mock-app-secret', $config->getAppSecret());
        $this->assertSame('mock-app-secret', $config->app_secret);
    }
}
