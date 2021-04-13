<?php

class Animal {
    private int $age;
    protected int $b;
    public int $c;

    public function __construct(int $age)
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function __destruct()
    {

    }
}