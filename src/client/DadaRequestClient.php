<?php

namespace AsaHoCharlesHo\Dada\Client;

use AsaHoCharlesHo\Dada\Api\BaseApi;
use AsaHoCharlesHo\Dada\Config\Config;
use Dada\Config\DadaConstant;

/**
 * 达达接口请求客户端
 */
class DadaRequestClient
{
    /**
     * http request timeout;
     */
    private $httpTimeout = 5;

    /**
     * 配置项
     */
    private $config;

    /**
     * 接口类
     */
    private $api;

    /**
     * 构造函数
     * DadaRequestClient constructor.
     * @param $config Config
     * @param $api BaseApi
     */
    public function __construct($config, $api)
    {
        $this->config = $config;
        $this->api = $api;
    }

    /**
     * 请求调用api
     * @return object
     */
    public function makeRequest()
    {
        $reqParams = $this->bulidRequestParams();
        $resp = $this->getHttpRequestWithPost(json_encode($reqParams));
        return $this->parseResponseData($resp);
    }

    /**
     * 构造请求数据
     * data:业务参数，json字符串
     */
    public function bulidRequestParams()
    {
        $config = $this->getConfig();
        $api = $this->getApi();

        $requestParams = [];
        $requestParams['app_key'] = $config->getAppKey();
        $requestParams['body'] = $api->getBusinessParams();
        $requestParams['format'] = $config->getFormat();
        $requestParams['v'] = $config->getV();
        $requestParams['source_id'] = $config->getSourceId();
        $requestParams['timestamp'] = time();
        $requestParams['signature'] = $this->_sign($requestParams);
        return $requestParams;
    }

    /**
     * 签名生成signature
     */
    public function _sign($data)
    {

        $config = $this->getConfig();

        //1.升序排序
        ksort($data);

        //2.字符串拼接
        $args = "";
        foreach ($data as $key => $value) {
            $args .= $key . $value;
        }
        $args = $config->app_secret . $args . $config->app_secret;
        //3.MD5签名,转为大写
        $sign = strtoupper(md5($args));

        return $sign;
    }


    /**
     * 发送请求,POST
     * $url 指定URL完整路径地址
     * @param $data string 请求的数据
     * @return bool|mixed
     */
    public function getHttpRequestWithPost($data)
    {

        $config = $this->config;
        $api = $this->api;
        $url = $config->getHost() . $api->getUrl();

        // json
        $headers = [
            'Content-Type: application/json',
        ];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->httpTimeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $resp = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);
        if (isset($info['http_code']) && $info['http_code'] == 200) {
            return $resp;
        }
        return false;
    }

    /**
     * 解析响应数据
     * @param $arr返回的数据
     * @return DadaResponse 响应数据格式：{"status":"success","result":{},"code":0,"msg":"成功"}
     */
    public function parseResponseData($arr)
    {
        $resp = new DadaResponse();
        if (empty($arr)) {
            $resp->setCode(DadaConstant::FAIL_CODE);
        } else {
            $data = json_decode($arr, true);
            $resp->setStatus($data['status']);
            $resp->setMsg($data['msg']);
            $resp->setCode($data['code']);
            $data['result'] = isset($data['result']) ? $data['result'] : '';
            $resp->setResult($data['result']);
        }
        return $resp;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getApi()
    {
        return $this->api;
    }
}
