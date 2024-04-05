<?php

namespace App\Entity;

use App\Repository\EndpointRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EndpointRepository::class)]
class Endpoint
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $route = null;

    #[ORM\ManyToOne(inversedBy: 'endpoints')]
    private ?App $app = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(string $route): static
    {
        $this->route = $route;

        return $this;
    }

    public function getApp(): ?App
    {
        return $this->app;
    }

    public function setApp(?App $app): static
    {
        $this->app = $app;

        return $this;
    }
}
