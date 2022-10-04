<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\Column(length: 150)]
   
    private ?string $nce = null;

    #[ORM\Column(length: 150)]
    private ?string $titre = null;

    public function getNce(): ?string
    {
        return $this->nce;
    }

    public function setNce(string $nce): self
    {
        $this->titre = $nce;

        return $this;
    }

    

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
