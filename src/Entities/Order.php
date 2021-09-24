<?php

namespace Entities;

class Order implements EntityInterface
{
    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var int
     */
    private int $price;

    /**
     * @var int
     */
    private int $deliveryAddressId;

    /**
     * @var int
     */
    private int $pickUpAddressId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $createdAt;

    /**
     * @var string
     */
    private string $tableName = 'Order';

    public function __construct(int $price, int $deliveryAddressId, int $pickUpAddressId, string $description)
    {
        $this->createdAt = date('d M Y');
        $this->price             = $price;
        $this->deliveryAddressId = $deliveryAddressId;
        $this->pickUpAddressId   = $pickUpAddressId;
        $this->description       = $description;
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
     * @param int $int
     * @return Order
     */
    public function setId(int $id): Order
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
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return Order
     */
    public function setPrice(int $price): Order
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryAddressId(): int
    {
        return $this->deliveryAddressId;
    }

    /**
     * @param int $deliveryAddressId
     * @return Order
     */
    public function setDeliveryAddressId(int $deliveryAddressId): Order
    {
        $this->deliveryAddressId = $deliveryAddressId;
        return $this;
    }

    // /**
    //  * @param Address $address
    //  * @return Driver
    //  */
    // public function setDeliveryAddress(Address $address): Order
    // {
    //     $this->deliveryAddressId = $address->getId();
    //     return $this;
    // }

    /**
     * @return int
     */
    public function getPickupAddressId(): int
    {
        return $this->$getPickupAddress;
    }

    /**
     * @param int $pickUpAddressId
     * @return Order
     */
    public function setPickupAddressId(int $pickUpAddressId): Order
    {
        $this->pickUpAddressId = $pickUpAddressId;
        return $this;
    }

    // /**
    //  * @param Address $address
    //  * @return Driver
    //  */
    // public function setPickupAddress(Address $address): Order
    // {
    //     $this->pickUpAddressId = $address->getId();
    //     return $this;
    // }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Order
     */
    public function setDescription(string $description): Order
    {
        $this->description = $description;
        return $this;
    }
}
