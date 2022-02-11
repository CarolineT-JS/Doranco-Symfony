<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DossierMedicalRepository::class)
 */
class DossierMedical
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ordonnance;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Rdv[]
     */
    public function getCompteRendu(): Collection
    {
        return $this->compte_rendu;
    }

    public function getOrdonnance(): ?string
    {
        return $this->ordonnance;
    }

    public function setOrdonnance(?string $ordonnance): self
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }
}
