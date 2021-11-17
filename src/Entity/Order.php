<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="order_id")
     */
    private $order_id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $ref_order;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_order;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $status_order;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $delivery_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $return_date;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="customer_id")
     */
    private $customer;

    public function getOrderId(): ?int
    {
        return $this->order_id;
    }

    public function getRefOrder(): ?string
    {
        return $this->ref_order;
    }

    public function setRefOrder(string $ref_order): self
    {
        $this->ref_order = $ref_order;

        return $this;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->date_order;
    }

    public function setDateOrder(\DateTimeInterface $date_order): self
    {
        $this->date_order = $date_order;

        return $this;
    }

    public function getStatusOrder(): ?string
    {
        return $this->status_order;
    }

    public function setStatusOrder(?string $status_order): self
    {
        $this->status_order = $status_order;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->delivery_date;
    }

    public function setDeliveryDate(?\DateTimeInterface $delivery_date): self
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    public function getReturnDate(): ?\DateTimeInterface
    {
        return $this->return_date;
    }

    public function setReturnDate(?\DateTimeInterface $return_date): self
    {
        $this->return_date = $return_date;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}
