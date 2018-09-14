<?php
/**
 * ChannelCloseSummaryClosureType
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
use \Lnd\Rest\ObjectSerializer;

/**
 * ChannelCloseSummaryClosureType Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelCloseSummaryClosureType
{
    /**
     * Possible values of this enum
     */
    const COOPERATIVE_CLOSE = 'COOPERATIVE_CLOSE';
    const LOCAL_FORCE_CLOSE = 'LOCAL_FORCE_CLOSE';
    const REMOTE_FORCE_CLOSE = 'REMOTE_FORCE_CLOSE';
    const BREACH_CLOSE = 'BREACH_CLOSE';
    const FUNDING_CANCELED = 'FUNDING_CANCELED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COOPERATIVE_CLOSE,
            self::LOCAL_FORCE_CLOSE,
            self::REMOTE_FORCE_CLOSE,
            self::BREACH_CLOSE,
            self::FUNDING_CANCELED,
        ];
    }
}


