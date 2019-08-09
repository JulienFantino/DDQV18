<?php

namespace AppBundle\Entity;

/**
 * DdqRepartition
 *
 * @ORM\Table(name="ddq_repartition")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqRepartitionRepository")
 */
class DdqRepartition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_repartition_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="nbjours", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbjours;

    /**
     * @var int
     *
     * @ORM\Column(name="nbdemiesjournees", type="integer", nullable=false)
     */
    private $nbdemiesjournees;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get nbjours.
     *
     * @return float
     */
    public function getNbjours()
    {
        return $this->nbjours;
    }

    /**
     * Set nbjours.
     *
     * @param float $nbjours
     *
     * @return DdqRepartition
     */
    public function setNbjours($nbjours)
    {
        $this->nbjours = $nbjours;

        return $this;
    }

    /**
     * Get nbdemiesjournees.
     *
     * @return int
     */
    public function getNbdemiesjournees()
    {
        return $this->nbdemiesjournees;
    }

    /**
     * Set nbdemiesjournees.
     *
     * @param int $nbdemiesjournees
     *
     * @return DdqRepartition
     */
    public function setNbdemiesjournees($nbdemiesjournees)
    {
        $this->nbdemiesjournees = $nbdemiesjournees;

        return $this;
    }
}
