<?php

namespace Simple\Contract;

interface CatInterface
{
    const NAME = 'SIMPLE NAME';

    public function getName(): string;

    public function setName(string $name): void;
}
