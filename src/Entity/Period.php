<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PeriodRepository")
 */
class Period
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract", inversedBy="periods")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Contract;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateStart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnd;

    /**
     * @ORM\Column(type="integer")
     */
    private $workedDay;

    /**
     * @ORM\Column(type="float")
     */
    private $periodExpense;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $periodSalary;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $periodchargePayload;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="periods")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContract(): ?Contract
    {
        return $this->Contract;
    }

    public function setContract(?Contract $Contract): self
    {
        $this->Contract = $Contract;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getWorkedDay(): ?int
    {
        return $this->workedDay;
    }

    public function setWorkedDay(int $workedDay): self
    {
        $this->workedDay = $workedDay;

        return $this;
    }

    public function getPeriodExpense(): ?float
    {
        return $this->periodExpense;
    }

    public function setPeriodExpense(float $periodExpense): self
    {
        $this->periodExpense = $periodExpense;

        return $this;
    }

    public function getPeriodSalary(): ?float
    {
        return $this->periodSalary;
    }

    public function setPeriodSalary(?float $periodSalary): self
    {
        $this->periodSalary = $periodSalary;

        return $this;
    }

    public function getPeriodchargePayload(): ?float
    {
        return $this->periodchargePayload;
    }

    public function setPeriodchargePayload(?float $periodchargePayload): self
    {
        $this->periodchargePayload = $periodchargePayload;

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
}
