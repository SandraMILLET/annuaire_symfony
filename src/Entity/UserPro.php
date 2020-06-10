<?php

namespace App\Entity;

use App\Entity\Company;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserProRepository")
 * @Vich\Uploadable
 */
class UserPro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="upload", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", nullable=true)
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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    private $society;


    /**
     * @ORM\Column(type="object", nullable=true)
     * @Assert\Length(min="14",max="14", minMessage="Votre numéro de SIRET doit contenir 14 caractères", maxMessage="Votre numéro de SIRET doit contenir 14 caractères")

     */
    private $SIRET;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", mappedBy="pro", cascade={"persist", "remove"})
     */
    private $pro;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Company", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    private $companies;

    //        

    public function __construct()
    {
        $this->companies = new ArrayCollection();
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

    public function getSIRET()
    {
        return $this->SIRET;
    }

    public function setSIRET($SIRET): self
    {
        $this->SIRET = $SIRET;

        return $this;
    }

    public function getPro(): ?User
    {
        return $this->pro;
    }

    public function setPro(?User $pro): self
    {
        $this->pro = $pro;

        // set (or unset) the owning side of the relation if necessary
        $newPro = null === $pro ? null : $this;
        if ($pro->getPro() !== $newPro) {
            $pro->setPro($newPro);
        }

        return $this;
    }

    /**
     * @return Collection|UserPro[]
     */
    public function getCompanies(): Collection
    {
        return $this->companies;
    }

    public function addCompany(Company $company): self
    {
        if (!$this->companies->contains($company)) {
            $this->companies[] = $company;
            $this->setCompanies($this->companies);
        }

        return $this;
    }

    public function removeCompany(Company $company): self
    {
        if ($this->companies->contains($company)) {
            $this->companies->removeElement($company);
            // set the owning side to null (unless already changed)
            //if ($company->getCompanies() === $this) {
            //    $company->setCompanies(null);
            // }
        }

        return $this;
    }
    public function setCompanies($companies)
    {
        $this->companies = $companies;
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
