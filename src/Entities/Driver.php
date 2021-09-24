<?php

namespace Entities;

class Driver implements EntityInterface
{
    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $firstname;

    /**
     * @var string
     */
    private string $lastname;

    /**
     * @var int
     */
    private int $vehiculeId;

    /**
     * @var string
     */
    private string $createdAt;

    /**
     * @var string
     */
    private string $tableName = 'Driver';

    /**
     * @param string $firstname
     * @param string $lastname
     * @param int $vehiculeId
     */
    public function __construct(string $firstname, string $lastname, int $vehiculeId)
    {
        $this->createdAt  = date('d M Y');
        $this->firstname  = $firstname;
        $this->lastname   = $lastname;
        $this->vehiculeId = $vehiculeId;
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
     * @return Driver
     */
    public function setId(int $id): Driver
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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Driver
     */
    public function setFirstname(string $firstname): Driver
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Driver
     */
    public function setLastname(string $lastname): Driver
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return int
     */
    public function getVehiculeId(): int
    {
        return $this->vehiculeId;
    }

    /**
     * @param int $vehicleId
     * @return Driver
     */
    public function setVehiculeId(int $vehiculeId): Driver
    {
        $this->vehiculeId = $vehiculeId;
        return $this;
    }

    // /**
    //  * @param Vehicule $vehicule
    //  * @return Driver
    //  */
    // public function setVehicule(Vehicule $vehicule): Driver
    // {
    //     $this->vehiculeId = $vehicule->getId();
    //     return $this;
    // }
}