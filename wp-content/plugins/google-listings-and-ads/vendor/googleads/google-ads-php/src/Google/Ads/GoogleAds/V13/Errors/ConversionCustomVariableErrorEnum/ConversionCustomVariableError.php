<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/conversion_custom_variable_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\ConversionCustomVariableErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible conversion custom variable errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.ConversionCustomVariableErrorEnum.ConversionCustomVariableError</code>
 */
class ConversionCustomVariableError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * A conversion custom variable with the specified name already exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 2;</code>
     */
    const DUPLICATE_NAME = 2;
    /**
     * A conversion custom variable with the specified tag already exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_TAG = 3;</code>
     */
    const DUPLICATE_TAG = 3;
    /**
     * A conversion custom variable with the specified tag is reserved for other
     * uses.
     *
     * Generated from protobuf enum <code>RESERVED_TAG = 4;</code>
     */
    const RESERVED_TAG = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_NAME => 'DUPLICATE_NAME',
        self::DUPLICATE_TAG => 'DUPLICATE_TAG',
        self::RESERVED_TAG => 'RESERVED_TAG',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionCustomVariableError::class, \Google\Ads\GoogleAds\V13\Errors\ConversionCustomVariableErrorEnum_ConversionCustomVariableError::class);

