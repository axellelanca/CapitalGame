<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $capital;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasEuro;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfInhabitants;

    /**
     * @ORM\ManyToOne(targetEntity=PreferedBeverage::class, inversedBy="countries")
     */
    private $preferedBeverage;

    /**
     * @ORM\ManyToMany(targetEntity=Language::class, inversedBy="countries")
     */
    private $language;

    public function __construct()
    {
        $this->language = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCapital(): ?string
    {
        return $this->capital;
    }

    public function setCapital(string $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getHasEuro(): ?bool
    {
        return $this->hasEuro;
    }

    public function setHasEuro(bool $hasEuro): self
    {
        $this->hasEuro = $hasEuro;

        return $this;
    }

    public function getNumberOfInhabitants(): ?int
    {
        return $this->numberOfInhabitants;
    }

    public function setNumberOfInhabitants(int $numberOfInhabitants): self
    {
        $this->numberOfInhabitants = $numberOfInhabitants;

        return $this;
    }

    public function getPreferedBeverage(): ?PreferedBeverage
    {
        return $this->preferedBeverage;
    }

    public function setPreferedBeverage(?PreferedBeverage $preferedBeverage): self
    {
        $this->preferedBeverage = $preferedBeverage;

        return $this;
    }

    /**
     * @return Collection|Language[]
     */
    public function getLanguage(): Collection
    {
        return $this->language;
    }

    public function addLanguage(Language $language): self
    {
        if (!$this->language->contains($language)) {
            $this->language[] = $language;
        }

        return $this;
    }

    public function removeLanguage(Language $language): self
    {
        $this->language->removeElement($language);

        return $this;
    }
}
