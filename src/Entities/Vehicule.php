<?php

namespace Entities;

class Vehicule implements EntityInterface
{

    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $createdAt;

    /**
     * @var string
     */
    private string $tableName = 'Vehicule';

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->createdAt = date('d M Y');
        $this->name      = $name;
    }

    /**
     * @return string the name of entity's table
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Vehicule
     */
    public function setId(int $id): Vehicule
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Vehicule
     */
    public function setName(string $name): Vehicule
    {
        $this->name = $name;
        return $this;
    }
}