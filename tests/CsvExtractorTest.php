<?php

/*
 * This file is part of Arrounded
 *
 * (c) Madewithlove <heroes@madewithlove.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Arrounded\Extractors;

class CsvExtractorTest extends AbstractExtractorTest
{
    public function test_can_extract_data()
    {
        $extractor = new CsvExtractor();
        $extractor->setFixture('./tests/mocks/data.csv');

        $extractor->run(function ($item) {
            $this->assertEquals(['foo' => 'foo', 'bar' => 'bar'], $item);
        });
    }
}
