<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template Example usage with yiisoft/composer-config-plugin</h1>
    <br>
</p>

1. install yiisoft/composer-config-plugin, add following lines into your `composer.json`:
```json
...

"yiisoft/composer-config-plugin": "^1.0@dev"
...
```

2. Then lets add config for it, in `extra` section of `composer.json` add this:
```json
    "extra": {
        "config-plugin-output-dir": "build/configs",
        "config-plugin": {
            "constants": [
                "common/config/constants-local.php"
            ],
            "params": [
                "common/config/params.php",
                "?common/config/params-local.php"
            ],
            "params_frontend": [
                "$params",
                "frontend/config/params.php",
                "?frontend/config/params-local.php"
            ],
            "params_backend": [
                "$params",
                "backend/config/params.php",
                "?backend/config/params-local.php"
            ],
            "params_console": [
                "$params",
                "console/config/params.php",
                "?console/config/params-local.php"
            ],
            "common": [
                "common/config/main.php",
                "?common/config/main-local.php"
            ],
            "backend": [
                "$common",
                "backend/config/main.php",
                "?backend/config/main-local.php"
            ],
            "console": [
                "$common",
                "console/config/main.php",
                "?console/config/main-local.php"
            ],
            "frontend": [
                "$common",
                "frontend/config/main.php",
                "?frontend/config/main-local.php"
            ],
            "test": [
                "common/config/test.php",
                "?common/config/test-local.php"
            ],
            "test-backend": [
                "$test",
                "backend/config/test.php",
                "?backend/config/test-local.php"
            ],
            "test-console": [
                "$test",
                "console/config/test.php",
                "?console/config/test-local.php"
            ],
            "test-frontend": [
                "$test",
                "frontend/config/test.php",
                "?frontend/config/test-local.php"
            ]
        }
    }

``` 
3. Create `build/config` directory and chmod it to 777.

4. We need to add `constants` file `common/config/constants-local.php` , we add it globally, as a 'hack', since this config plugin dont meant to be used in `3 in 1` app :
```php
<?php
define("YII_ENV", 'prod');
define("YII_DEBUG", true);
define("YII_ENV_TEST", YII_ENV === 'test');

```
This way we will have all constants, used in configs. 



5. Next, there is two way to define a `params` array for APP configuration, first one is to set it exacly in `main.php` config:

```php
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
       
        //....
       
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //....
    ],
    'params' => $params_frontend,
];

```
as you can see, we using `$params_frontend` here, previously defined in `composer.json`, so composer-config-plugin will provide it, OR
There is an other way to use it, by getting it in entry script, for example `frontend/web/index.php`:

```php
<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = require Yiisoft\Composer\Config\Builder::path('frontend');
$params = require Yiisoft\Composer\Config\Builder::path('frontend_params');
$config['params'] = $params;
(new yii\web\Application($config))->run();

```

but for me, better to setup `$params` in app config. this way we get this entry point:
```php
<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = require Yiisoft\Composer\Config\Builder::path('frontend');
(new yii\web\Application($config))->run();

```

6. run `composer du` in command line yo build configs. 

7. profit.

