<?php
/**
 * LnrpcSendRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * rpc.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lnd\Rest\Model;

use \ArrayAccess;
use \Lnd\Rest\ObjectSerializer;

/**
 * LnrpcSendRequest Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcSendRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcSendRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dest' => 'string',
        'destString' => 'string',
        'amt' => 'string',
        'paymentHash' => 'string',
        'paymentHashString' => 'string',
        'paymentRequest' => 'string',
        'finalCltvDelta' => 'int',
        'feeLimit' => '\Lnd\Rest\Model\LnrpcFeeLimit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dest' => 'byte',
        'destString' => null,
        'amt' => 'int64',
        'paymentHash' => 'byte',
        'paymentHashString' => null,
        'paymentRequest' => null,
        'finalCltvDelta' => 'int32',
        'feeLimit' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dest' => 'dest',
        'destString' => 'dest_string',
        'amt' => 'amt',
        'paymentHash' => 'payment_hash',
        'paymentHashString' => 'payment_hash_string',
        'paymentRequest' => 'payment_request',
        'finalCltvDelta' => 'final_cltv_delta',
        'feeLimit' => 'fee_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dest' => 'setDest',
        'destString' => 'setDestString',
        'amt' => 'setAmt',
        'paymentHash' => 'setPaymentHash',
        'paymentHashString' => 'setPaymentHashString',
        'paymentRequest' => 'setPaymentRequest',
        'finalCltvDelta' => 'setFinalCltvDelta',
        'feeLimit' => 'setFeeLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dest' => 'getDest',
        'destString' => 'getDestString',
        'amt' => 'getAmt',
        'paymentHash' => 'getPaymentHash',
        'paymentHashString' => 'getPaymentHashString',
        'paymentRequest' => 'getPaymentRequest',
        'finalCltvDelta' => 'getFinalCltvDelta',
        'feeLimit' => 'getFeeLimit'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['dest'] = isset($data['dest']) ? $data['dest'] : null;
        $this->container['destString'] = isset($data['destString']) ? $data['destString'] : null;
        $this->container['amt'] = isset($data['amt']) ? $data['amt'] : null;
        $this->container['paymentHash'] = isset($data['paymentHash']) ? $data['paymentHash'] : null;
        $this->container['paymentHashString'] = isset($data['paymentHashString']) ? $data['paymentHashString'] : null;
        $this->container['paymentRequest'] = isset($data['paymentRequest']) ? $data['paymentRequest'] : null;
        $this->container['finalCltvDelta'] = isset($data['finalCltvDelta']) ? $data['finalCltvDelta'] : null;
        $this->container['feeLimit'] = isset($data['feeLimit']) ? $data['feeLimit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['dest']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['dest'])) {
            $invalidProperties[] = "invalid value for 'dest', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['paymentHash']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['paymentHash'])) {
            $invalidProperties[] = "invalid value for 'paymentHash', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['dest'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['paymentHash'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets dest
     *
     * @return string
     */
    public function getDest()
    {
        return $this->container['dest'];
    }

    /**
     * Sets dest
     *
     * @param string $dest dest
     *
     * @return $this
     */
    public function setDest($dest)
    {

        if (!is_null($dest) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $dest))) {
            throw new \InvalidArgumentException("invalid value for $dest when calling LnrpcSendRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['dest'] = $dest;

        return $this;
    }

    /**
     * Gets destString
     *
     * @return string
     */
    public function getDestString()
    {
        return $this->container['destString'];
    }

    /**
     * Sets destString
     *
     * @param string $destString destString
     *
     * @return $this
     */
    public function setDestString($destString)
    {
        $this->container['destString'] = $destString;

        return $this;
    }

    /**
     * Gets amt
     *
     * @return string
     */
    public function getAmt()
    {
        return $this->container['amt'];
    }

    /**
     * Sets amt
     *
     * @param string $amt / Number of satoshis to send.
     *
     * @return $this
     */
    public function setAmt($amt)
    {
        $this->container['amt'] = $amt;

        return $this;
    }

    /**
     * Gets paymentHash
     *
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->container['paymentHash'];
    }

    /**
     * Sets paymentHash
     *
     * @param string $paymentHash paymentHash
     *
     * @return $this
     */
    public function setPaymentHash($paymentHash)
    {

        if (!is_null($paymentHash) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $paymentHash))) {
            throw new \InvalidArgumentException("invalid value for $paymentHash when calling LnrpcSendRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['paymentHash'] = $paymentHash;

        return $this;
    }

    /**
     * Gets paymentHashString
     *
     * @return string
     */
    public function getPaymentHashString()
    {
        return $this->container['paymentHashString'];
    }

    /**
     * Sets paymentHashString
     *
     * @param string $paymentHashString paymentHashString
     *
     * @return $this
     */
    public function setPaymentHashString($paymentHashString)
    {
        $this->container['paymentHashString'] = $paymentHashString;

        return $this;
    }

    /**
     * Gets paymentRequest
     *
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->container['paymentRequest'];
    }

    /**
     * Sets paymentRequest
     *
     * @param string $paymentRequest * A bare-bones invoice for a payment within the Lightning Network.  With the details of the invoice, the sender has all the data necessary to send a payment to the recipient.
     *
     * @return $this
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->container['paymentRequest'] = $paymentRequest;

        return $this;
    }

    /**
     * Gets finalCltvDelta
     *
     * @return int
     */
    public function getFinalCltvDelta()
    {
        return $this->container['finalCltvDelta'];
    }

    /**
     * Sets finalCltvDelta
     *
     * @param int $finalCltvDelta * The CLTV delta from the current height that should be used to set the timelock for the final hop.
     *
     * @return $this
     */
    public function setFinalCltvDelta($finalCltvDelta)
    {
        $this->container['finalCltvDelta'] = $finalCltvDelta;

        return $this;
    }

    /**
     * Gets feeLimit
     *
     * @return \Lnd\Rest\Model\LnrpcFeeLimit
     */
    public function getFeeLimit()
    {
        return $this->container['feeLimit'];
    }

    /**
     * Sets feeLimit
     *
     * @param \Lnd\Rest\Model\LnrpcFeeLimit $feeLimit * The maximum number of satoshis that will be paid as a fee of the payment. This value can be represented either as a percentage of the amount being sent, or as a fixed amount of the maximum fee the user is willing the pay to send the payment.
     *
     * @return $this
     */
    public function setFeeLimit($feeLimit)
    {
        $this->container['feeLimit'] = $feeLimit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


