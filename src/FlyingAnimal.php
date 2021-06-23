<?php

namespace FlyingAnimal\Animal;

interface FlyingAnimal
{
    public const TYPE = "flyer";
    public function fly(): string;
}
