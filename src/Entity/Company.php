<?php
/*@author Sandra
* relation avec UserPro 
* relation avec Metiers 
* relation avec socialnewtork*/
namespace App\Entity;
use App\Entity\Metiers;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 * @Vich\Uploadable
 */
class Company
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
    private $society;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $presentation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $service;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tarif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $book;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $horaire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fournisseur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $emploi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $responsable;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min="14",max="14", minMessage="Votre numéro de SIRET doit contenir 14 caractères", maxMessage="Votre numéro de SIRET doit contenir 14 caractères")
     */
    private $SIRET;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $verify;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserPro", inversedBy="companies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Latitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Longitude;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(pattern="#/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/#",
     * match=false,
     * message="Votre code postal doit être de ce format : 09350")
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(pattern="#/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{2,50}$/#",
     * match=false,
     * message="Votre nom de commune ne doit pas contenir de chiffres")
     */
    private $ville;

    /**
     * @ORM\OneToOne(targetEntity="Metiers", inversedBy="activity", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="metier_id",referencedColumnName="id")
     */
    private $activity;

    /**
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\Socialnetwork", inversedBy="reseaux", cascade={"persist", "remove"})
     */
    private $reseaux;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="upload", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile;

        /**
     * @ORM\Column(type="string")
     *
     * @var string|null
     */
    private $imageName;

     /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface|null
     */
    private $updatedAt;

    public function __construct()
    {
        $this->updatedAt = new \Datetime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getSociety(): ?string
    {
        return $this->society;
    }

    public function setSociety(string $society): self
    {
        $this->society = $society;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
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

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getBook(): ?string
    {
        return $this->book;
    }

    public function setBook(?string $book): self
    {
        $this->book = $book;

        return $this;
    }

    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    public function setHoraire(string $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getFournisseur(): ?string
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?string $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getEmploi(): ?string
    {
        return $this->emploi;
    }

    public function setEmploi(?string $emploi): self
    {
        $this->emploi = $emploi;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    

    public function getSIRET(): ?string
    {
        return $this->SIRET;
    }

    public function setSIRET(?string $SIRET): self
    {
        $this->SIRET = $SIRET;

        return $this;
    }

    public function getVerify(): ?string
    {
        return $this->verify;
    }

    public function setVerify(?string $verify): self
    {
        $this->verify = $verify;

        return $this;
    }
    public function setUser(UserPro $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getLatitude(): ?string
    {
        return $this->Latitude;
    }

    public function setLatitude(string $Latitude): self
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->Longitude;
    }

    public function setLongitude(string $Longitude): self
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): self
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

    public function getActivity(): ?Metiers
    {
        return $this->activity;
    }

    public function setActivity(?Metiers $activity): self
    {
        $this->activity = $activity;

        // set (or unset) the owning side of the relation if necessary
        $newActivity = null === $activity ? null : $this;
        if ($activity->getActivity() !== $newActivity) {
            $activity->setActivity($newActivity);
        }

        return $this;
    }

    public function getReseaux(): ?Socialnetwork
    {
        return $this->reseaux;
    }

    public function setReseaux(?Socialnetwork $reseaux): self
    {
        $this->reseaux = $reseaux;

        return $this;
    }
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }
    
} 
