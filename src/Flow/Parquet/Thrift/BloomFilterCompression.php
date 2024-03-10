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
use Thrift\Type\TType;

class BloomFilterCompression extends TBase
{
    public static $_TSPEC = [
        1 => [
            'var' => 'UNCOMPRESSED',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Flow\Parquet\Thrift\Uncompressed',
        ],
    ];

    public static $isValidate = false;

    /**
     * @var Uncompressed
     */
    public $UNCOMPRESSED;

    public function __construct($vals = null)
    {
        if (\is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'BloomFilterCompression';
    }

    public function read($input)
    {
        return $this->_read('BloomFilterCompression', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('BloomFilterCompression', self::$_TSPEC, $output);
    }
}
