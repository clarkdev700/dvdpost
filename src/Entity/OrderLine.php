<?php

namespace App\Entity;

use App\Repository\OrderLineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderLineRepository::class)
 */
class OrderLine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="orderline_id")
     */
    private $orderline_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @ORM\Column(type="float")
     */
    private $loc_price;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="order_id")
     */
    private $order;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="orderLines")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="product_id")
     */
    private $product;

    public function getOrderlineId(): ?int
    {
        return $this->orderline_id;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getLocPrice(): ?float
    {
        return $this->loc_price;
    }

    public function setLocPrice(float $loc_price): self
    {
        $this->loc_price = $loc_price;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }
}
