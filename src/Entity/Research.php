<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use App\Repository\ResearchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResearchRepository::class)
 */
class Research
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
    private $cities;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $professionnals;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $categories;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCities(): ?string
    {
        return $this->cities;
    }

    public function setCities(string $cities): self
    {

        $this->cities = $cities;

        return $this;
    }

    public function getProfessionnals(): ?string
    {
        return $this->professionnals;
    }

    public function setProfessionnals(string $professionnals): self
    {
        $this->professionnals = $professionnals;

        return $this;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(string $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
}
