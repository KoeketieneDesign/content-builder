<?php
/**
 * Content Builder plugin for Craft CMS 3.x
 *
 * A field type to easily create a content builder for each content page. 
 *
 * @link      https://github.com/KoeketieneDesign
 * @copyright Copyright (c) 2020 Stefanie Gevaert
 */

namespace koeketienedesign\contentbuilder\models;

use koeketienedesign\contentbuilder\ContentBuilder;

use Craft;
use craft\base\Model;

/**
 * ContentBuilderModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Stefanie Gevaert
 * @package   ContentBuilder
 * @since     1.0.0
 */
class ContentBuilderModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
