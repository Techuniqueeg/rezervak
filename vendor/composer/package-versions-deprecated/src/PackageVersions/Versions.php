<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'barryvdh/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'brian2694/laravel-toastr' => '5.56@98137445f55d981f3587800349f1aa7b045d7974',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '3.1.2@3ee2622b57370c786f531678f6641208747f7bfc',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.4.0@d2113d9b2e0e349796e72d2a63cf9319100382d2',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'geo-io/interface' => 'v1.0.1@cf46fe7b013de20ab8b601238c7d91b480810644',
  'geo-io/wkb-parser' => 'v1.0.1@cceee8f4e8b2058f3f1a0372c930140f23fe1ee1',
  'graham-campbell/result-type' => 'v1.0.2@84afea85c6841deeea872f36249a206e878a5de0',
  'grimzy/laravel-mysql-spatial' => '5.0.0@b89ed02ee4f9113a9fa952ae5f0e78bb5e82aa2a',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '2.0.0@1dc8d9cba3897165e16d12bb13d813afb1eb3fe7',
  'intervention/image' => '2.6.1@0925f10b259679b5d8ca58f3a2add9255ffcda45',
  'jmikola/geojson' => '1.0.2@6ec3016cc0215667b7775f6ead7bd0337ad66eee',
  'kingflamez/laravelrave' => 'v4.2.0@02ccc18e5f03fb25a12f898ddd180d88d0ed13d9',
  'laminas/laminas-diactoros' => '2.6.0@7d2034110ae18afe05050b796a3ee4b3fe177876',
  'laminas/laminas-zendframework-bridge' => '1.4.0@bf180a382393e7db5c1e8d0f2ec0c4af9c724baf',
  'laravel/framework' => 'v8.60.0@44f16a31a1d4ac8a51605550d7796e2273984a48',
  'laravel/passport' => 'v10.1.3@a5e4471dd99b7638ab5ca3ecab6cd87cf37eb410',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'laravelpkg/laravelchk' => 'dev-master@f60183a9394caae3819c563960feca20c072efe0',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.4@71cf170102c8371ccd933fa4df6252086d144de6',
  'league/commonmark' => '2.0.2@2df87709f44b0dd733df86aef0830dce9b1f0f13',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.5@18634df356bfd4119fe3d6156bdb990c414c14ea',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'league/oauth2-server' => '8.3.2@0809487d33dd8a2c8c8c04e4a599ba4aadba1ae6',
  'madnest/madzipper' => 'v1.1.0@fd1d8199d04eac103eed9355c9bba680dcf8b89b',
  'mercadopago/dx-php' => '2.4.3@0cc752104164f0bc9b94e3d5b7754016039b822b',
  'monolog/monolog' => '2.3.2@71312564759a7db5b789296369c1a264efc43aad',
  'nesbot/carbon' => '2.53.1@f4655858a784988f880c1b8c7feabbf02dfdf045',
  'nette/schema' => 'v1.2.1@f5ed39fc96358f922cedfd1e516f0dadf5d2be0d',
  'nette/utils' => 'v3.2.3@5c36cc1ba9bb6abb8a9e425cf054e0c3fd5b9822',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'nyholm/psr7' => '1.4.1@2212385b47153ea71b1c1b1374f8cb5e4f7892ec',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paragonie/constant_time_encoding' => 'v2.4.0@f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpoption/phpoption' => '1.8.0@5455cb38aed4523f99977c4a12ef19da4bfe2a28',
  'phpseclib/phpseclib' => '3.0.10@62fcc5a94ac83b1506f52d7558d828617fac9187',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.1@eaca1dc1054ddd10cbd83c1461907bee6fb528fa',
  'ramsey/uuid' => '4.2.1@fe665a03df4f056aa65af552a96e1976df8c8dae',
  'rap2hpoutre/fast-excel' => 'v3.0.0@e7633e58d695e29669ecbb08aeffbbbcb2738925',
  'razorpay/razorpay' => '2.7.0@e28454acdc110b544fc80bec9518b9b86b275a2c',
  'rmccue/requests' => 'v1.8.0@afbe4790e4def03581c4a0963a1e8aa01f6030f1',
  'stripe/stripe-php' => 'v7.95.0@ed372a1f6430b06dda408bb33b27d2be35ceaf07',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.3.7@8b1008344647462ae6ec57559da166c2bfa5e16a',
  'symfony/css-selector' => 'v5.3.4@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.3.7@3bc60d0fba00ae8d1eaa9eb5ab11a2bbdd1fc321',
  'symfony/event-dispatcher' => 'v5.3.7@ce7b20d69c66a20939d8952b617506a44d102130',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.7@e36c8e5502b4f3f0190c675f1c1f1248a64f04e5',
  'symfony/http-kernel' => 'v5.3.7@a3a78e37935a527b50376c22ac1cec35b57fe787',
  'symfony/mime' => 'v5.3.7@ae887cb3b044658676129f5e97aeb7e9eb69c2d8',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.3.7@38f26c7d6ed535217ea393e05634cb0b244a1967',
  'symfony/psr-http-message-bridge' => 'v2.1.1@c9012994c4b4fb23e7c57dd86b763a417a04feba',
  'symfony/routing' => 'v5.3.7@be865017746fe869007d94220ad3f5297951811b',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/translation' => 'v5.3.7@4d595a6d15fd3a2c67f6f31d14d15d3b7356d7a6',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.3.7@3ad5af4aed07d0a0201bbcfc42658fe6c5b2fb8f',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twilio/sdk' => '6.28.2@530be7f621fc8fb1d2af5ba5a70e278f262e048f',
  'unicodeveloper/laravel-paystack' => '1.0.7@bfcb92255c29d92b0c4e80355a65de14e2e156f3',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.9.2@2b734ff7d86d4b6f169df49aed3aefcdac7a40d0',
  'vonage/nexmo-bridge' => '0.1.0@62653b1165f4401580ca8d2b859f59c968de3711',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'barryvdh/laravel-debugbar' => 'v3.6.2@70b89754913fd89fef16d0170a91dbc2a5cd633a',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.13.1@e3f49bef7b4165fa4b8a9dc579e7b63fa06aef78',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.16.0@271d384d216e5e5c468a6b28feedf95d49f83b35',
  'filp/whoops' => '2.14.1@15ead64e9828f0fc90932114429c4f7923570cb1',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laravel/sail' => 'v1.10.1@267fafeaf0e0311952316ae0f3c765abc7516469',
  'maximebf/debugbar' => 'v1.17.1@0a3532556be0145603f8a9de23e76dc28eed7054',
  'mockery/mockery' => '1.4.4@e01123a0e847d52d186c5eb4b9bf58b0c6d00346',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.9.0@63456f5c3e8c4bc52bd573e5c85674d64d84fd43',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.14.0@d86dfc2e2a3cd366cee475e52c6bb3bbc371aa0e',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.9@ea8c2dfb1065eb35a79b3681eee6e6fb0a6f273b',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/debug' => 'v4.4.27@2f9160e92eb64c95da7368c867b663a8e34e980c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-master@806c0443111891144834fbb72a7afb8364d8542f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}