<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $displayName;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $location;

    /**
     * @ORM\OneToMany(targetEntity=PackageRating::class, mappedBy="user")
     */
    private $packageRatings;

    /**
     * @ORM\ManyToMany(targetEntity=DeveloperGroup::class, mappedBy="users")
     */
    private $packageDevelopers;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reset_pass = true;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registered;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $reg_ip;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_login;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $login_ip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $temp_key;

    /**
     * @ORM\OneToOne(targetEntity=DeveloperGroup::class, mappedBy="personal_user", cascade={"persist", "remove"})
     */
    private $personalGroup;

    public function __construct()
    {
        $this->packageRatings = new ArrayCollection();
        $this->packageDevelopers = new ArrayCollection();
    }
    
    public function jsonSerialize()
    {
        //We're only including the elements that are always
        //publicly accessible
        $res = [
            'id' => $this->id,
            'display_name' => $this->displayName,
            'location' => $this->location,
        ];
        
        return $res;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getUserInfo()
    {
        $res = [
            'fullname' => $this->fullName,
            'displayname' => $this->displayName,
            'location' => $this->location,
            'username' => $this->email,
            'password' => $this->password
        ];

        return $res;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection|PackageRating[]
     */
    public function getPackageRatings(): Collection
    {
        return $this->packageRatings;
    }

    public function addPackageRating(PackageRating $packageRating): self
    {
        if (!$this->packageRatings->contains($packageRating)) {
            $this->packageRatings[] = $packageRating;
            $packageRating->setUser($this);
        }

        return $this;
    }

    public function removePackageRating(PackageRating $packageRating): self
    {
        if ($this->packageRatings->contains($packageRating)) {
            $this->packageRatings->removeElement($packageRating);
            // set the owning side to null (unless already changed)
            if ($packageRating->getUser() === $this) {
                $packageRating->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DeveloperGroup[]
     */
    public function getPackageDevelopers(): Collection
    {
        return $this->packageDevelopers;
    }

    public function addPackageDeveloper(DeveloperGroup $packageDeveloper): self
    {
        if (!$this->packageDevelopers->contains($packageDeveloper)) {
            $this->packageDevelopers[] = $packageDeveloper;
            $packageDeveloper->addUser($this);
        }

        return $this;
    }

    public function removePackageDeveloper(DeveloperGroup $packageDeveloper): self
    {
        if ($this->packageDevelopers->contains($packageDeveloper)) {
            $this->packageDevelopers->removeElement($packageDeveloper);
            $packageDeveloper->removeUser($this);
        }

        return $this;
    }

    public function getValidationToken(): ?string
    {
        return $this->validationToken;
    }

    public function setValidationToken(string $validationToken): self
    {
        $this->validationToken = $validationToken;

        return $this;
    }

    public function getResetPass(): ?bool
    {
        return $this->reset_pass;
    }

    public function setResetPass(bool $reset_pass): self
    {
        $this->reset_pass = $reset_pass;

        return $this;
    }

    public function getRegistered(): ?\DateTimeInterface
    {
        return $this->registered;
    }

    public function setRegistered(\DateTimeInterface $registered): self
    {
        $this->registered = $registered;

        return $this;
    }

    public function getRegIp(): ?string
    {
        return $this->reg_ip;
    }

    public function setRegIp(string $reg_ip): self
    {
        $this->reg_ip = $reg_ip;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->last_login;
    }

    public function setLastLogin(?\DateTimeInterface $last_login): self
    {
        $this->last_login = $last_login;

        return $this;
    }

    public function getLoginIp(): ?string
    {
        return $this->login_ip;
    }

    public function setLoginIp(?string $login_ip): self
    {
        $this->login_ip = $login_ip;

        return $this;
    }

    public function getTempKey(): ?string
    {
        return $this->temp_key;
    }

    public function setTempKey(?string $temp_key): self
    {
        $this->temp_key = $temp_key;

        return $this;
    }

    public function getPersonalGroup(): ?DeveloperGroup
    {
        return $this->personalGroup;
    }

    public function setPersonalGroup(?DeveloperGroup $personalGroup): self
    {
        $this->personalGroup = $personalGroup;

        // set (or unset) the owning side of the relation if necessary
        $newPersonal_user = null === $personalGroup ? null : $this;
        if ($personalGroup->getPersonalUser() !== $newPersonal_user) {
            $personalGroup->setPersonalUser($newPersonal_user);
        }

        return $this;
    }
}
