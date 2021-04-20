<?php

namespace App\Entity;

use App\Repository\PackageVersionRepository;
use Doctrine\ORM\Mapping as ORM;

use Carbon\Carbon;

/**
 * @ORM\Entity(repositoryClass=PackageVersionRepository::class)
 */
class PackageVersion implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Package::class, inversedBy="versions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $package;

    /**
     * @ORM\Column(type="text")
     */
    private $package_url;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $repo_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $version;

    /**
     * @ORM\Column(type="datetime")
     */
    private $release_date;

    /**
     * @ORM\Column(type="text")
     */
    private $release_notes = '';

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $deps_string = [];

    /**
     * @ORM\Column(type="text")
     */
    private $icon_url = "";

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $license = '';

    /**
     * @ORM\Column(type="text")
     */
    private $description = '';

    /**
     * @ORM\Column(type="text")
     */
    private $summary = '';

    public function jsonSerialize() {
        $res = [
            'id' => $this->id,
            'package_url' => $this->package_url,
            'repo_type' => $this->repo_type,
            'version' => $this->version,
            'release_date' => Carbon::instance($this->release_date, 'UTC')->toISOString(),
            'release_notes' => $this->release_notes,
            'dependencies' => $this->deps_string
        ];

        return $res;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPackageUrl(): ?string
    {
        return $this->package_url;
    }

    public function setPackageUrl(string $package_url): self
    {
        $this->package_url = $package_url;

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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getReleaseDate(): ?Carbon
    {
        return new Carbon($this->release_date);
    }

    public function setReleaseDate(Carbon $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }

    public function getReleaseNotes(): ?string
    {
        return $this->release_notes;
    }

    public function setReleaseNotes(string $release_notes): self
    {
        $this->release_notes = $release_notes;

        return $this;
    }

    public function getDepsString(): ?array
    {
        return $this->deps_string;
    }

    public function setDepsString(?array $deps_string): self
    {
        $this->deps_string = $deps_string;

        return $this;
    }

    public function getIconUrl(): ?string
    {
        return $this->icon_url;
    }

    public function setIconUrl(?string $icon_url): self
    {
        $this->icon_url = $icon_url;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(string $license): self
    {
        $this->license = $license;

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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
