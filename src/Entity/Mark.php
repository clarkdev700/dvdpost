<?php

namespace App\Entity;

use App\Repository\MarkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarkRepository::class)
 */
class Mark
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $mark_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_mark;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="product_id")
     */
    private $product;

    public function getMarkId(): ?int
    {
        return $this->mark_id;
    }

    public function getNbreMark(): ?int
    {
        return $this->nbre_mark;
    }

    public function setNbreMark(int $nbre_mark): self
    {
        $this->nbre_mark = $nbre_mark;

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
