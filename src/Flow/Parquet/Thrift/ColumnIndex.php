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

/**
 * Description for ColumnIndex.
 * Each <array-field>[i] refers to the page at OffsetIndex.page_locations[i].
 */
class ColumnIndex extends TBase
{
    public static $_TSPEC = [
        1 => [
            'var' => 'null_pages',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::BOOL,
            'elem' => [
                'type' => TType::BOOL,
            ],
        ],
        2 => [
            'var' => 'min_values',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => [
                'type' => TType::STRING,
            ],
        ],
        3 => [
            'var' => 'max_values',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => [
                'type' => TType::STRING,
            ],
        ],
        4 => [
            'var' => 'boundary_order',
            'isRequired' => true,
            'type' => TType::I32,
            'class' => '\Flow\Parquet\Thrift\BoundaryOrder',
        ],
        5 => [
            'var' => 'null_counts',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => [
                'type' => TType::I64,
            ],
        ],
    ];

    public static $isValidate = false;

    /**
     * Stores whether both min_values and max_values are ordered and if so, in
     * which direction. This allows readers to perform binary searches in both
     * lists. Readers cannot assume that max_values[i] <= min_values[i+1], even
     * if the lists are ordered.
     *
     * @var int
     */
    public $boundary_order;

    /**
     * @var string[]
     */
    public $max_values;

    /**
     * Two lists containing lower and upper bounds for the values of each page
     * determined by the ColumnOrder of the column. These may be the actual
     * minimum and maximum values found on a page, but can also be (more compact)
     * values that do not exist on a page. For example, instead of storing ""Blart
     * Versenwald III", a writer may set min_values[i]="B", max_values[i]="C".
     * Such more compact values must still be valid values within the column's
     * logical type. Readers must make sure that list entries are populated before
     * using them by inspecting null_pages.
     *
     * @var string[]
     */
    public $min_values;

    /**
     * A list containing the number of null values for each page *.
     *
     * @var int[]
     */
    public $null_counts;

    /**
     * A list of Boolean values to determine the validity of the corresponding
     * min and max values. If true, a page contains only null values, and writers
     * have to set the corresponding entries in min_values and max_values to
     * byte[0], so that all lists have the same length. If false, the
     * corresponding entries in min_values and max_values must be valid.
     *
     * @var bool[]
     */
    public $null_pages;

    public function __construct($vals = null)
    {
        if (\is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'ColumnIndex';
    }

    public function read($input)
    {
        return $this->_read('ColumnIndex', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('ColumnIndex', self::$_TSPEC, $output);
    }
}
