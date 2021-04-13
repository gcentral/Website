<?php

namespace App\Entity;

use App\Repository\PackageRepoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Carbon\Carbon;

/**
 * @ORM\Entity(repositoryClass=PackageRepoRepository::class)
 */
class PackageRepo
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
    private $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $repo_type;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_update;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url = "";

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\OneToMany(targetEntity=Package::class, mappedBy="repo")
     */
    private $packages;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $IndexUrl;

    public function __construct()
    {
        $this->packages = new ArrayCollection();
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

    public function getRepoType(): ?string
    {
        return $this->repo_type;
    }

    public function setRepoType(string $repo_type): self
    {
        $this->repo_type = $repo_type;

        return $this;
    }

    public function getLastUpdate(): ?Carbon
    {
        if (is_null($this->last_update)) {
            return null;
        }
        
        return new Carbon($this->last_update, 'UTC');
    }

    public function setLastUpdate(?Carbon $last_update): self
    {
        $this->last_update = $last_update->shiftTimezone('UTC');

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return Collection|Package[]
     */
    public function getPackages(): Collection
    {
        return $this->packages;
    }

    public function addPackage(Package $package): self
    {
        if (!$this->packages->contains($package)) {
            $this->packages[] = $package;
            $package->setRepo($this);
        }

        return $this;
    }

    public function removePackage(Package $package): self
    {
        if ($this->packages->contains($package)) {
            $this->packages->removeElement($package);
            // set the owning side to null (unless already changed)
            if ($package->getRepo() === $this) {
                $package->setRepo(null);
            }
        }

        return $this;
    }

    public function getIndexUrl(): ?string
    {
        return $this->IndexUrl;
    }

    public function setIndexUrl(?string $IndexUrl): self
    {
        $this->IndexUrl = $IndexUrl;

        return $this;
    }
}
