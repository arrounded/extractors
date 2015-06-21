<?php

/*
 * This file is part of Arrounded
 *
 * (c) Madewithlove <heroes@madewithlove.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Arrounded\Extractors\Subjects;

use Arrounded\Extractors\Extractor;

class CustomExtractor extends Extractor
{
    /**
     * @param array $data
     *
     * @return array
     */
    protected function data(array $data = [])
    {
        return [
            'foo' => $data['foo'].' '.$data['bar'],
        ];
    }
}
