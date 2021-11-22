<?php

namespace App\Entity;

use App\Repository\ProductActorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductActorRepository::class)
 */
class ProductActor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,referencedColumnName="product_id")
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity=Actor::class, cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, referencedColumnName="actor_id")
     */
    private $actor;

    public function __construct($product, $actor)
    {    
        $this->setProduct($product);
        $this->setActor($actor);
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getActor(): ?Actor
    {
        return $this->actor;
    }

    public function setActor(?Actor $actor): self
    {
        $this->actor = $actor;

        return $this;
    }
}
