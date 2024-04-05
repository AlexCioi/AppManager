<?php

namespace App\Entity;

use App\Repository\EndpointSettingsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EndpointSettingsRepository::class)]
class EndpointSettings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $refreshInterval = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefreshInterval(): ?int
    {
        return $this->refreshInterval;
    }

    public function setRefreshInterval(int $refreshInterval): static
    {
        $this->refreshInterval = $refreshInterval;

        return $this;
    }
}
