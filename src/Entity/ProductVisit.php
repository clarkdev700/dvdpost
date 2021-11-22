<?php

namespace App\Entity;

use App\Repository\ProductVisitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductVisitRepository::class)
 */
class ProductVisit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer",name="productvisit_id")
     */
    private $productvisit_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_visit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_visit;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="product_id")
     */
    private $product;

    public function getProductvisitId(): ?int
    {
        return $this->productvisit_id;
    }

    public function getTotalVisit(): ?int
    {
        return $this->total_visit;
    }

    public function setTotalVisit(int $total_visit): self
    {
        $this->total_visit = $total_visit;

        return $this;
    }

    public function getDateVisit(): ?\DateTimeInterface
    {
        return $this->date_visit;
    }

    public function setDateVisit(\DateTimeInterface $date_visit): self
    {
        $this->date_visit = $date_visit;

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
