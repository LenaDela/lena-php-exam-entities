<?php

namespace Entities;

interface EntityInterface
{
    /**
     * @return string the name of entity's table
     */
    public function getTableName(): string;
}