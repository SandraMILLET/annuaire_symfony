<?php

namespace App\Entity;

//use Symfony\Component\Validator\Contraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
   
    private $id;

    /**
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\Length(min=3, max=40)
     */
    private $name;

    /**
     * @Assert\Regex(
     * pattern="/[0-9]{10}/", message="Veuillez renseigner un numéro de téléphone valide"
     * )
     */
    private $tel;

    /**
    
     * @Assert\Length(min=3, max=40)
     */
    private $object;

    /**
    
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
     * @return Property|null $property
     */
    public function getProperty(): ?Property
    {
        return $this->property;
    }

    /**
     * @param  Property|null $property
     * @return Contact
     */

    public function setProperty(?Property $property): contact
    {
        $this->property = $property;
        return $this;
    }
}
