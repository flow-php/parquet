<?php

declare(strict_types=1);
namespace Flow\Parquet\Thrift;

/**
 * Autogenerated by Thrift Compiler (0.19.0).
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *
 *  @generated
 */
use Thrift\Base\TBase;

/**
 * Empty struct to signal the order defined by the physical or logical type.
 */
class TypeDefinedOrder extends TBase
{
    public static $_TSPEC = [
    ];

    public static $isValidate = false;

    public function __construct()
    {
    }

    public function getName()
    {
        return 'TypeDefinedOrder';
    }

    public function read($input)
    {
        return $this->_read('TypeDefinedOrder', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('TypeDefinedOrder', self::$_TSPEC, $output);
    }
}
