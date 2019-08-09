<?php

namespace AppBundle\Entity;

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
     * @ORM\Column(name="nbheures", type="string", length=8, nullable=true)
     */
    private $nbheures;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horairecontractuel", type="string", length=8, nullable=true)
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
     * Get tempspartiel.
     *
     * @return bool|null
     */
    public function getTempspartiel()
    {
        return $this->tempspartiel;
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
     * Get nbheures.
     *
     * @return string|null
     */
    public function getNbheures()
    {
        return $this->nbheures;
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
     * Get horairecontractuel.
     *
     * @return string|null
     */
    public function getHorairecontractuel()
    {
        return $this->horairecontractuel;
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
}
