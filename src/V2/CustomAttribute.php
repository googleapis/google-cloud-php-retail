<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A custom attribute that is not explicitly modeled in
 * [Product][google.cloud.retail.v2.Product].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CustomAttribute</code>
 */
class CustomAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * The textual values of this custom attribute. For example, `["yellow",
     * "green"]` when the key is "color".
     * Empty string is not allowed. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated string text = 1;</code>
     */
    private $text;
    /**
     * The numerical values of this custom attribute. For example, `[2.3, 15.4]`
     * when the key is "lengths_cm".
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated double numbers = 2;</code>
     */
    private $numbers;
    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are searchable by text queries in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * Only set if type [text][google.cloud.retail.v2.CustomAttribute.text] is
     * set. Otherwise, a INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>optional bool searchable = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $searchable = null;
    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are indexed, so that they can be filtered,
     * faceted or boosted in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * See [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],
     * [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     * and
     * [SearchRequest.boost_spec][google.cloud.retail.v2.SearchRequest.boost_spec]
     * for more details.
     *
     * Generated from protobuf field <code>optional bool indexable = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $indexable = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $text
     *           The textual values of this custom attribute. For example, `["yellow",
     *           "green"]` when the key is "color".
     *           Empty string is not allowed. Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     *           Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     *           [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     *           Otherwise, an INVALID_ARGUMENT error is returned.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $numbers
     *           The numerical values of this custom attribute. For example, `[2.3, 15.4]`
     *           when the key is "lengths_cm".
     *           Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     *           [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     *           Otherwise, an INVALID_ARGUMENT error is returned.
     *     @type bool $searchable
     *           This field is normally ignored unless
     *           [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     *           of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     *           'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     *           attribute configuration, see [Configuration
     *           modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     *           If true, custom attribute values are searchable by text queries in
     *           [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     *           This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     *           Only set if type [text][google.cloud.retail.v2.CustomAttribute.text] is
     *           set. Otherwise, a INVALID_ARGUMENT error is returned.
     *     @type bool $indexable
     *           This field is normally ignored unless
     *           [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     *           of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     *           'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     *           attribute configuration, see [Configuration
     *           modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     *           If true, custom attribute values are indexed, so that they can be filtered,
     *           faceted or boosted in
     *           [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     *           This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     *           See [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],
     *           [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     *           and
     *           [SearchRequest.boost_spec][google.cloud.retail.v2.SearchRequest.boost_spec]
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The textual values of this custom attribute. For example, `["yellow",
     * "green"]` when the key is "color".
     * Empty string is not allowed. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated string text = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The textual values of this custom attribute. For example, `["yellow",
     * "green"]` when the key is "color".
     * Empty string is not allowed. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated string text = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setText($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->text = $arr;

        return $this;
    }

    /**
     * The numerical values of this custom attribute. For example, `[2.3, 15.4]`
     * when the key is "lengths_cm".
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated double numbers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * The numerical values of this custom attribute. For example, `[2.3, 15.4]`
     * when the key is "lengths_cm".
     * Exactly one of [text][google.cloud.retail.v2.CustomAttribute.text] or
     * [numbers][google.cloud.retail.v2.CustomAttribute.numbers] should be set.
     * Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>repeated double numbers = 2;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->numbers = $arr;

        return $this;
    }

    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are searchable by text queries in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * Only set if type [text][google.cloud.retail.v2.CustomAttribute.text] is
     * set. Otherwise, a INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>optional bool searchable = 3 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getSearchable()
    {
        if (isset($this->searchable)) {
            @trigger_error('searchable is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->searchable) ? $this->searchable : false;
    }

    public function hasSearchable()
    {
        if (isset($this->searchable)) {
            @trigger_error('searchable is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->searchable);
    }

    public function clearSearchable()
    {
        @trigger_error('searchable is deprecated.', E_USER_DEPRECATED);
        unset($this->searchable);
    }

    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are searchable by text queries in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * Only set if type [text][google.cloud.retail.v2.CustomAttribute.text] is
     * set. Otherwise, a INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>optional bool searchable = 3 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setSearchable($var)
    {
        @trigger_error('searchable is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->searchable = $var;

        return $this;
    }

    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are indexed, so that they can be filtered,
     * faceted or boosted in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * See [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],
     * [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     * and
     * [SearchRequest.boost_spec][google.cloud.retail.v2.SearchRequest.boost_spec]
     * for more details.
     *
     * Generated from protobuf field <code>optional bool indexable = 4 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getIndexable()
    {
        if (isset($this->indexable)) {
            @trigger_error('indexable is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->indexable) ? $this->indexable : false;
    }

    public function hasIndexable()
    {
        if (isset($this->indexable)) {
            @trigger_error('indexable is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->indexable);
    }

    public function clearIndexable()
    {
        @trigger_error('indexable is deprecated.', E_USER_DEPRECATED);
        unset($this->indexable);
    }

    /**
     * This field is normally ignored unless
     * [AttributesConfig.attribute_config_level][google.cloud.retail.v2.AttributesConfig.attribute_config_level]
     * of the [Catalog][google.cloud.retail.v2.Catalog] is set to the deprecated
     * 'PRODUCT_LEVEL_ATTRIBUTE_CONFIG' mode. For information about product-level
     * attribute configuration, see [Configuration
     * modes](https://cloud.google.com/retail/docs/attribute-config#config-modes).
     * If true, custom attribute values are indexed, so that they can be filtered,
     * faceted or boosted in
     * [SearchService.Search][google.cloud.retail.v2.SearchService.Search].
     * This field is ignored in a [UserEvent][google.cloud.retail.v2.UserEvent].
     * See [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter],
     * [SearchRequest.facet_specs][google.cloud.retail.v2.SearchRequest.facet_specs]
     * and
     * [SearchRequest.boost_spec][google.cloud.retail.v2.SearchRequest.boost_spec]
     * for more details.
     *
     * Generated from protobuf field <code>optional bool indexable = 4 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setIndexable($var)
    {
        @trigger_error('indexable is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->indexable = $var;

        return $this;
    }

}

