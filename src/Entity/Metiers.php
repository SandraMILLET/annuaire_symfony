<?php
/*relation avec Company*/
namespace App\Entity;

use App\Entity\Company;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MetiersRepository")
 */
class Metiers
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
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metier;

    /**
     * @ORM\OneToOne(targetEntity="Company", mappedBy="activity")
     */
    private $activity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;


    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(string $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    public function getActivity(): ?Company
    {
        return $this->activity;
    }

    public function setActivity(?Company $activity): self
    {
        $this->activity = $activity;

        return $this;
    }
}
