<?php
namespace Goose\Animal;

class Goose extends Animal implements FlyingAnimal
{
    public function fly(): string
    {
        return "i`m a flying goose";
    }
}
