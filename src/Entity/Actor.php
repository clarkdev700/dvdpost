<?php

namespace App\Entity;

use App\Repository\ActorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActorRepository::class)
 */
class Actor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="actor_id")
     */
    private $actor_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name_actor;

    public function __construct($nameActor)
    {    
        $this->setNameActor($nameActor);
    }

    public function getActorId(): ?int
    {
        return $this->actor_id;
    }

    public function getNameActor(): ?string
    {
        return $this->name_actor;
    }

    public function setNameActor(string $name_actor): self
    {
        $this->name_actor = $name_actor;

        return $this;
    }
}
