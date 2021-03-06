<?php
/**
 * Content Builder plugin for Craft CMS 3.x
 *
 * A field type to easily create a content builder for each content page. 
 *
 * @link      https://github.com/KoeketieneDesign
 * @copyright Copyright (c) 2020 Stefanie Gevaert
 */

namespace koeketienedesign\contentbuilder\assetbundles\ContentBuilder;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * ContentBuilderAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Stefanie Gevaert
 * @package   ContentBuilder
 * @since     1.0.0
 */
class ContentBuilderAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@koeketienedesign/contentbuilder/assetbundles/contentbuilder/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/ContentBuilder.js',
        ];

        $this->css = [
            'css/ContentBuilder.css',
        ];

        parent::init();
    }
}
