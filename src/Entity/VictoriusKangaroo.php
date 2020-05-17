<?php

namespace App\Entity;

use App\Repository\VictoriusKangarooRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VictoriusKangarooRepository::class)
 */
class VictoriusKangaroo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $arms;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArms(): ?string
    {
        return $this->arms;
    }

    public function setArms(?string $arms): self
    {
        $this->arms = $arms;

        return $this;
    }
}
