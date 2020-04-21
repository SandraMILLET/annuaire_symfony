<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Contraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     * @Assert\Length(min=3 max=40)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     * @Assert\Regex(
     * pattern="/[0-9]{10}/", message="Veuillez renseigner un numéro de téléphone valide"
     * )
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     * @Assert\Length(min=3 max=40)
     */
    private $object;

    /**
     * @ORM\Column(type="text", nullable=true)

     * @Assert\Length(min=10) 
     */
    private $message;

    /**
     * @var Property|null
     */
    private $property;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
        /**
         * @Return Property|null $property
         */
    public function getProperty(): ?Property
    {
        return $this->property;
    }

    /**
     * @Param  Property|null $property 
     * @Return Contact
     */

    public function setProperty(?Property $property): contact
    {
       $this->property = $property;
       return $this;
    }
}

