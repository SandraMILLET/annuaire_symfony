<?php
/*@author Sandra
* relation avec Company*/
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocialnetworkRepository")
 */
class Socialnetwork
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
    private $facebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pinterest;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youtube;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instagram;

    /**
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\Company", mappedBy="reseaux", cascade={"persist", "remove"})
     */
    private $reseaux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(?string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(?string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getPinterest(): ?string
    {
        return $this->pinterest;
    }

    public function setPinterest(?string $pinterest): self
    {
        $this->pinterest = $pinterest;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(?string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(?string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getReseaux(): ?Company
    {
        return $this->reseaux;
    }

    public function setReseaux(?Company $reseaux): self
    {
        $this->reseaux = $reseaux;

        // set (or unset) the owning side of the relation if necessary
        $newReseaux = null === $reseaux ? null : $this;
        if ($reseaux->getReseaux() !== $newReseaux) {
            $reseaux->setReseaux($newReseaux);
        }

        return $this;
    }
}
