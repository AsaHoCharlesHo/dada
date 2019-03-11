<?php
/**
 * Created by PhpStorm.
 * User: Asa Ho
 * Date: 2019/3/11
 * Time: 0:25
 */

namespace AsaHoCharlesHo\Dada;


class Builder
{
    public $source_id = '';

    public $is_online = false;

    public $app_key;

    public $app_secret;

    public function __construct($source_id)
    {
        $this->source_id = $source_id;
    }

    public function turnToOnline()
    {
        $this->is_online = true;
        return $this;
    }

    public function setAppKey($app_key)
    {
        $this->app_key = $app_key;
        return $this;
    }

    public function setAppSecret($app_secret)
    {
        $this->app_secret = $app_secret;
        return $this;
    }

    public function build()
    {
        return new Dada($this);
    }
}