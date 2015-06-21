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

use Arrounded\Extractors\Subjects\CustomExtractor;
use PHPUnit_Framework_TestCase;

class ExtractorTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test_can_extract_data()
    {
        $extractor = new Extractor();
        $extractor->setFixture([
            ['foo' => 'bar'],
        ]);

        $extractor->run(function ($item) {
            $this->assertEquals(['foo' => 'bar'], $item);
        });
    }

    public function test_can_extend_extractor()
    {
        $extractor = new CustomExtractor();
        $extractor->setFixture([
            ['foo' => 'foo', 'bar' => 'bar'],
        ]);

        $extractor->run(function ($item) {
            $this->assertEquals(['foo' => 'foo bar'], $item);
        });
    }
}
