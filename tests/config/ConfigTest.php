<?php
/**
 * Created by PhpStorm.
 * User: Asa Ho
 * Date: 2019/2/8
 * Time: 22:56
 */

namespace AsaHoCharlesHo\Dada\Tests;

use AsaHoCharlesHo\Dada\Config\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testConfig()
    {
        $config = new Config('10086', true, 'mock-app-key', 'mock-app-secret');

        $this->assertSame('10086', $config->getSourceId());
        $this->assertSame('10086', $config->source_id);
    }
}