<?php

namespace Liloi\Imperial\Engine\Domain\Imperials;

use Liloi\Tools\Entity as AbstractEntity;

class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_imperial');
    }

    public function save(): void
    {
        Manager::save($this);
    }
}