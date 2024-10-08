<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/purge_config.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of the PurgeProductsRequest. If the long running operation is
 * successfully done, then this message is returned by the
 * google.longrunning.Operations.response field.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PurgeProductsResponse</code>
 */
class PurgeProductsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The total count of products purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     */
    protected $purge_count = 0;
    /**
     * A sample of the product names that will be deleted.
     * Only populated if `force` is set to false. A max of 100 names will be
     * returned and the names are chosen at random.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     */
    private $purge_sample;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $purge_count
     *           The total count of products purged as a result of the operation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $purge_sample
     *           A sample of the product names that will be deleted.
     *           Only populated if `force` is set to false. A max of 100 names will be
     *           returned and the names are chosen at random.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\PurgeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The total count of products purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     * @return int|string
     */
    public function getPurgeCount()
    {
        return $this->purge_count;
    }

    /**
     * The total count of products purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPurgeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->purge_count = $var;

        return $this;
    }

    /**
     * A sample of the product names that will be deleted.
     * Only populated if `force` is set to false. A max of 100 names will be
     * returned and the names are chosen at random.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPurgeSample()
    {
        return $this->purge_sample;
    }

    /**
     * A sample of the product names that will be deleted.
     * Only populated if `force` is set to false. A max of 100 names will be
     * returned and the names are chosen at random.
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPurgeSample($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->purge_sample = $arr;

        return $this;
    }

}

