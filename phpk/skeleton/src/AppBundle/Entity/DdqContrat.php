<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqContrat
 *
 * @ORM\Table(name="ddq_contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqContratRepository")
 */
class DdqContrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_contrat_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tempspartiel", type="boolean", nullable=true)
     */
    private $tempspartiel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nbheures", type="string", length=50, nullable=true)
     */
    private $nbheures;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horairecontractuel", type="string", length=50, nullable=true)
     */
    private $horairecontractuel;


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
     * Set tempspartiel.
     *
     * @param bool|null $tempspartiel
     *
     * @return DdqContrat
     */
    public function setTempspartiel($tempspartiel = null)
    {
        $this->tempspartiel = $tempspartiel;

        return $this;
    }

    /**
     * Get tempspartiel.
     *
     * @return bool|null
     */
    public function getTempspartiel()
    {
        return $this->tempspartiel;
    }

    /**
     * Set nbheures.
     *
     * @param string|null $nbheures
     *
     * @return DdqContrat
     */
    public function setNbheures($nbheures = null)
    {
        $this->nbheures = $nbheures;

        return $this;
    }

    /**
     * Get nbheures.
     *
     * @return string|null
     */
    public function getNbheures()
    {
        return $this->nbheures;
    }

    /**
     * Set horairecontractuel.
     *
     * @param string|null $horairecontractuel
     *
     * @return DdqContrat
     */
    public function setHorairecontractuel($horairecontractuel = null)
    {
        $this->horairecontractuel = $horairecontractuel;

        return $this;
    }

    /**
     * Get horairecontractuel.
     *
     * @return string|null
     */
    public function getHorairecontractuel()
    {
        return $this->horairecontractuel;
    }
///AJOUT POUR LA REPARTITION

    /**
     * @var float
     *
     * @ORM\Column(name="nbjours", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbjours;

    /**
     * @var int
     *
     * @ORM\Column(name="nbdemiesjournees", type="integer", nullable=true)
     */
    private $nbdemiesjournees;


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
     * Get nbjours.
     *
     * @return float
     */
    public function getNbjours()
    {
        return $this->nbjours;
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

    /**
     * Get nbdemiesjournees.
     *
     * @return int
     */
    public function getNbdemiesjournees()
    {
        return $this->nbdemiesjournees;
    }

    //AJOUT POUR L'HORRAIRE

    /**
     * @var string|null
     *
     * @ORM\Column(name="horrairecontrat", type="string", length=50, nullable=true)
     */
    private $horairecontrat;

    public function sethorairecontrat($horairecontrat)
    {
        $this->horairecontrat = $horairecontrat;

        return $this;
    }

    public function gethorairecontrat()
    {
        return $this->horairecontrat;
    }

}
