<?php

namespace CountingUtil;

class GlobalCounter {

    protected $counter;

    public function __construct(int $startValue)
    {
        $this->counter = $startValue;
    }

    public function increament() : int{
        return ++$this->counter;
    }

    public function decreament() : int{
        return --$this->counter;
    }

    public function currentValue() : int {
        return $this->counter;
    }

}