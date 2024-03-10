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
 * Crypto metadata for files with encrypted footer *.
 */
class FileCryptoMetaData extends TBase
{
    public static $_TSPEC = [
        1 => [
            'var' => 'encryption_algorithm',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Flow\Parquet\Thrift\EncryptionAlgorithm',
        ],
        2 => [
            'var' => 'key_metadata',
            'isRequired' => false,
            'type' => TType::STRING,
        ],
    ];

    public static $isValidate = false;

    /**
     * Encryption algorithm. This field is only used for files
     * with encrypted footer. Files with plaintext footer store algorithm id
     * inside footer (FileMetaData structure).
     *
     * @var EncryptionAlgorithm
     */
    public $encryption_algorithm;

    /**
     * Retrieval metadata of key used for encryption of footer,
     * and (possibly) columns *.
     *
     * @var string
     */
    public $key_metadata;

    public function __construct($vals = null)
    {
        if (\is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'FileCryptoMetaData';
    }

    public function read($input)
    {
        return $this->_read('FileCryptoMetaData', self::$_TSPEC, $input);
    }

    public function write($output)
    {
        return $this->_write('FileCryptoMetaData', self::$_TSPEC, $output);
    }
}
