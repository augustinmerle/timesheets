<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contract", mappedBy="customer")
     */
    private $Contract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refaral;

    public function __construct()
    {
        $this->Contract = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Contract[]
     */
    public function getContract(): Collection
    {
        return $this->Contract;
    }

    public function addContract(Contract $contract): self
    {
        if (!$this->Contract->contains($contract)) {
            $this->Contract[] = $contract;
            $contract->setCustomer($this);
        }

        return $this;
    }

    public function removeContract(Contract $contract): self
    {
        if ($this->Contract->contains($contract)) {
            $this->Contract->removeElement($contract);
            // set the owning side to null (unless already changed)
            if ($contract->getCustomer() === $this) {
                $contract->setCustomer(null);
            }
        }

        return $this;
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

    public function getRefaral(): ?string
    {
        return $this->refaral;
    }

    public function setRefaral(?string $refaral): self
    {
        $this->refaral = $refaral;

        return $this;
    }
}
