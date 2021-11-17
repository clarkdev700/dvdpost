<?php

namespace App\Entity;

use App\Repository\ProducerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProducerRepository::class)
 */
class Producer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="producer_id")
     */
    private $producer_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name_producer;

    public function __construct($nameProducer)
    {    
        $this->setNameProducer($nameProducer);
    }

    public function getProducerId(): ?int
    {
        return $this->producer_id;
    }

    public function getNameProducer(): ?string
    {
        return $this->name_producer;
    }

    public function setNameProducer(string $name_producer): self
    {
        $this->name_producer = $name_producer;

        return $this;
    }
}
