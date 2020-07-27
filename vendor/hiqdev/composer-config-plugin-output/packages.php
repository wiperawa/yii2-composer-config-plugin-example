<?php

$baseDir = dirname(__DIR__, 3);

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

return [
    'yiisoft/yii2-composer' => [
        'name' => 'yiisoft/yii2-composer',
        'version' => '2.0.10.0',
        'reference' => '94bb3f66e779e2774f8776d6e1bdeab402940510',
        'aliases' => [
            '@yii/composer' => $baseDir . '/vendor/yiisoft/yii2-composer',
        ],
    ],
    'ezyang/htmlpurifier' => [
        'name' => 'ezyang/htmlpurifier',
        'version' => '4.13.0.0',
        'reference' => '08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
        'aliases' => [
            '@HTMLPurifier' => $baseDir . '/vendor/ezyang/htmlpurifier/library/HTMLPurifier',
        ],
    ],
    'cebe/markdown' => [
        'name' => 'cebe/markdown',
        'version' => '1.2.1.0',
        'reference' => '9bac5e971dd391e2802dca5400bbeacbaea9eb86',
        'aliases' => [
            '@cebe/markdown' => $baseDir . '/vendor/cebe/markdown',
        ],
    ],
    'bower-asset/jquery' => [
        'name' => 'bower-asset/jquery',
        'version' => '3.5.1.0',
        'reference' => '4c0e4becb8263bb5b3e6dadc448d8e7305ef8215',
    ],
    'bower-asset/inputmask' => [
        'name' => 'bower-asset/inputmask',
        'version' => '3.3.11.0',
        'reference' => '5e670ad62f50c738388d4dcec78d2888505ad77b',
    ],
    'bower-asset/punycode' => [
        'name' => 'bower-asset/punycode',
        'version' => '1.3.2.0',
        'reference' => '38c8d3131a82567bfef18da09f7f4db68c84f8a3',
    ],
    'bower-asset/yii2-pjax' => [
        'name' => 'bower-asset/yii2-pjax',
        'version' => '2.0.7.1',
        'reference' => 'aef7b953107264f00234902a3880eb50dafc48be',
    ],
    'yiisoft/yii2' => [
        'name' => 'yiisoft/yii2',
        'version' => '2.0.36.0',
        'reference' => 'a557111ea6c27794b98c98b76ff3f127eb55f309',
        'aliases' => [
            '@yii' => $baseDir . '/vendor/yiisoft/yii2',
        ],
    ],
    'bower-asset/bootstrap' => [
        'name' => 'bower-asset/bootstrap',
        'version' => '3.4.1.0',
        'reference' => '68b0d231a13201eb14acd3dc84e51543d16e5f7e',
    ],
    'yiisoft/yii2-bootstrap' => [
        'name' => 'yiisoft/yii2-bootstrap',
        'version' => '2.0.10.0',
        'reference' => '073c9ab0a4eb71f2485d84c96a1967130300d8fc',
        'aliases' => [
            '@yii/bootstrap' => $baseDir . '/vendor/yiisoft/yii2-bootstrap/src',
        ],
    ],
    'doctrine/lexer' => [
        'name' => 'doctrine/lexer',
        'version' => '1.2.1.0',
        'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
        'aliases' => [
            '@Doctrine/Common/Lexer' => $baseDir . '/vendor/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ],
    ],
    'symfony/polyfill-intl-normalizer' => [
        'name' => 'symfony/polyfill-intl-normalizer',
        'version' => '1.18.0.0',
        'reference' => '37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
        'aliases' => [
            '@Symfony/Polyfill/Intl/Normalizer' => $baseDir . '/vendor/symfony/polyfill-intl-normalizer',
        ],
    ],
    'paragonie/random_compat' => [
        'name' => 'paragonie/random_compat',
        'version' => '9.99.99.0',
        'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
    ],
    'symfony/polyfill-php70' => [
        'name' => 'symfony/polyfill-php70',
        'version' => '1.18.0.0',
        'reference' => '0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
        'aliases' => [
            '@Symfony/Polyfill/Php70' => $baseDir . '/vendor/symfony/polyfill-php70',
        ],
    ],
    'symfony/polyfill-php72' => [
        'name' => 'symfony/polyfill-php72',
        'version' => '1.18.0.0',
        'reference' => '639447d008615574653fb3bc60d1986d7172eaae',
        'aliases' => [
            '@Symfony/Polyfill/Php72' => $baseDir . '/vendor/symfony/polyfill-php72',
        ],
    ],
    'symfony/polyfill-intl-idn' => [
        'name' => 'symfony/polyfill-intl-idn',
        'version' => '1.18.0.0',
        'reference' => 'bc6549d068d0160e0f10f7a5a23c7d1406b95ebe',
        'aliases' => [
            '@Symfony/Polyfill/Intl/Idn' => $baseDir . '/vendor/symfony/polyfill-intl-idn',
        ],
    ],
    'egulias/email-validator' => [
        'name' => 'egulias/email-validator',
        'version' => '2.1.18.0',
        'reference' => 'cfa3d44471c7f5bfb684ac2b0da7114283d78441',
        'aliases' => [
            '@Egulias/EmailValidator' => $baseDir . '/vendor/egulias/email-validator/src',
        ],
    ],
    'symfony/polyfill-iconv' => [
        'name' => 'symfony/polyfill-iconv',
        'version' => '1.18.0.0',
        'reference' => '6c2f78eb8f5ab8eaea98f6d414a5915f2e0fce36',
        'aliases' => [
            '@Symfony/Polyfill/Iconv' => $baseDir . '/vendor/symfony/polyfill-iconv',
        ],
    ],
    'symfony/polyfill-mbstring' => [
        'name' => 'symfony/polyfill-mbstring',
        'version' => '1.18.0.0',
        'reference' => 'a6977d63bf9a0ad4c65cd352709e230876f9904a',
        'aliases' => [
            '@Symfony/Polyfill/Mbstring' => $baseDir . '/vendor/symfony/polyfill-mbstring',
        ],
    ],
    'swiftmailer/swiftmailer' => [
        'name' => 'swiftmailer/swiftmailer',
        'version' => '6.2.3.0',
        'reference' => '149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
    ],
    'yiisoft/yii2-swiftmailer' => [
        'name' => 'yiisoft/yii2-swiftmailer',
        'version' => '2.1.2.0',
        'reference' => '09659a55959f9e64b8178d842b64a9ffae42b994',
        'aliases' => [
            '@yii/swiftmailer' => $baseDir . '/vendor/yiisoft/yii2-swiftmailer/src',
        ],
    ],
    'riimu/kit-phpencoder' => [
        'name' => 'riimu/kit-phpencoder',
        'version' => '2.4.0.0',
        'reference' => '7e876d25019c3f6c23321ab5ac1a55c72fcd0933',
        'aliases' => [
            '@Riimu/Kit/PHPEncoder' => $baseDir . '/vendor/riimu/kit-phpencoder/src',
        ],
    ],
    'opis/closure' => [
        'name' => 'opis/closure',
        'version' => '3.5.5.0',
        'reference' => 'dec9fc5ecfca93f45cd6121f8e6f14457dff372c',
        'aliases' => [
            '@Opis/Closure' => $baseDir . '/vendor/opis/closure/src',
        ],
    ],
    'yiisoft/composer-config-plugin' => [
        'name' => 'yiisoft/composer-config-plugin',
        'version' => '0.4.0.0',
        'reference' => 'e3392b6fae3dc3200d85edb359fcef5739558536',
        'aliases' => [
            '@hiqdev/composer/config' => $baseDir . '/vendor/yiisoft/composer-config-plugin/src',
        ],
    ],
    'phpoption/phpoption' => [
        'name' => 'phpoption/phpoption',
        'version' => '1.7.5.0',
        'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
        'aliases' => [
            '@PhpOption' => $baseDir . '/vendor/phpoption/phpoption/src/PhpOption',
        ],
    ],
    'graham-campbell/result-type' => [
        'name' => 'graham-campbell/result-type',
        'version' => '1.0.1.0',
        'reference' => '7e279d2cd5d7fbb156ce46daada972355cea27bb',
        'aliases' => [
            '@GrahamCampbell/ResultType' => $baseDir . '/vendor/graham-campbell/result-type/src',
        ],
    ],
    'symfony/polyfill-ctype' => [
        'name' => 'symfony/polyfill-ctype',
        'version' => '1.18.0.0',
        'reference' => '1c302646f6efc070cd46856e600e5e0684d6b454',
        'aliases' => [
            '@Symfony/Polyfill/Ctype' => $baseDir . '/vendor/symfony/polyfill-ctype',
        ],
    ],
    'symfony/polyfill-php80' => [
        'name' => 'symfony/polyfill-php80',
        'version' => '1.18.0.0',
        'reference' => 'd87d5766cbf48d72388a9f6b85f280c8ad51f981',
        'aliases' => [
            '@Symfony/Polyfill/Php80' => $baseDir . '/vendor/symfony/polyfill-php80',
        ],
    ],
    'vlucas/phpdotenv' => [
        'name' => 'vlucas/phpdotenv',
        'version' => '5.1.0.0',
        'reference' => '448c76d7a9e30c341ff5bc367a923af74ae18467',
        'aliases' => [
            '@Dotenv' => $baseDir . '/vendor/vlucas/phpdotenv/src',
        ],
    ],
    'yiisoft/yii2-debug' => [
        'name' => 'yiisoft/yii2-debug',
        'version' => '2.1.13.0',
        'reference' => '696712a2a3565b1a072ad3c9d298e262967e8282',
        'aliases' => [
            '@yii/debug' => $baseDir . '/vendor/yiisoft/yii2-debug/src',
        ],
    ],
    'phpspec/php-diff' => [
        'name' => 'phpspec/php-diff',
        'version' => '1.1.0.0',
        'reference' => '0464787bfa7cd13576c5a1e318709768798bec6a',
        'aliases' => [
            '@Diff' => $baseDir . '/vendor/phpspec/php-diff/lib/Diff',
        ],
    ],
    'yiisoft/yii2-gii' => [
        'name' => 'yiisoft/yii2-gii',
        'version' => '2.1.4.0',
        'reference' => 'd879cb186361fbc6f71a2d994d580b5a071a5642',
        'aliases' => [
            '@yii/gii' => $baseDir . '/vendor/yiisoft/yii2-gii/src',
        ],
    ],
    'fzaninotto/faker' => [
        'name' => 'fzaninotto/faker',
        'version' => '1.9.1.0',
        'reference' => 'fc10d778e4b84d5bd315dad194661e091d307c6f',
        'aliases' => [
            '@Faker' => $baseDir . '/vendor/fzaninotto/faker/src/Faker',
        ],
    ],
    'yiisoft/yii2-faker' => [
        'name' => 'yiisoft/yii2-faker',
        'version' => '2.0.4.0',
        'reference' => '3df62b1dcb272a8413f9c6e532c9d73f325ccde1',
        'aliases' => [
            '@yii/faker' => $baseDir . '/vendor/yiisoft/yii2-faker',
        ],
    ],
    'doctrine/instantiator' => [
        'name' => 'doctrine/instantiator',
        'version' => '1.3.1.0',
        'reference' => 'f350df0268e904597e3bd9c4685c53e0e333feea',
        'aliases' => [
            '@Doctrine/Instantiator' => $baseDir . '/vendor/doctrine/instantiator/src/Doctrine/Instantiator',
        ],
    ],
    'myclabs/deep-copy' => [
        'name' => 'myclabs/deep-copy',
        'version' => '1.10.1.0',
        'reference' => '969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
        'aliases' => [
            '@DeepCopy' => $baseDir . '/vendor/myclabs/deep-copy/src/DeepCopy',
        ],
    ],
    'phar-io/version' => [
        'name' => 'phar-io/version',
        'version' => '2.0.1.0',
        'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
    ],
    'phar-io/manifest' => [
        'name' => 'phar-io/manifest',
        'version' => '1.0.3.0',
        'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
    ],
    'phpdocumentor/reflection-common' => [
        'name' => 'phpdocumentor/reflection-common',
        'version' => '2.2.0.0',
        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
        'aliases' => [
            '@phpDocumentor/Reflection' => $baseDir . '/vendor/phpdocumentor/reflection-common/src',
        ],
    ],
    'phpdocumentor/type-resolver' => [
        'name' => 'phpdocumentor/type-resolver',
        'version' => '1.3.0.0',
        'reference' => 'e878a14a65245fbe78f8080eba03b47c3b705651',
        'aliases' => [
            '@phpDocumentor/Reflection' => $baseDir . '/vendor/phpdocumentor/type-resolver/src',
        ],
    ],
    'webmozart/assert' => [
        'name' => 'webmozart/assert',
        'version' => '1.9.1.0',
        'reference' => 'bafc69caeb4d49c39fd0779086c03a3738cbb389',
        'aliases' => [
            '@Webmozart/Assert' => $baseDir . '/vendor/webmozart/assert/src',
        ],
    ],
    'phpdocumentor/reflection-docblock' => [
        'name' => 'phpdocumentor/reflection-docblock',
        'version' => '5.2.0.0',
        'reference' => '3170448f5769fe19f456173d833734e0ff1b84df',
        'aliases' => [
            '@phpDocumentor/Reflection' => $baseDir . '/vendor/phpdocumentor/reflection-docblock/src',
        ],
    ],
    'sebastian/diff' => [
        'name' => 'sebastian/diff',
        'version' => '3.0.2.0',
        'reference' => '720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
    ],
    'sebastian/recursion-context' => [
        'name' => 'sebastian/recursion-context',
        'version' => '3.0.0.0',
        'reference' => '5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
    ],
    'sebastian/exporter' => [
        'name' => 'sebastian/exporter',
        'version' => '3.1.2.0',
        'reference' => '68609e1261d215ea5b21b7987539cbfbe156ec3e',
    ],
    'sebastian/comparator' => [
        'name' => 'sebastian/comparator',
        'version' => '3.0.2.0',
        'reference' => '5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
    ],
    'phpspec/prophecy' => [
        'name' => 'phpspec/prophecy',
        'version' => '1.11.1.0',
        'reference' => 'b20034be5efcdab4fb60ca3a29cba2949aead160',
        'aliases' => [
            '@Prophecy' => $baseDir . '/vendor/phpspec/prophecy/src/Prophecy',
        ],
    ],
    'phpunit/php-file-iterator' => [
        'name' => 'phpunit/php-file-iterator',
        'version' => '2.0.2.0',
        'reference' => '050bedf145a257b1ff02746c31894800e5122946',
    ],
    'phpunit/php-token-stream' => [
        'name' => 'phpunit/php-token-stream',
        'version' => '3.1.1.0',
        'reference' => '995192df77f63a59e47f025390d2d1fdf8f425ff',
    ],
    'phpunit/php-text-template' => [
        'name' => 'phpunit/php-text-template',
        'version' => '1.2.1.0',
        'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ],
    'sebastian/code-unit-reverse-lookup' => [
        'name' => 'sebastian/code-unit-reverse-lookup',
        'version' => '1.0.1.0',
        'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ],
    'sebastian/environment' => [
        'name' => 'sebastian/environment',
        'version' => '4.2.3.0',
        'reference' => '464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
    ],
    'sebastian/version' => [
        'name' => 'sebastian/version',
        'version' => '2.0.1.0',
        'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ],
    'theseer/tokenizer' => [
        'name' => 'theseer/tokenizer',
        'version' => '1.2.0.0',
        'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ],
    'phpunit/php-code-coverage' => [
        'name' => 'phpunit/php-code-coverage',
        'version' => '7.0.10.0',
        'reference' => 'f1884187926fbb755a9aaf0b3836ad3165b478bf',
    ],
    'phpunit/php-timer' => [
        'name' => 'phpunit/php-timer',
        'version' => '2.1.2.0',
        'reference' => '1038454804406b0b5f5f520358e78c1c2f71501e',
    ],
    'sebastian/object-reflector' => [
        'name' => 'sebastian/object-reflector',
        'version' => '1.1.1.0',
        'reference' => '773f97c67f28de00d397be301821b06708fca0be',
    ],
    'sebastian/global-state' => [
        'name' => 'sebastian/global-state',
        'version' => '3.0.0.0',
        'reference' => 'edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
    ],
    'sebastian/object-enumerator' => [
        'name' => 'sebastian/object-enumerator',
        'version' => '3.0.3.0',
        'reference' => '7cfd9e65d11ffb5af41198476395774d4c8a84c5',
    ],
    'sebastian/resource-operations' => [
        'name' => 'sebastian/resource-operations',
        'version' => '2.0.1.0',
        'reference' => '4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
    ],
    'sebastian/type' => [
        'name' => 'sebastian/type',
        'version' => '1.1.3.0',
        'reference' => '3aaaa15fa71d27650d62a948be022fe3b48541a3',
    ],
    'phpunit/phpunit' => [
        'name' => 'phpunit/phpunit',
        'version' => '8.5.8.0',
        'reference' => '34c18baa6a44f1d1fbf0338907139e9dce95b997',
    ],
    'codeception/phpunit-wrapper' => [
        'name' => 'codeception/phpunit-wrapper',
        'version' => '8.1.2.0',
        'reference' => 'e610200adf75ebc1ea7cf10d7cdb43e0f5fff3cc',
        'aliases' => [
            '@Codeception/PHPUnit' => $baseDir . '/vendor/codeception/phpunit-wrapper/src',
        ],
    ],
    'codeception/lib-asserts' => [
        'name' => 'codeception/lib-asserts',
        'version' => '1.12.0.0',
        'reference' => 'acd0dc8b394595a74b58dcc889f72569ff7d8e71',
    ],
    'psr/http-message' => [
        'name' => 'psr/http-message',
        'version' => '1.0.1.0',
        'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
        'aliases' => [
            '@Psr/Http/Message' => $baseDir . '/vendor/psr/http-message/src',
        ],
    ],
    'ralouphie/getallheaders' => [
        'name' => 'ralouphie/getallheaders',
        'version' => '3.0.3.0',
        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ],
    'guzzlehttp/psr7' => [
        'name' => 'guzzlehttp/psr7',
        'version' => '1.6.1.0',
        'reference' => '239400de7a173fe9901b9ac7c06497751f00727a',
        'aliases' => [
            '@GuzzleHttp/Psr7' => $baseDir . '/vendor/guzzlehttp/psr7/src',
        ],
    ],
    'symfony/finder' => [
        'name' => 'symfony/finder',
        'version' => '5.1.3.0',
        'reference' => '4298870062bfc667cb78d2b379be4bf5dec5f187',
        'aliases' => [
            '@Symfony/Component/Finder' => $baseDir . '/vendor/symfony/finder',
        ],
    ],
    'symfony/polyfill-php73' => [
        'name' => 'symfony/polyfill-php73',
        'version' => '1.18.0.0',
        'reference' => 'fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
        'aliases' => [
            '@Symfony/Polyfill/Php73' => $baseDir . '/vendor/symfony/polyfill-php73',
        ],
    ],
    'psr/container' => [
        'name' => 'psr/container',
        'version' => '1.0.0.0',
        'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
        'aliases' => [
            '@Psr/Container' => $baseDir . '/vendor/psr/container/src',
        ],
    ],
    'symfony/service-contracts' => [
        'name' => 'symfony/service-contracts',
        'version' => '2.1.3.0',
        'reference' => '58c7475e5457c5492c26cc740cc0ad7464be9442',
        'aliases' => [
            '@Symfony/Contracts/Service' => $baseDir . '/vendor/symfony/service-contracts',
        ],
    ],
    'symfony/polyfill-intl-grapheme' => [
        'name' => 'symfony/polyfill-intl-grapheme',
        'version' => '1.18.0.0',
        'reference' => 'b740103edbdcc39602239ee8860f0f45a8eb9aa5',
        'aliases' => [
            '@Symfony/Polyfill/Intl/Grapheme' => $baseDir . '/vendor/symfony/polyfill-intl-grapheme',
        ],
    ],
    'symfony/string' => [
        'name' => 'symfony/string',
        'version' => '5.1.3.0',
        'reference' => 'f629ba9b611c76224feb21fe2bcbf0b6f992300b',
        'aliases' => [
            '@Symfony/Component/String' => $baseDir . '/vendor/symfony/string',
        ],
    ],
    'symfony/console' => [
        'name' => 'symfony/console',
        'version' => '5.1.3.0',
        'reference' => '2226c68009627934b8cfc01260b4d287eab070df',
        'aliases' => [
            '@Symfony/Component/Console' => $baseDir . '/vendor/symfony/console',
        ],
    ],
    'symfony/deprecation-contracts' => [
        'name' => 'symfony/deprecation-contracts',
        'version' => '2.1.3.0',
        'reference' => '5e20b83385a77593259c9f8beb2c43cd03b2ac14',
    ],
    'psr/event-dispatcher' => [
        'name' => 'psr/event-dispatcher',
        'version' => '1.0.0.0',
        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
        'aliases' => [
            '@Psr/EventDispatcher' => $baseDir . '/vendor/psr/event-dispatcher/src',
        ],
    ],
    'symfony/event-dispatcher-contracts' => [
        'name' => 'symfony/event-dispatcher-contracts',
        'version' => '2.1.3.0',
        'reference' => 'f6f613d74cfc5a623fc36294d3451eb7fa5a042b',
        'aliases' => [
            '@Symfony/Contracts/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher-contracts',
        ],
    ],
    'symfony/event-dispatcher' => [
        'name' => 'symfony/event-dispatcher',
        'version' => '5.1.3.0',
        'reference' => '7827d55911f91c070fc293ea51a06eec80797d76',
        'aliases' => [
            '@Symfony/Component/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher',
        ],
    ],
    'symfony/yaml' => [
        'name' => 'symfony/yaml',
        'version' => '5.1.3.0',
        'reference' => 'ea342353a3ef4f453809acc4ebc55382231d4d23',
        'aliases' => [
            '@Symfony/Component/Yaml' => $baseDir . '/vendor/symfony/yaml',
        ],
    ],
    'symfony/css-selector' => [
        'name' => 'symfony/css-selector',
        'version' => '5.1.3.0',
        'reference' => 'e544e24472d4c97b2d11ade7caacd446727c6bf9',
        'aliases' => [
            '@Symfony/Component/CssSelector' => $baseDir . '/vendor/symfony/css-selector',
        ],
    ],
    'behat/gherkin' => [
        'name' => 'behat/gherkin',
        'version' => '4.6.2.0',
        'reference' => '51ac4500c4dc30cbaaabcd2f25694299df666a31',
        'aliases' => [
            '@Behat/Gherkin' => $baseDir . '/vendor/behat/gherkin/src/Behat/Gherkin',
        ],
    ],
    'codeception/stub' => [
        'name' => 'codeception/stub',
        'version' => '3.7.0.0',
        'reference' => '468dd5fe659f131fc997f5196aad87512f9b1304',
        'aliases' => [
            '@Codeception' => $baseDir . '/vendor/codeception/stub/src',
        ],
    ],
    'codeception/codeception' => [
        'name' => 'codeception/codeception',
        'version' => '4.1.6.0',
        'reference' => '5515b6a6c6f1e1c909aaff2e5f3a15c177dfd1a9',
        'aliases' => [
            '@Codeception' => $baseDir . '/vendor/codeception/codeception/src/Codeception',
            '@Codeception/Extension' => $baseDir . '/vendor/codeception/codeception/ext',
        ],
    ],
    'codeception/module-asserts' => [
        'name' => 'codeception/module-asserts',
        'version' => '1.2.1.0',
        'reference' => '79f13d05b63f2fceba4d0e78044bab668c9b2a6b',
    ],
    'symfony/dom-crawler' => [
        'name' => 'symfony/dom-crawler',
        'version' => '4.4.11.0',
        'reference' => '72b3a65ddd5052cf6d65eac6669748ed311f39bf',
        'aliases' => [
            '@Symfony/Component/DomCrawler' => $baseDir . '/vendor/symfony/dom-crawler',
        ],
    ],
    'symfony/browser-kit' => [
        'name' => 'symfony/browser-kit',
        'version' => '4.2.4.0',
        'reference' => '61d85c5af2fc058014c7c89504c3944e73a086f0',
        'aliases' => [
            '@Symfony/Component/BrowserKit' => $baseDir . '/vendor/symfony/browser-kit',
        ],
    ],
    'codeception/lib-innerbrowser' => [
        'name' => 'codeception/lib-innerbrowser',
        'version' => '1.3.2.0',
        'reference' => '7bdcee4cf654cfeeedd00405edd4f06f85255659',
    ],
    'codeception/module-yii2' => [
        'name' => 'codeception/module-yii2',
        'version' => '1.1.0.0',
        'reference' => '89ec2b34db0fe1c80d404d939ecc7ab07051b4b7',
    ],
    'codeception/module-filesystem' => [
        'name' => 'codeception/module-filesystem',
        'version' => '1.0.2.0',
        'reference' => 'fe3c352479924ec0aaf6a6c3d6825dc14242b81e',
    ],
    'codeception/verify' => [
        'name' => 'codeception/verify',
        'version' => '1.1.0.0',
        'reference' => 'fa0bb946b6d61279f461bcc5a677ac0ed5eab9b3',
        'aliases' => [
            '@Codeception' => $baseDir . '/vendor/codeception/verify/src/Codeception',
        ],
    ],
    'yiisoft/yii2-app-advanced' => [
        'name' => 'yiisoft/yii2-app-advanced',
        'version' => '9999999-dev',
        'reference' => '178f496dc6ee8ea1335dac4bb6d1b2f7f3fd25ec',
    ],
];
