<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"email"},
 * message="L'email que vous avez indiqué est déja utilisé !"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     * @Assert\Regex(pattern="#^[a-z0-9._-]@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", match=false, message = "Votre Email n'est pas conforme")
     */


    private $email;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @Assert\Regex(pattern="#/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/#",
     * match=false,
     * message="Votre code postal doit être de ce format : 09350")
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(pattern="#/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,50}$/#",
     * match=false,
     * message="Votre nom de commune ne doit pas contenir de chiffres")
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Assert\Regex(pattern="#([0-9]{2} ){4}[0-9]{2}#",
     * match=false,
     * message="Votre numéro doit être de ce format : 0123345678")
     */
    private $tel;
    /**
     * @Assert\EqualTo(propertyPath="password", message="Saisissez le même mot de passe")
     */
    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit contenir au minimum 8 caractères")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roles = array();

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserPro", inversedBy="pro", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $pro;


    public function getId(): ?int
    {
        return $this->id;
    }

    /** @var string|null */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
    }

    public function getUsername()
    {
        return $this->email;
    }

    //used in connexion case for get the user infos from BDD !!
    public function getRoles()
    {
        $roles = $this->roles;
        if ($roles != NULL) {

            return explode(" ", $roles);
        } else {
            return $this->roles;
        }
        //   return ['ROLE_USER'];
    }

    //used in connexion case for set the user infos in BDD !!
    public function setRoles($roles): self
    {
        $this->roles = $roles[0];
        return $this;
    }

    /** @var string|null */
    public $captcha;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Articles", mappedBy="author")
     */
    private $articles;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }


    /**
     * @return Collection|Articles[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Articles $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Articles $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getAuthor() === $this) {
                $article->setAuthor(null);
            }
        }

        return $this;
    }


    public function getPro(): ?UserPro
    {
        return $this->pro;
    }

    public function setPro(?UserPro $pro): self
    {
        $this->pro = $pro;

        return $this;
    }
}