<?php

namespace App\Entity;

use App\Repository\PackageRatingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PackageRatingRepository::class)
 */
class PackageRating
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="packageRatings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity=Package::class, inversedBy="ratings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $package;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPackage(): ?Package
    {
        return $this->package;
    }

    public function setPackage(?Package $package): self
    {
        $this->package = $package;

        return $this;
    }
}
