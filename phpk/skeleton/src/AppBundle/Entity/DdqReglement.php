<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqReglement
 *
 * @ORM\Table(name="ddq_reglement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqReglementRepository")
 */
class DdqReglement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_reglement_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="min", type="string", length=8, nullable=false)
     */
    private $min;

    /**
     * @var string
     *
     * @ORM\Column(name="max", type="string", length=8, nullable=false)
     */
    private $max;


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
     * Set min.
     *
     * @param string $min
     *
     * @return DdqReglement
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min.
     *
     * @return string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max.
     *
     * @param string $max
     *
     * @return DdqReglement
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max.
     *
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }
}
