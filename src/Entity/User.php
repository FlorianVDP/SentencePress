<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $surname;

    #[ORM\Column(type: 'string', length: 255)]
    private $mail;

    #[ORM\Column(type: 'string', length: 255)]
    private $role;

    #[ORM\Column(type: 'date')]
    private $birth_date;

    #[ORM\OneToMany(mappedBy: 'b_user', targetEntity: Comment::class)]
    private $date;

    //#[ORM\ManyToMany(targetEntity: Article::class, mappedBy: 'b_author')]
    //private $articles;

    public function __construct()
    {
        $this->date = new ArrayCollection();
        $this->articles = new ArrayCollection();
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

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getDate(): Collection
    {
        return $this->date;
    }

    public function addDate(Comment $date): self
    {
        if (!$this->date->contains($date)) {
            $this->date[] = $date;
            $date->setBUser($this);
        }

        return $this;
    }

    public function removeDate(Comment $date): self
    {
        if ($this->date->removeElement($date)) {
            // set the owning side to null (unless already changed)
            if ($date->getBUser() === $this) {
                $date->setBUser(null);
            }
        }

        return $this;
    }
}
