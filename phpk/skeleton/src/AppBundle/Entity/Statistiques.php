<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiques
 *
 * @ORM\Table(name="statistiques")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatistiquesRepository")
 */
class Statistiques
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
     * @var string
     *
     * @ORM\Column(name="Service", type="string", length=255)
     */
    private $service;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="present", type="float")
     */
    private $present;

    /**
     * @var float
     *
     * @ORM\Column(name="journee", type="float")
     */
    private $journee;

    /**
     * @var float
     *
     * @ORM\Column(name="demiJournee", type="float")
     */
    private $demiJournee;

    /**
     * @var float
     *
     * @ORM\Column(name="heure", type="float")
     */
    private $heure;

    /**
     * @var float
     *
     * @ORM\Column(name="tempsPartiel", type="float")
     */
    private $tempsPartiel;

    /**
     * @var float
     *
     * @ORM\Column(name="abs", type="float")
     */
    private $abs;

    /**
     * @var string
     *
     * @ORM\Column(name="id_campagne", type="string", length=255)
     */
    private $idCampagne;


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
     * Set service.
     *
     * @param string $service
     *
     * @return Statistiques
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service.
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set total.
     *
     * @param float $total
     *
     * @return Statistiques
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set present.
     *
     * @param float $present
     *
     * @return Statistiques
     */
    public function setPresent($present)
    {
        $this->present = $present;

        return $this;
    }

    /**
     * Get present.
     *
     * @return float
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Set journee.
     *
     * @param float $journee
     *
     * @return Statistiques
     */
    public function setJournee($journee)
    {
        $this->journee = $journee;

        return $this;
    }

    /**
     * Get journee.
     *
     * @return float
     */
    public function getJournee()
    {
        return $this->journee;
    }

    /**
     * Set demiJournee.
     *
     * @param float $demiJournee
     *
     * @return Statistiques
     */
    public function setDemiJournee($demiJournee)
    {
        $this->demiJournee = $demiJournee;

        return $this;
    }

    /**
     * Get demiJournee.
     *
     * @return float
     */
    public function getDemiJournee()
    {
        return $this->demiJournee;
    }

    /**
     * Set heure.
     *
     * @param float $heure
     *
     * @return Statistiques
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure.
     *
     * @return float
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set tempsPartiel.
     *
     * @param float $tempsPartiel
     *
     * @return Statistiques
     */
    public function setTempsPartiel($tempsPartiel)
    {
        $this->tempsPartiel = $tempsPartiel;

        return $this;
    }

    /**
     * Get tempsPartiel.
     *
     * @return float
     */
    public function getTempsPartiel()
    {
        return $this->tempsPartiel;
    }

    /**
     * Set abs.
     *
     * @param float $abs
     *
     * @return Statistiques
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;

        return $this;
    }

    /**
     * Get abs.
     *
     * @return float
     */
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * Set idCampagne.
     *
     * @param string $idCampagne
     *
     * @return Statistiques
     */
    public function setIdCampagne($idCampagne)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne.
     *
     * @return string
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }

    // AJOUT DE LA RELATION ONE TOO MANY AVEC DDQRECENSEMENT.
    //


}
