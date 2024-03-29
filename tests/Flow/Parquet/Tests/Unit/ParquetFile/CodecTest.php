<?php

declare(strict_types=1);

namespace Flow\Parquet\Tests\Unit\ParquetFile;

use Flow\Parquet\ParquetFile\{Codec, Compressions};
use Flow\Parquet\{Option, Options};
use PHPUnit\Framework\TestCase;

final class CodecTest extends TestCase
{
    public function test_gzip() : void
    {
        $data = 'this is some test data to be compressed';

        $codec = new Codec((new Options())->set(Option::GZIP_COMPRESSION_LEVEL, 9));

        self::assertSame(
            $data,
            $codec->decompress($codec->compress($data, Compressions::GZIP), Compressions::GZIP)
        );
    }

    public function test_snappy() : void
    {
        $data = 'this is some test data to be compressed';

        $codec = new Codec((new Options()));

        self::assertSame(
            $data,
            $codec->decompress($codec->compress($data, Compressions::SNAPPY), Compressions::SNAPPY)
        );
    }

    public function test_uncompressed() : void
    {
        $data = 'this is some test data to be compressed';

        $codec = new Codec((new Options()));

        self::assertSame(
            $data,
            $codec->decompress($codec->compress($data, Compressions::UNCOMPRESSED), Compressions::UNCOMPRESSED)
        );
    }
}
