<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=80)
	 * @Assert\Length(
	 *      min = 2,
	 *      max = 80,
	 * )
	 */
	private $title;

	/**
	 * @ORM\Column(type="text")
	 * @Assert\NotBlank()
	 */
	private $content;

	/**
	 * @ORM\Column(type="datetime", name="date_create")
	 */
	private $dateCreate;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $dateUpdate;

	/**
	 * @ORM\ManyToMany(targetEntity="Category", inversedBy="articles")
	 */
	private $categories;

	/**
	 * @var \App\Entity\User
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="articles")
	 */
	private $user;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ArticleFollow", mappedBy="article", orphanRemoval=true)
	 */
	private $articleFollows;

	public function __construct()
	{
		$this->dateCreate = new \DateTime;
		$this->dateUpdate = new \DateTime;
		$this->articleFollows = new ArrayCollection();
	}

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of title
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Set the value of title
	 *
	 * @return  self
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Get the value of content
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Set the value of content
	 *
	 * @return  self
	 */
	public function setContent($content)
	{
		$this->content = $content;

		return $this;
	}

	/**
	 * Get the value of dateCreate
	 */
	public function getDateCreate()
	{
		return $this->dateCreate;
	}

	/**
	 * Set the value of dateCreate
	 *
	 * @return  self
	 */
	public function setDateCreate($dateCreate)
	{
		$this->dateCreate = $dateCreate;

		return $this;
	}

	/**
	 * Get the value of dateUpdate
	 */
	public function getDateUpdate()
	{
		return $this->dateUpdate;
	}

	/**
	 * Set the value of dateUpdate
	 *
	 * @return  self
	 */
	public function setDateUpdate($dateUpdate)
	{
		$this->dateUpdate = $dateUpdate;

		return $this;
	}

	/**
	 * Get the value of user
	 *
	 * @return  \App\Entity\User
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * Set the value of user
	 *
	 * @param  \App\Entity\User  $user
	 *
	 * @return  self
	 */
	public function setUser(\App\Entity\User $user)
	{
		$this->user = $user;

		return $this;
	}

	/**
	 * Get the value of categories
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * Set the value of categories
	 *
	 * @return  self
	 */
	public function setCategories($categories)
	{
		$this->categories = $categories;

		return $this;
	}

	/**
	 * @return Collection|ArticleFollow[]
	 */
	public function getArticlesFollows() : Collection
	{
		return $this->articleFollows;
	}

	public function addArticlesFollow(ArticleFollow $articleFollow) : self
	{
		if (!$this->articleFollows->contains($articleFollow)) {
			$this->articleFollows[] = $articleFollow;
			$articleFollow->setArticle($this);
		}

		return $this;
	}

	public function removeArticlesFollow(ArticleFollow $articleFollow) : self
	{
		if ($this->articleFollows->contains($articleFollow)) {
			$this->articleFollows->removeElement($articleFollow);
            // set the owning side to null (unless already changed)
			if ($articleFollow->getArticle() === $this) {
				$articleFollow->setArticle(null);
			}
		}

		return $this;
	}
}