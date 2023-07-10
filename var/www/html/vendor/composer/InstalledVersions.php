<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.14.2',
      'version' => '1.14.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad785217c1e9555a7d6c6c8c9f406395a5e2882b',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => '3.4.3',
      'version' => '3.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b5e5650391f851ed58910b3e3d48a71062eeced',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => '3.5.3',
      'version' => '3.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '88fa7e5189fd5ec6682477044264dc0ed4e3aa1e',
    ),
    'doctrine/deprecations' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
    ),
    'doctrine/doctrine-bundle' => 
    array (
      'pretty_version' => '2.8.2',
      'version' => '2.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '251cd5aaea32bb92cdad4204840786b317dcdd4c',
    ),
    'doctrine/doctrine-migrations-bundle' => 
    array (
      'pretty_version' => '3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3393f411ba25ade21969c33f2053220044854d01',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95aa4cb529f1e96576f3fda9f5705ada4056a520',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.6',
      'version' => '2.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0a0fa9780f5d4e507415a065172d26a98d02047b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
    ),
    'doctrine/migrations' => 
    array (
      'pretty_version' => '3.5.5',
      'version' => '3.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b1e2b6ba71d21d0c5be22ed03b6fc954d20b204',
    ),
    'doctrine/orm' => 
    array (
      'pretty_version' => '2.14.1',
      'version' => '2.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'de7eee5ed7b1b35c99b118f26f210a8281e6db8e',
    ),
    'doctrine/persistence' => 
    array (
      'pretty_version' => '3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '920da294b4bb0bb527f2a91ed60c18213435880f',
    ),
    'doctrine/sql-formatter' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '25a06c7bf4c6b8218f47928654252863ffc890a5',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.5',
      'version' => '3.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b531a2311709443320c786feb4519cfaf94af796',
    ),
    'friendsofphp/proxy-manager-lts' => 
    array (
      'pretty_version' => 'v1.0.13',
      'version' => '1.0.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '88354616f4cf4f6620910fd035e282173ba453e8',
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '4.7.1',
      'version' => '4.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '91aabc066d5620428120800c0eafc0411e441a62',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '720488632c590286b88b80e62aa3d3d551ad4a50',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.15.3',
      'version' => '4.15.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '570e980a201d8ed0236b0a62ddf2c9cbb2034039',
    ),
    'ocramius/proxy-manager' => 
    array (
      'replaced' => 
      array (
        0 => '^2.1',
      ),
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
    ),
    'phpstan/phpdoc-parser' => 
    array (
      'pretty_version' => '1.15.3',
      'version' => '1.15.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '61800f71a5526081d1b5633766aa88341f1ade76',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.23',
      'version' => '9.2.23.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f1f0f9a2fbb680b26d1cf9b61b6eac43a6e4e9c',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.5.28',
      'version' => '9.5.28.0',
      'aliases' => 
      array (
      ),
      'reference' => '954ca3113a03bf780d22f07bf055d883ee04b65e',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/link' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eea8e8662d5cd3ae4517c9b864493f59fca95562',
    ),
    'psr/link-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
        1 => '1.0.0 || 2.0.0 || 3.0.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.4',
      'version' => '5.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b5dff7bb151a4db11d49d90e5408e4e938270f7',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.5',
      'version' => '5.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'sensio/framework-extra-bundle' => 
    array (
      'pretty_version' => 'v6.2.9',
      'version' => '6.2.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dcfac94d6bdcf95c126e8ccac2104917c7c8f135',
    ),
    'symfony/amqp-messenger' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df5601a7e1d379c13fc0e9e86219e071a370def0',
    ),
    'symfony/asset' => 
    array (
      'pretty_version' => 'v5.4.13',
      'version' => '5.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '9aa867206711cb6fcca51ef127ba52a018170be9',
    ),
    'symfony/browser-kit' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '081fe28a26b6bd671dea85ef3a4b5003f3c88027',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.4.18',
      'version' => '5.4.18.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a33fa08a3f37bb44b90e60b9028796d6b811f9ef',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec79e03125c1d2477e43dde8528535d90cc78379',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '58422fdcb0e715ed05b385f70d3e8b5ed4bbd45f',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '052ef49b660f9ad2a3adb311c555c9bc11ba61f4',
    ),
    'symfony/debug-bundle' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec73a8bb7b966ccbe9e76be3c7dc413d8ae84f47',
    ),
    'symfony/debug-pack' => 
    array (
      'pretty_version' => 'v1.0.10',
      'version' => '1.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '98ef3cb02f9adb54b98d8bc95c84b896513a51d5',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '58f2988128d2d278280781db037677a32cf720db',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
    ),
    'symfony/doctrine-bridge' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e9fce4a5568337402b2b1106907140d56a9d2454',
    ),
    'symfony/doctrine-messenger' => 
    array (
      'pretty_version' => 'v5.4.16',
      'version' => '5.4.16.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e44bc95cf7f9ad34b7a993b9aaa93703e0bc35eb',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '32a07d910edc138a1dd5508c17c6b9bc1eb27a1b',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b900446552833ad2f91ca7dd52aa8ffe78f66cb2',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e18a9d559eb8ebc2220588f1faa726a2fcd31c9',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f98b54df6ad059855739db6fcbc2d36995283fe1',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'pretty_version' => 'v5.4.14',
      'version' => '5.4.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f27d5b1e7926bba18e87719af75f696977cd58b',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.4.13',
      'version' => '5.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac09569844a9109a5966b9438fc29113ce77cf51',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '40c08632019838dfb3350f18cf5563b8080055fc',
    ),
    'symfony/form' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '6150f66dc921375a62e5da1cce3684aee657ddca',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '79dba90bd8a440488b63282ea27d2b30166e8841',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '772129f800fc0bfaa6bd40c40934d544f0957d30',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.4',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b64a0e2df212d5849e4584cabff0cf09c5d6866a',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.4.18',
      'version' => '5.4.18.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da6f57a13e5d7d77197443cf55697cdf65f1352',
    ),
    'symfony/intl' => 
    array (
      'pretty_version' => 'v5.4.15',
      'version' => '5.4.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '2cb39da7f6e7b7344d7d5317dbee8db9d12cc714',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd816412b76447890efedaf9ddfe8632589ce10c',
    ),
    'symfony/maker-bundle' => 
    array (
      'pretty_version' => 'v1.43.0',
      'version' => '1.43.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3f9a1d9e0f4968f68454403e820dffc7db38a59',
    ),
    'symfony/messenger' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6f91bc2732278f5d10ff21833db5ce7c2c4f8b2',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '2a83d82efc91c3f03a23c8b47a896df168aa5c63',
    ),
    'symfony/monolog-bridge' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '0280390d8232a5668b02e0d87e9fce0a535c4af9',
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
    ),
    'symfony/notifier' => 
    array (
      'pretty_version' => 'v5.4.8',
      'version' => '5.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c5df5af88278e8c15020dd1f95f30eebf280f895',
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '54f14e36aa73cb8f7261d7686691fd4d75ea2690',
    ),
    'symfony/orm-pack' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '498e2f554a1a0ac0a776cd348c9150a186383075',
    ),
    'symfony/password-hasher' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0169ed8f09a4ae39eb119218ea1685079a9b179',
    ),
    'symfony/phpunit-bridge' => 
    array (
      'pretty_version' => 'v6.2.3',
      'version' => '6.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3766b8269d3bac5c214a04ebd6870e71e52bcb60',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e75fe6874cbc7e4773d049616ab450eff537bf1',
    ),
    'symfony/profiler-pack' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bcd6e80af9819454ac18594362e7875fd1d771c7',
    ),
    'symfony/property-access' => 
    array (
      'pretty_version' => 'v5.4.15',
      'version' => '5.4.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f3e8f40a1d3da90f674b3dd772e4777ccde4273',
    ),
    'symfony/property-info' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '12e1f7b3d73b1f3690aa524b92b5de9937507361',
    ),
    'symfony/redis-messenger' => 
    array (
      'pretty_version' => 'v5.4.15',
      'version' => '5.4.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cff610d031586c341b9118f3682c8294d959f929',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ce2df9a469c19ba45ca6aca04fec1c358a6e791',
    ),
    'symfony/security-bundle' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '5891533fd72ba854b1fd9f633e14dcc089b45362',
    ),
    'symfony/security-core' => 
    array (
      'pretty_version' => 'v5.4.15',
      'version' => '5.4.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ef922cd626a43b570522cb1616e3d678664c9a0',
    ),
    'symfony/security-csrf' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b97ab244b6dda80abb84a4a236d682871695db4a',
    ),
    'symfony/security-guard' => 
    array (
      'pretty_version' => 'v5.4.13',
      'version' => '5.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '83f647fcdc17aa14908f0e02a302d3d9d0f63fbc',
    ),
    'symfony/security-http' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '863d398f9abedbf3c6da805d4785242000fbe834',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ac4fae1cbad2655a0b05f327e7ce8ef310239fb',
    ),
    'symfony/serializer-pack' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd6b1aca1e4f853d0d1ad3da24576e4dd9ab22510',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v5.4.13',
      'version' => '5.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '6df7a3effde34d81717bbef4591e5ffe32226d69',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '55733a8664b8853b003e70251c58bc8cb2d82a6b',
    ),
    'symfony/test-pack' => 
    array (
      'pretty_version' => '1.0.10',
      'version' => '1.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '03ab012f4aab784690d21417f7cdd7b432fd4e73',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.4.14',
      'version' => '5.4.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f0ed07675863aa6e3939df8b1bc879450b585cab',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'symfony/twig-bridge' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a35a669639ac25e4cb3d6d9c968924d96a7eae6',
    ),
    'symfony/twig-bundle' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac21af4eff72ecd65680d2f3d163b5794ce82fc4',
    ),
    'symfony/twig-pack' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '08a73e833e07921c464336deb7630f93e85ef930',
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '621b820204a238d754f7f60241fcbdb1687641ea',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad74890513d07060255df2575703daf971de92c7',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '2adac0a9b55f9fb40b983b790509581dc3db0fff',
    ),
    'symfony/web-link' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b9b073390359549fec5f5d797f23bbe9e2997a5',
    ),
    'symfony/web-profiler-bundle' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c7635fb150af892f6a79f016b6c5386ab112922',
    ),
    'symfony/webapp-pack' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ca6528e280d88e4f0c283d82e1ffc2777cf0ea9',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'twig/extra-bundle' => 
    array (
      'pretty_version' => 'v3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edfcdbdc943b52101011d57ec546af393dc56537',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ffcf4b7d890770466da3b2666f82ac054e7ec72',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
