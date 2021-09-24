<?php

namespace Entities;

class Address implements EntityInterface
{
    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var int
     */
    private int $number;

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $complementary;

    /**
     * @var string
     */
    private string $createdAt;

    /**
     * @var string
     */
    private string $tableName = 'Address';

    /**
     * @param int $number
     * @param string $street
     * @param string $complementary
     */
    public function __construct(int $number, string $street, string $complementary)
    {
        $this->createdAt     = date('d M Y');
        $this->number        = $number;
        $this->street        = $street;
        $this->complementary = $complementary;
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
     * @return Address
     */
    public function setId(int $id): Address
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
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Address
     */
    public function setNumber(int $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplementary(): string
    {
        return $this->complementary;
    }

    /**
     * @param string $complementary
     * @return Address
     */
    public function setComplementary(string $complementary): Address
    {
        $this->complementary = $complementary;
        return $this;
    }
}