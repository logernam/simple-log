<?php

namespace Simple\Models;

use Simple\Contract\CatInterface;

class Cat implements CatInterface
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
