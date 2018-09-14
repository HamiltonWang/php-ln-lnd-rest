<?php
/**
 * LnrpcRoute
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
 * LnrpcRoute Class Doc Comment
 *
 * @category Class
 * @description * A path through the channel graph which runs over one or more channels in succession. This struct carries all the information required to craft the Sphinx onion packet, and send the payment along the first hop in the path. A route is only selected as valid if all the channels have sufficient capacity to carry the initial payment amount after fees are accounted for.
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcRoute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalTimeLock' => 'int',
        'totalFees' => 'string',
        'totalAmt' => 'string',
        'hops' => '\Lnd\Rest\Model\LnrpcHop[]',
        'totalFeesMsat' => 'string',
        'totalAmtMsat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalTimeLock' => 'int64',
        'totalFees' => 'int64',
        'totalAmt' => 'int64',
        'hops' => null,
        'totalFeesMsat' => 'int64',
        'totalAmtMsat' => 'int64'
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
        'totalTimeLock' => 'total_time_lock',
        'totalFees' => 'total_fees',
        'totalAmt' => 'total_amt',
        'hops' => 'hops',
        'totalFeesMsat' => 'total_fees_msat',
        'totalAmtMsat' => 'total_amt_msat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalTimeLock' => 'setTotalTimeLock',
        'totalFees' => 'setTotalFees',
        'totalAmt' => 'setTotalAmt',
        'hops' => 'setHops',
        'totalFeesMsat' => 'setTotalFeesMsat',
        'totalAmtMsat' => 'setTotalAmtMsat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalTimeLock' => 'getTotalTimeLock',
        'totalFees' => 'getTotalFees',
        'totalAmt' => 'getTotalAmt',
        'hops' => 'getHops',
        'totalFeesMsat' => 'getTotalFeesMsat',
        'totalAmtMsat' => 'getTotalAmtMsat'
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
        $this->container['totalTimeLock'] = isset($data['totalTimeLock']) ? $data['totalTimeLock'] : null;
        $this->container['totalFees'] = isset($data['totalFees']) ? $data['totalFees'] : null;
        $this->container['totalAmt'] = isset($data['totalAmt']) ? $data['totalAmt'] : null;
        $this->container['hops'] = isset($data['hops']) ? $data['hops'] : null;
        $this->container['totalFeesMsat'] = isset($data['totalFeesMsat']) ? $data['totalFeesMsat'] : null;
        $this->container['totalAmtMsat'] = isset($data['totalAmtMsat']) ? $data['totalAmtMsat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets totalTimeLock
     *
     * @return int
     */
    public function getTotalTimeLock()
    {
        return $this->container['totalTimeLock'];
    }

    /**
     * Sets totalTimeLock
     *
     * @param int $totalTimeLock * The cumulative (final) time lock across the entire route.  This is the CLTV value that should be extended to the first hop in the route. All other hops will decrement the time-lock as advertised, leaving enough time for all hops to wait for or present the payment preimage to complete the payment.
     *
     * @return $this
     */
    public function setTotalTimeLock($totalTimeLock)
    {
        $this->container['totalTimeLock'] = $totalTimeLock;

        return $this;
    }

    /**
     * Gets totalFees
     *
     * @return string
     */
    public function getTotalFees()
    {
        return $this->container['totalFees'];
    }

    /**
     * Sets totalFees
     *
     * @param string $totalFees * The sum of the fees paid at each hop within the final route.  In the case of a one-hop payment, this value will be zero as we don't need to pay a fee it ourself.
     *
     * @return $this
     */
    public function setTotalFees($totalFees)
    {
        $this->container['totalFees'] = $totalFees;

        return $this;
    }

    /**
     * Gets totalAmt
     *
     * @return string
     */
    public function getTotalAmt()
    {
        return $this->container['totalAmt'];
    }

    /**
     * Sets totalAmt
     *
     * @param string $totalAmt * The total amount of funds required to complete a payment over this route. This value includes the cumulative fees at each hop. As a result, the HTLC extended to the first-hop in the route will need to have at least this many satoshis, otherwise the route will fail at an intermediate node due to an insufficient amount of fees.
     *
     * @return $this
     */
    public function setTotalAmt($totalAmt)
    {
        $this->container['totalAmt'] = $totalAmt;

        return $this;
    }

    /**
     * Gets hops
     *
     * @return \Lnd\Rest\Model\LnrpcHop[]
     */
    public function getHops()
    {
        return $this->container['hops'];
    }

    /**
     * Sets hops
     *
     * @param \Lnd\Rest\Model\LnrpcHop[] $hops * Contains details concerning the specific forwarding details at each hop.
     *
     * @return $this
     */
    public function setHops($hops)
    {
        $this->container['hops'] = $hops;

        return $this;
    }

    /**
     * Gets totalFeesMsat
     *
     * @return string
     */
    public function getTotalFeesMsat()
    {
        return $this->container['totalFeesMsat'];
    }

    /**
     * Sets totalFeesMsat
     *
     * @param string $totalFeesMsat * The total fees in millisatoshis.
     *
     * @return $this
     */
    public function setTotalFeesMsat($totalFeesMsat)
    {
        $this->container['totalFeesMsat'] = $totalFeesMsat;

        return $this;
    }

    /**
     * Gets totalAmtMsat
     *
     * @return string
     */
    public function getTotalAmtMsat()
    {
        return $this->container['totalAmtMsat'];
    }

    /**
     * Sets totalAmtMsat
     *
     * @param string $totalAmtMsat * The total amount in millisatoshis.
     *
     * @return $this
     */
    public function setTotalAmtMsat($totalAmtMsat)
    {
        $this->container['totalAmtMsat'] = $totalAmtMsat;

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


