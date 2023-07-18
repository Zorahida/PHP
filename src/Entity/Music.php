<?php

namespace App\Entity;

use App\Repository\MusicRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusicRepository::class)]
class Music
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origin = null;

    #[ORM\Column(length: 255)]
    private ?string $instrument = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pic = null;

    #[ORM\OneToMany(mappedBy: 'music', targetEntity: Discografía::class)]
    private Collection $discografía;

    public function __construct()
    {
        $this->discografía = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(?string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): static
    {
        $this->origin = $origin;

        return $this;
    }

    public function getInstrument(): ?string
    {
        return $this->instrument;
    }

    public function setInstrument(string $instrument): static
    {
        $this->instrument = $instrument;

        return $this;
    }

    public function getPic(): ?string
    {
        return $this->pic;
    }

    public function setPic(?string $pic): static
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * @return Collection<int, Discografía>
     */
    public function getDiscografía(): Collection
    {
        return $this->discografía;
    }

    public function addDiscografA(Discografía $discografA): static
    {
        if (!$this->discografía->contains($discografA)) {
            $this->discografía->add($discografA);
            $discografA->setMusic($this);
        }

        return $this;
    }

    public function removeDiscografA(Discografía $discografA): static
    {
        if ($this->discografía->removeElement($discografA)) {
            // set the owning side to null (unless already changed)
            if ($discografA->getMusic() === $this) {
                $discografA->setMusic(null);
            }
        }

        return $this;
    }
}
