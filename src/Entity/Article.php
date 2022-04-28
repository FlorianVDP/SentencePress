<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'text')]
    private $content;


    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Comment::class)]
    private $comment;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Subcategory::class)]
    private $slug_cat;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'articles')]
    private $author;

    public function __construct()
    {
        $this->comment = new ArrayCollection();
        $this->slug_cat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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

    /**
     * @return Collection<int, Comment>
     */
    public function getComment(): Collection
    {
        return $this->comment;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comment->contains($comment)) {
            $this->comment[] = $comment;
            $comment->setArticle($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comment->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getArticle() === $this) {
                $comment->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Subcategory>
     */
    public function getSlugCat(): Collection
    {
        return $this->slug_cat;
    }

    public function addSlugCat(Subcategory $slugCat): self
    {
        if (!$this->slug_cat->contains($slugCat)) {
            $this->slug_cat[] = $slugCat;
            $slugCat->setArticle($this);
        }

        return $this;
    }

    public function removeSlugCat(Subcategory $slugCat): self
    {
        if ($this->slug_cat->removeElement($slugCat)) {
            // set the owning side to null (unless already changed)
            if ($slugCat->getArticle() === $this) {
                $slugCat->setArticle(null);
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
}
