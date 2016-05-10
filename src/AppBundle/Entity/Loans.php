<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loans
 *
 * @ORM\Table(name="loans")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LoansRepository")
 */
class Loans
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="availableForInvestments", type="float")
     */
    private $availableForInvestments;

    /**
     * @var array
     *
     * @ORM\Column(name="investments", type="array")
     */
    private $investments;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Loans
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set availableForInvestments
     *
     * @param float $availableForInvestments
     * @return Loans
     */
    public function setAvailableForInvestments($availableForInvestments)
    {
        $this->availableForInvestments = $availableForInvestments;

        return $this;
    }

    /**
     * Get availableForInvestments
     *
     * @return float 
     */
    public function getAvailableForInvestments()
    {
        return $this->availableForInvestments;
    }

    /**
     * Set investments
     *
     * @param array $investments
     * @return Loans
     */
    public function setInvestments($investments)
    {
        $this->investments = $investments;

        return $this;
    }

    /**
     * Get investments
     *
     * @return array 
     */
    public function getInvestments()
    {
        return $this->investments;
    }
}
