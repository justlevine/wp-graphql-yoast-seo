<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccec7e4645ca6ddf694d702594caaacb
{
    public static $files = array (
        '7f4622a4bfd291d0b90ad6c3ed842b9a' => __DIR__ . '/../..' . '/access-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\YoastSEO\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\YoastSEO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\YoastSEO\\Connection\\PostTypeToTermNodeConnectionEdge' => __DIR__ . '/../..' . '/src/Connection/PostTypeToTermNodeConnectionEdge.php',
        'WPGraphQL\\YoastSEO\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/CoreSchemaFilters.php',
        'WPGraphQL\\YoastSEO\\Interfaces\\Field' => __DIR__ . '/../..' . '/src/Interfaces/Field.php',
        'WPGraphQL\\YoastSEO\\Interfaces\\Hookable' => __DIR__ . '/../..' . '/src/Interfaces/Hookable.php',
        'WPGraphQL\\YoastSEO\\Interfaces\\Registrable' => __DIR__ . '/../..' . '/src/Interfaces/Registrable.php',
        'WPGraphQL\\YoastSEO\\Interfaces\\Type' => __DIR__ . '/../..' . '/src/Interfaces/Type.php',
        'WPGraphQL\\YoastSEO\\Interfaces\\TypeWithFields' => __DIR__ . '/../..' . '/src/Interfaces/TypeWithFields.php',
        'WPGraphQL\\YoastSEO\\Seo' => __DIR__ . '/../..' . '/src/Seo.php',
        'WPGraphQL\\YoastSEO\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\YoastSEO\\Type\\Enum\\SEOCardTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SEOCardTypeEnum.php',
        'WPGraphQL\\YoastSEO\\Type\\WPInterface\\ContentNodeWithSEO' => __DIR__ . '/../..' . '/src/Type/WPInterface/ContentNodeWithSEO.php',
        'WPGraphQL\\YoastSEO\\Type\\WPInterface\\ContentTypeWithSEO' => __DIR__ . '/../..' . '/src/Type/WPInterface/ContentTypeWithSEO.php',
        'WPGraphQL\\YoastSEO\\Type\\WPInterface\\SEOBaseFields' => __DIR__ . '/../..' . '/src/Type/WPInterface/SEOBaseFields.php',
        'WPGraphQL\\YoastSEO\\Type\\WPInterface\\TermNodeWithSEO' => __DIR__ . '/../..' . '/src/Type/WPInterface/TermNodeWithSEO.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Breadcrumbs' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Breadcrumbs.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\ContentType\\ContentType' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/ContentType/ContentType.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\ContentTypes' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/ContentTypes.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\OpenGraph' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/OpenGraph.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\OpenGraph\\FrontPage' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/OpenGraph/FrontPage.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Redirect' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Redirect.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Schema' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Schema.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Facebook' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Facebook.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Instagram' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Instagram.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\LinkedIn' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/LinkedIn.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\MySpace' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/MySpace.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Pinterest' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Pinterest.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Twitter' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Twitter.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Wikipedia' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Wikipedia.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Social\\Youtube' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Social/Youtube.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Config\\Webmaster' => __DIR__ . '/../..' . '/src/Type/WPObject/Config/Webmaster.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\ContentType\\Archive' => __DIR__ . '/../..' . '/src/Type/WPObject/ContentType/Archive.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\PageInfo\\Schema' => __DIR__ . '/../..' . '/src/Type/WPObject/PageInfo/Schema.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\PostTypeSEO' => __DIR__ . '/../..' . '/src/Type/WPObject/PostTypeSEO.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\PostType\\Schema' => __DIR__ . '/../..' . '/src/Type/WPObject/PostType/Schema.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\SEOConfig' => __DIR__ . '/../..' . '/src/Type/WPObject/SEOConfig.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\SEOPostTypeBreadcrumbs' => __DIR__ . '/../..' . '/src/Type/WPObject/SEOPostTypeBreadcrumbs.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\SEOPostTypePageInfo' => __DIR__ . '/../..' . '/src/Type/WPObject/SEOPostTypePageInfo.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\SEOUser' => __DIR__ . '/../..' . '/src/Type/WPObject/SEOUser.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\TaxonomySEO' => __DIR__ . '/../..' . '/src/Type/WPObject/TaxonomySEO.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\Taxonomy\\Schema' => __DIR__ . '/../..' . '/src/Type/WPObject/Taxonomy/Schema.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\User\\Schema' => __DIR__ . '/../..' . '/src/Type/WPObject/User/Schema.php',
        'WPGraphQL\\YoastSEO\\Type\\WPObject\\User\\Social' => __DIR__ . '/../..' . '/src/Type/WPObject/User/Social.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccec7e4645ca6ddf694d702594caaacb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccec7e4645ca6ddf694d702594caaacb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccec7e4645ca6ddf694d702594caaacb::$classMap;

        }, null, ClassLoader::class);
    }
}
