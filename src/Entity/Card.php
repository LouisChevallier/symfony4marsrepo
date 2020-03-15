<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardRepository")
 */
class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $Attack;

    /**
     * @ORM\Column(type="integer")
     */
    private $Healthpoint;

    /**
     * @ORM\Column(type="integer")
     */
    private $Defense;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="cards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->Attack;
    }

    public function setAttack(int $Attack): self
    {
        $this->Attack = $Attack;

        return $this;
    }

    public function getHealthpoint(): ?int
    {
        return $this->Healthpoint;
    }

    public function setHealthpoint(int $Healthpoint): self
    {
        $this->Healthpoint = $Healthpoint;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->Defense;
    }

    public function setDefense(int $Defense): self
    {
        $this->Defense = $Defense;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->Type;
    }

    public function setType(?Type $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->Cost;
    }

    public function setCost(int $Cost): self
    {
        $this->Cost = $Cost;

        return $this;
    }
}
