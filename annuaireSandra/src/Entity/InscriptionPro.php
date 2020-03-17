<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionProRepository")
 */
class InscriptionPro
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
     * @ORM\Column(type="string", length=255)
     */
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Siret;

    /**
     * @ORM\Column(type="object")
     */
    private $Doc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Trades;

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

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->Siret;
    }

    public function setSiret(string $Siret): self
    {
        $this->Siret = $Siret;

        return $this;
    }

    public function getDoc()
    {
        return $this->Doc;
    }

    public function setDoc($Doc): self
    {
        $this->Doc = $Doc;

        return $this;
    }

    public function getTrades(): ?string
    {
        return $this->Trades;
    }

    public function setTrades(string $Trades): self
    {
        $this->Trades = $Trades;

        return $this;
    }
}
