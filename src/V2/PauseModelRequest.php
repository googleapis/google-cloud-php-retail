<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for pausing training of a model.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PauseModelRequest</code>
 */
class PauseModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the model to pause.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the model to pause.
     *                     Format:
     *                     `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     *                     Please see {@see ModelServiceClient::modelName()} for help formatting this field.
     *
     * @return \Google\Cloud\Retail\V2\PauseModelRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the model to pause.
     *           Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the model to pause.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the model to pause.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

