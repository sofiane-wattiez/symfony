<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="comments")
     */
    private $article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdUsers(): ?int
    {
        return $this->id_users;
    }

    public function setIdUsers(int $id_users): self
    {
        $this->id_users = $id_users;

        return $this;
    }

    public function getIdArticles(): ?int
    {
        return $this->id_articles;
    }

    public function setIdArticles(int $id_articles): self
    {
        $this->id_articles = $id_articles;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }
}
