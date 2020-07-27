<?php

$baseDir = dirname(__DIR__, 3);

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

return [
    '@yii/composer' => $baseDir . '/vendor/yiisoft/yii2-composer',
    '@HTMLPurifier' => $baseDir . '/vendor/ezyang/htmlpurifier/library/HTMLPurifier',
    '@cebe/markdown' => $baseDir . '/vendor/cebe/markdown',
    '@yii' => $baseDir . '/vendor/yiisoft/yii2',
    '@yii/bootstrap' => $baseDir . '/vendor/yiisoft/yii2-bootstrap/src',
    '@Doctrine/Common/Lexer' => $baseDir . '/vendor/doctrine/lexer/lib/Doctrine/Common/Lexer',
    '@Symfony/Polyfill/Intl/Normalizer' => $baseDir . '/vendor/symfony/polyfill-intl-normalizer',
    '@Symfony/Polyfill/Php70' => $baseDir . '/vendor/symfony/polyfill-php70',
    '@Symfony/Polyfill/Php72' => $baseDir . '/vendor/symfony/polyfill-php72',
    '@Symfony/Polyfill/Intl/Idn' => $baseDir . '/vendor/symfony/polyfill-intl-idn',
    '@Egulias/EmailValidator' => $baseDir . '/vendor/egulias/email-validator/src',
    '@Symfony/Polyfill/Iconv' => $baseDir . '/vendor/symfony/polyfill-iconv',
    '@Symfony/Polyfill/Mbstring' => $baseDir . '/vendor/symfony/polyfill-mbstring',
    '@yii/swiftmailer' => $baseDir . '/vendor/yiisoft/yii2-swiftmailer/src',
    '@Riimu/Kit/PHPEncoder' => $baseDir . '/vendor/riimu/kit-phpencoder/src',
    '@Opis/Closure' => $baseDir . '/vendor/opis/closure/src',
    '@hiqdev/composer/config' => $baseDir . '/vendor/yiisoft/composer-config-plugin/src',
    '@PhpOption' => $baseDir . '/vendor/phpoption/phpoption/src/PhpOption',
    '@GrahamCampbell/ResultType' => $baseDir . '/vendor/graham-campbell/result-type/src',
    '@Symfony/Polyfill/Ctype' => $baseDir . '/vendor/symfony/polyfill-ctype',
    '@Symfony/Polyfill/Php80' => $baseDir . '/vendor/symfony/polyfill-php80',
    '@Dotenv' => $baseDir . '/vendor/vlucas/phpdotenv/src',
    '@yii/debug' => $baseDir . '/vendor/yiisoft/yii2-debug/src',
    '@Diff' => $baseDir . '/vendor/phpspec/php-diff/lib/Diff',
    '@yii/gii' => $baseDir . '/vendor/yiisoft/yii2-gii/src',
    '@Faker' => $baseDir . '/vendor/fzaninotto/faker/src/Faker',
    '@yii/faker' => $baseDir . '/vendor/yiisoft/yii2-faker',
    '@Doctrine/Instantiator' => $baseDir . '/vendor/doctrine/instantiator/src/Doctrine/Instantiator',
    '@DeepCopy' => $baseDir . '/vendor/myclabs/deep-copy/src/DeepCopy',
    '@phpDocumentor/Reflection' => $baseDir . '/vendor/phpdocumentor/reflection-docblock/src',
    '@Webmozart/Assert' => $baseDir . '/vendor/webmozart/assert/src',
    '@Prophecy' => $baseDir . '/vendor/phpspec/prophecy/src/Prophecy',
    '@Codeception/PHPUnit' => $baseDir . '/vendor/codeception/phpunit-wrapper/src',
    '@Psr/Http/Message' => $baseDir . '/vendor/psr/http-message/src',
    '@GuzzleHttp/Psr7' => $baseDir . '/vendor/guzzlehttp/psr7/src',
    '@Symfony/Component/Finder' => $baseDir . '/vendor/symfony/finder',
    '@Symfony/Polyfill/Php73' => $baseDir . '/vendor/symfony/polyfill-php73',
    '@Psr/Container' => $baseDir . '/vendor/psr/container/src',
    '@Symfony/Contracts/Service' => $baseDir . '/vendor/symfony/service-contracts',
    '@Symfony/Polyfill/Intl/Grapheme' => $baseDir . '/vendor/symfony/polyfill-intl-grapheme',
    '@Symfony/Component/String' => $baseDir . '/vendor/symfony/string',
    '@Symfony/Component/Console' => $baseDir . '/vendor/symfony/console',
    '@Psr/EventDispatcher' => $baseDir . '/vendor/psr/event-dispatcher/src',
    '@Symfony/Contracts/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher-contracts',
    '@Symfony/Component/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher',
    '@Symfony/Component/Yaml' => $baseDir . '/vendor/symfony/yaml',
    '@Symfony/Component/CssSelector' => $baseDir . '/vendor/symfony/css-selector',
    '@Behat/Gherkin' => $baseDir . '/vendor/behat/gherkin/src/Behat/Gherkin',
    '@Codeception' => $baseDir . '/vendor/codeception/verify/src/Codeception',
    '@Codeception/Extension' => $baseDir . '/vendor/codeception/codeception/ext',
    '@Symfony/Component/DomCrawler' => $baseDir . '/vendor/symfony/dom-crawler',
    '@Symfony/Component/BrowserKit' => $baseDir . '/vendor/symfony/browser-kit',
];