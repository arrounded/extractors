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

class Extractor implements ExtractorInterface
{
    /**
     * @var array
     */
    protected $fixture = [];

    /**
     * @param callable|null $callback
     */
    public function run(callable $callback = null)
    {
        foreach ($this->fixture as $item) {
            $this->useCallable($callback, $item);
        }
    }

    /**
     * @param array $data
     *
     * @return array
     */
    protected function data(array $data = [])
    {
        return $data;
    }

    /**
     * @param $fixture
     *
     * @return $this
     */
    public function setFixture($fixture)
    {
        $this->fixture = $fixture;

        return $this;
    }

    /**
     * @param callable $callback
     * @param array    $item
     */
    protected function useCallable(callable $callback, $item = [])
    {
        if ($callback && is_callable($callback)) {
            $callback($this->data($item));
        }
    }
}
