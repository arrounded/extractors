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

use League\Csv\Reader;

class CsvExtractor extends Extractor
{
    /**
     * @param callable|null $callback
     */
    public function run(callable $callback = null)
    {
        $reader = Reader::createFromPath($this->fixture);
        $columns = $reader->fetchOne();

        $reader->setOffset(1);
        $reader->addFilter(function ($data) {
           return array_filter($data);
        });

        $items = $reader->fetchAssoc($columns);

        foreach ($items as $item) {
            $this->useCallable($callback, $item);
        }
    }
}
