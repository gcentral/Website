<?php

namespace App\Entity;

use App\Repository\PackageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Carbon\Carbon;

/**
 * @ORM\Entity(repositoryClass=PackageRepository::class)
 */
class Package implements \JsonSerializable
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description = '';

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $version = "";

    /**
     * @ORM\Column(type="text")
     */
    private $url = "";

    /**
     * @ORM\OneToMany(targetEntity=PackageRating::class, mappedBy="package")
     */
    private $ratings;

    /**
     * @ORM\ManyToMany(targetEntity=DeveloperGroup::class, mappedBy="packages")
     */
    private $developers;

    /**
     * @ORM\Column(type="integer")
     */
    private $downloads = 0;

    /**
     * @ORM\Column(type="float")
     */
    private $avg_rating = -1;

    /**
     * @ORM\OneToMany(targetEntity=PackageVersion::class, mappedBy="package", orphanRemoval=true)
     */
    private $versions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $display_name;

    /**
     * @ORM\ManyToOne(targetEntity=PackageRepo::class, inversedBy="packages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $repo;

    /**
     * @ORM\ManyToMany(targetEntity=PackageTag::class, mappedBy="packages")
     */
    private $tags;

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
        $this->developers = new ArrayCollection();
        $this->versions = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    public function jsonSerialize() {
        $res = [
            'id' => $this->id,
            'name' => $this->name,
            //'description' => $this->description,
            'url' => $this->url,
            'downloads' => $this->downloads,
            'avg_rating' => $this->avg_rating,
            'display_name' => $this->display_name,
            //'icon_url' => $this->icon_url,
            'versions' => [],
            'developers' => [],
            'tags' => [],
        ];

        $versions = $this->getVersions();
        foreach($versions as $version) {
            $res['versions'][] = $version->jsonSerialize();
        }

        $groups = $this->getDevelopers();
        foreach($groups as $group) {
            $res['developers'][] = $group->jsonSerialize();
        }

        $tags = $this->getTags();
        foreach($tags as $tag) {
            $res['tags'][] = $tag->getName();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

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

    /**
     * @return Collection|PackageRating[]
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(PackageRating $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setPackage($this);
        }

        return $this;
    }

    public function removeRating(PackageRating $rating): self
    {
        if ($this->ratings->contains($rating)) {
            $this->ratings->removeElement($rating);
            // set the owning side to null (unless already changed)
            if ($rating->getPackage() === $this) {
                $rating->setPackage(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DeveloperGroup[]
     */
    public function getDevelopers(): Collection
    {
        return $this->developers;
    }

    public function addDeveloper(DeveloperGroup $developer): self
    {
        if (!$this->developers->contains($developer)) {
            $this->developers[] = $developer;
            $developer->addPackage($this);
        }

        return $this;
    }

    public function removeDeveloper(DeveloperGroup $developer): self
    {
        if ($this->developers->contains($developer)) {
            $this->developers->removeElement($developer);
            $developer->removePackage($this);
        }

        return $this;
    }

    public function getDownloads(): ?int
    {
        return $this->downloads;
    }

    public function setDownloads(int $downloads): self
    {
        $this->downloads = $downloads;

        return $this;
    }

    public function getAvgRating(): ?float
    {
        return $this->avg_rating;
    }

    public function setAvgRating(float $avg_rating): self
    {
        $this->avg_rating = $avg_rating;

        return $this;
    }

    /**
     * @return Collection|PackageVersion[]
     */
    public function getVersions(): Collection
    {
        return $this->versions;
    }

    public function getSpecificVersion(string $versionString) : ?PackageVersion
    {
        $versions = $this->getVersions();

        foreach ($versions as $version) {
            if ($version->getVersion() == $versionString) {
                return $version;
            }
        }

        //didn't find a match, return null
        return null;
    }

    public function getLatestVersion() : ?PackageVersion
    {
        if (empty($this->versions)) {
            return null;
        }

        //newest version should be last in the array
        return $this->versions[count($this->versions) - 1];
    }

    public function addVersion(PackageVersion $version): self
    {
        if (!$this->versions->contains($version)) {
            $this->versions[] = $version;
            $version->setPackage($this);
        }

        return $this;
    }

    public function removeVersion(PackageVersion $version): self
    {
        if ($this->versions->contains($version)) {
            $this->versions->removeElement($version);
            // set the owning side to null (unless already changed)
            if ($version->getPackage() === $this) {
                $version->setPackage(null);
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

    public function getRepo(): ?PackageRepo
    {
        return $this->repo;
    }

    public function setRepo(?PackageRepo $repo): self
    {
        $this->repo = $repo;

        return $this;
    }

    /**
     * @return Collection|PackageTag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(PackageTag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addPackage($this);
        }

        return $this;
    }

    public function removeTag(PackageTag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
            $tag->removePackage($this);
        }

        return $this;
    }
}
