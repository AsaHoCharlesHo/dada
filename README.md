<h1 align="center">dada</h1>

<p align="center">:rainbow: 基于 达达开放平台 的 PHP 版接口 DEMO 的接口组件。</p>

[![Build Status](https://travis-ci.org/asa-charles-ho/dada.svg?branch=master)](https://travis-ci.org/asa-charles-ho/dada)
![StyleCI build status](https://github.styleci.io/repos/169403831/shield)

----------

## 安装 ##

    $ composer require asahocharlesho/dada -vvv


----------

## 配置 ##

在使用本拓展之前，你需要去 [达达开放平台][2] 注册开发者账号，获取秘钥(app_key、app_secret)。


----------

## 使用 ##

```PHP
    use AsaHoCharlesHo\Dada\Builder;
    use AsaHoCharlesHo\Dada\Dada;
    
    $app_key = '****'; // 达达开发者app_key
    
    $app_secret = '****'; // 达达开发者app_secret
    
    $source_id = '****'; // 绑定商户的商户 ID
    
    $handler = (new Builder($source_id))
        ->setAppKey($app_key)
        ->setAppSecret($app_secret)
    //    ->turnToOnline() // 是否调用达达的线上接口，默认为测试接口
        ->build();
   
``` 
    
### 获取城市信息 ###

```PHP
    $dada = new Dada($handler);
    $response = $shop->getCityList();
```

#### 示例： ####

```JSON
    {
        "status": "success",
        "code": 0,
        "msg": "成功",
        "result": [
            {
                "cityName": "上海",
                "cityCode": "021"
            },
            {
                "cityName": "北京",
                "cityCode": "010"
            },
            {
                "cityName": "合肥",
                "cityCode": "0551"
            }
        ]
    }
```

----------

## 参数说明 ##

所需传递的参数均参照开发文档的说明。

----------

## 参考 ##

[达达开放平台开发文档][3]


----------


## License ##

MIT

  [1]: https://newopen.imdada.cn/#/development/file?_k=kbcov3
  [2]: https://newopen.imdada.cn
  [3]: https://newopen.imdada.cn/#/development/file?_k=kbcov3