<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fulfillment information, such as the store IDs for in-store pickup or region
 * IDs for different shipping methods.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.FulfillmentInfo</code>
 */
class FulfillmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The fulfillment type, including commonly used types (such as pickup in
     * store and same day delivery), and custom types. Customers have to map
     * custom types to their display names before rendering UI.
     * Supported values:
     * * "pickup-in-store"
     * * "ship-to-store"
     * * "same-day-delivery"
     * * "next-day-delivery"
     * * "custom-type-1"
     * * "custom-type-2"
     * * "custom-type-3"
     * * "custom-type-4"
     * * "custom-type-5"
     * If this field is set to an invalid value other than these, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * The IDs for this [type][google.cloud.retail.v2.FulfillmentInfo.type], such
     * as the store IDs for
     * [FulfillmentInfo.type.pickup-in-store][google.cloud.retail.v2.FulfillmentInfo.type]
     * or the region IDs for
     * [FulfillmentInfo.type.same-day-delivery][google.cloud.retail.v2.FulfillmentInfo.type].
     * A maximum of 3000 values are allowed. Each value must be a string with a
     * length limit of 30 characters, matching the pattern `[a-zA-Z0-9_-]+`, such
     * as "store1" or "REGION-2". Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>repeated string place_ids = 2;</code>
     */
    private $place_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The fulfillment type, including commonly used types (such as pickup in
     *           store and same day delivery), and custom types. Customers have to map
     *           custom types to their display names before rendering UI.
     *           Supported values:
     *           * "pickup-in-store"
     *           * "ship-to-store"
     *           * "same-day-delivery"
     *           * "next-day-delivery"
     *           * "custom-type-1"
     *           * "custom-type-2"
     *           * "custom-type-3"
     *           * "custom-type-4"
     *           * "custom-type-5"
     *           If this field is set to an invalid value other than these, an
     *           INVALID_ARGUMENT error is returned.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $place_ids
     *           The IDs for this [type][google.cloud.retail.v2.FulfillmentInfo.type], such
     *           as the store IDs for
     *           [FulfillmentInfo.type.pickup-in-store][google.cloud.retail.v2.FulfillmentInfo.type]
     *           or the region IDs for
     *           [FulfillmentInfo.type.same-day-delivery][google.cloud.retail.v2.FulfillmentInfo.type].
     *           A maximum of 3000 values are allowed. Each value must be a string with a
     *           length limit of 30 characters, matching the pattern `[a-zA-Z0-9_-]+`, such
     *           as "store1" or "REGION-2". Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The fulfillment type, including commonly used types (such as pickup in
     * store and same day delivery), and custom types. Customers have to map
     * custom types to their display names before rendering UI.
     * Supported values:
     * * "pickup-in-store"
     * * "ship-to-store"
     * * "same-day-delivery"
     * * "next-day-delivery"
     * * "custom-type-1"
     * * "custom-type-2"
     * * "custom-type-3"
     * * "custom-type-4"
     * * "custom-type-5"
     * If this field is set to an invalid value other than these, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The fulfillment type, including commonly used types (such as pickup in
     * store and same day delivery), and custom types. Customers have to map
     * custom types to their display names before rendering UI.
     * Supported values:
     * * "pickup-in-store"
     * * "ship-to-store"
     * * "same-day-delivery"
     * * "next-day-delivery"
     * * "custom-type-1"
     * * "custom-type-2"
     * * "custom-type-3"
     * * "custom-type-4"
     * * "custom-type-5"
     * If this field is set to an invalid value other than these, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The IDs for this [type][google.cloud.retail.v2.FulfillmentInfo.type], such
     * as the store IDs for
     * [FulfillmentInfo.type.pickup-in-store][google.cloud.retail.v2.FulfillmentInfo.type]
     * or the region IDs for
     * [FulfillmentInfo.type.same-day-delivery][google.cloud.retail.v2.FulfillmentInfo.type].
     * A maximum of 3000 values are allowed. Each value must be a string with a
     * length limit of 30 characters, matching the pattern `[a-zA-Z0-9_-]+`, such
     * as "store1" or "REGION-2". Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>repeated string place_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlaceIds()
    {
        return $this->place_ids;
    }

    /**
     * The IDs for this [type][google.cloud.retail.v2.FulfillmentInfo.type], such
     * as the store IDs for
     * [FulfillmentInfo.type.pickup-in-store][google.cloud.retail.v2.FulfillmentInfo.type]
     * or the region IDs for
     * [FulfillmentInfo.type.same-day-delivery][google.cloud.retail.v2.FulfillmentInfo.type].
     * A maximum of 3000 values are allowed. Each value must be a string with a
     * length limit of 30 characters, matching the pattern `[a-zA-Z0-9_-]+`, such
     * as "store1" or "REGION-2". Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>repeated string place_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlaceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->place_ids = $arr;

        return $this;
    }

}

