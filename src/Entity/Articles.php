<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Regex(
	 * 	pattern="#{[|`_\@]}$£¤µ§/<>#",
	 * 	htmlPattern="#{[|`_\@]}$£¤µ§/<>#",
	 * 	match=false,
	 * 	message="Les caractères suivant sont interdits : {[|`_\@]}$£¤µ§/<>"
	 * )
	 */
	private $title;

	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\Regex(
	 * 	pattern="#{[|`_\@]}$£¤µ§/<>#",
	 * 	htmlPattern="#{[|`_\@]}$£¤µ§/<>#",
	 * 	match=false,
	 * 	message="Les caractères suivant sont interdits : {[|`_\@]}$£¤µ§/<>"
	 * )
	 */
	private $description;

	/**
	 * @ORM\Column(type="date")
	 */
	private $publishDate;

	/**
	 * @ORM\Column(type="text")
	 */
	private $content;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $image;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ReviewArticles", mappedBy="article", orphanRemoval=true)
	 */
	private $reviews;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="articles")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $author;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $status;

	public function __construct()
	{
		$this->reviews = new ArrayCollection();
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(string $title): self
	{
		$this->title = $title;

		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getPublishDate(): ?\DateTimeInterface
	{
		return $this->publishDate;
	}

	public function setPublishDate(\DateTimeInterface $publishDate): self
	{
		$this->publishDate = $publishDate;

		return $this;
	}

	public function getContent(): ?string
	{
		return $this->content;
	}

	public function setContent(string $content): self
	{
		$this->content = $content;

		return $this;
	}

	public function getImage(): ?string
	{
		return $this->image;
	}

	public function setImage(?string $image): self
	{
		$this->image = $image;

		return $this;
	}

	/**
	 * @return Collection|ReviewArticles[]
	 */
	public function getReviews(): Collection
	{
		return $this->reviews;
	}

	public function addReview(ReviewArticles $review): self
	{
		if (!$this->reviews->contains($review)) {
			$this->reviews[] = $review;
			$review->setArticle($this);
		}

		return $this;
	}

	public function removeReview(ReviewArticles $review): self
	{
		if ($this->reviews->contains($review)) {
			$this->reviews->removeElement($review);
			// set the owning side to null (unless already changed)
			if ($review->getArticle() === $this) {
				$review->setArticle(null);
			}
		}

		return $this;
	}

	public function getAuthor(): ?User
	{
		return $this->author;
	}

	public function setAuthor(?User $author): self
	{
		$this->author = $author;

		return $this;
	}

	public function getStatus(): ?bool
	{
		return $this->status;
	}

	public function setStatus(bool $status): self
	{
		$this->status = $status;

		return $this;
	}
}
