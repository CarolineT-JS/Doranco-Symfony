<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RdvRepository::class)
 */
class Rdv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="rdvs")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=DossierMedical::class, inversedBy="compte_rendu")
     */
    private $dossierMedical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $compte_rendu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
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

    public function getDossierMedical(): ?DossierMedical
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(?DossierMedical $dossierMedical): self
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }

    public function getCompteRendu(): ?string
    {
        return $this->compte_rendu;
    }

    public function setCompteRendu(string $compte_rendu): self
    {
        $this->compte_rendu = $compte_rendu;

        return $this;
    }
}
