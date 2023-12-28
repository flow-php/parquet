<?php declare(strict_types=1);
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

/**
 * Timestamp logical type annotation.
 *
 * Allowed for physical types: INT64
 */
class TimestampType extends TBase
{
    public static $_TSPEC = [
        1 => [
            'var' => 'isAdjustedToUTC',
            'isRequired' => true,
            'type' => TType::BOOL,
        ],
        2 => [
            'var' => 'unit',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Flow\Parquet\Thrift\TimeUnit',
        ],
    ];

    public static $isValidate = false;

    /**
     * @var bool
     */
    public $isAdjustedToUTC;

    /**
     * @var TimeUnit
     */
    public $unit;

    public function __construct($vals = null)
    {
        if (\is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TimestampType';
    }

    public function read($input)
    {
        return $this->_read('TimestampType', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('TimestampType', self::$_TSPEC, $output);
    }
}
