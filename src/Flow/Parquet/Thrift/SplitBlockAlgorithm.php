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
 * Block-based algorithm type annotation. *.
 */
class SplitBlockAlgorithm extends TBase
{
    public static $_TSPEC = [
    ];

    public static $isValidate = false;

    public function __construct()
    {
    }

    public function getName()
    {
        return 'SplitBlockAlgorithm';
    }

    public function read($input)
    {
        return $this->_read('SplitBlockAlgorithm', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('SplitBlockAlgorithm', self::$_TSPEC, $output);
    }
}
