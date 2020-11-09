<?php

namespace App\Entity;

use App\Repository\DeveloperGroupRepository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeveloperGroupRepository::class)
 */
class DeveloperGroup implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name = "";

    /**
     * @ORM\ManyToMany(targetEntity=Package::class, inversedBy="developers")
     */
    private $packages;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="packageDevelopers")
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url = "";

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email = "";

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="personalGroup", cascade={"persist", "remove"})
     */
    private $personal_user = null;

    /**
     * @ORM\Column(type="text")
     */
    private $description = "";

    /**
     * @ORM\OneToMany(targetEntity=PackageTag::class, mappedBy="manage_group")
     */
    private $managed_tags;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $display_name = "";

    public function __construct()
    {
        $this->packages = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->managed_tags = new ArrayCollection();
    }

    public function jsonSerialize()
    {
        $res = [
            'id' => $this->id,
            'name' => $this->name,
            'display_name' => $this->display_name,
            'description' => $this->description,
            'url' => $this->url,
            'email' => $this->email,
            'has_user' => !is_null($this->personal_user),
        ];

        if ($res['has_user']) {
            $res['user'] = $this->personal_user->jsonSerialize();
        }
        
        return $res;
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
        }

        return $this;
    }

    public function removePackage(Package $package): self
    {
        if ($this->packages->contains($package)) {
            $this->packages->removeElement($package);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPersonalUser(): ?User
    {
        return $this->personal_user;
    }

    public function setPersonalUser(?User $personal_user): self
    {
        $this->personal_user = $personal_user;

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

    /**
     * @return Collection|PackageTag[]
     */
    public function getManagedTags(): Collection
    {
        return $this->managed_tags;
    }

    public function addManagedTag(PackageTag $managedTag): self
    {
        if (!$this->managed_tags->contains($managedTag)) {
            $this->managed_tags[] = $managedTag;
            $managedTag->setManageGroup($this);
        }

        return $this;
    }

    public function removeManagedTag(PackageTag $managedTag): self
    {
        if ($this->managed_tags->contains($managedTag)) {
            $this->managed_tags->removeElement($managedTag);
            // set the owning side to null (unless already changed)
            if ($managedTag->getManageGroup() === $this) {
                $managedTag->setManageGroup(null);
            }
        }

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->display_name;
    }

    public function setDisplayName(string $display_name): self
    {
        $this->display_name = $display_name;

        return $this;
    }
}
