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

class UUIDType extends TBase
{
    public static $_TSPEC = [
    ];

    public static $isValidate = false;

    public function __construct()
    {
    }

    public function getName()
    {
        return 'UUIDType';
    }

    public function read($input)
    {
        return $this->_read('UUIDType', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('UUIDType', self::$_TSPEC, $output);
    }
}
