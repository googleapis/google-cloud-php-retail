<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model.proto

namespace Google\Cloud\Retail\V2\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional model features config.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Model.ModelFeaturesConfig</code>
 */
class ModelFeaturesConfig extends \Google\Protobuf\Internal\Message
{
    protected $type_dedicated_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\Model\FrequentlyBoughtTogetherFeaturesConfig $frequently_bought_together_config
     *           Additional configs for frequently-bought-together models.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Additional configs for frequently-bought-together models.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.FrequentlyBoughtTogetherFeaturesConfig frequently_bought_together_config = 1;</code>
     * @return \Google\Cloud\Retail\V2\Model\FrequentlyBoughtTogetherFeaturesConfig|null
     */
    public function getFrequentlyBoughtTogetherConfig()
    {
        return $this->readOneof(1);
    }

    public function hasFrequentlyBoughtTogetherConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Additional configs for frequently-bought-together models.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.FrequentlyBoughtTogetherFeaturesConfig frequently_bought_together_config = 1;</code>
     * @param \Google\Cloud\Retail\V2\Model\FrequentlyBoughtTogetherFeaturesConfig $var
     * @return $this
     */
    public function setFrequentlyBoughtTogetherConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Model\FrequentlyBoughtTogetherFeaturesConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeDedicatedConfig()
    {
        return $this->whichOneof("type_dedicated_config");
    }

}

