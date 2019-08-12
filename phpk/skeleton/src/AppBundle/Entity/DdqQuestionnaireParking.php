<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqQuestionnaireParking
 *
 * @ORM\Table(name="ddq_questionnaire_parking", indexes={@ORM\Index(name="IDX_26DFBAC1C80EDDAD", columns={"id_agent"}), @ORM\Index(name="IDX_26DFBAC11194E3AE", columns={"id_ddq_campagne"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqQuestionnaireParkingRepository")
 */
class DdqQuestionnaireParking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_questionnaire_parking_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32, nullable=false)
     */
    private $libelle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enfants", type="boolean", nullable=true)
     */
    private $enfants;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="handicap", type="boolean", nullable=true)
     */
    private $handicap;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="emploi", type="boolean", nullable=true)
     */
    private $emploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfant1", type="string", length=64, nullable=true)
     */
    private $enfant1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenaissance1", type="date", nullable=true)
     */
    private $datenaissance1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfant2", type="string", length=64, nullable=true)
     */
    private $enfant2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenaissance2", type="date", nullable=true)
     */
    private $datenaissance2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfant3", type="string", length=64, nullable=true)
     */
    private $enfant3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenaissance3", type="date", nullable=true)
     */
    private $datenaissance3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfant4", type="string", length=64, nullable=true)
     */
    private $enfant4;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenaissance4", type="date", nullable=true)
     */
    private $datenaissance4;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datemodif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="signature", type="boolean", nullable=true)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=32, nullable=false)
     */
    private $statut;

    /**
     * @var \AppBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agent", referencedColumnName="id")
     * })
     */
    private $idAgent;

    /**
     * @var \AppBundle\Entity\DdqCampagne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqCampagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_campagne", referencedColumnName="id")
     * })
     */
    private $idDdqCampagne;


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
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return DdqQuestionnaireParking
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set enfants.
     *
     * @param bool|null $enfants
     *
     * @return DdqQuestionnaireParking
     */
    public function setEnfants($enfants = null)
    {
        $this->enfants = $enfants;

        return $this;
    }

    /**
     * Get enfants.
     *
     * @return bool|null
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    /**
     * Set handicap.
     *
     * @param bool|null $handicap
     *
     * @return DdqQuestionnaireParking
     */
    public function setHandicap($handicap = null)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap.
     *
     * @return bool|null
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set emploi.
     *
     * @param bool|null $emploi
     *
     * @return DdqQuestionnaireParking
     */
    public function setEmploi($emploi = null)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi.
     *
     * @return bool|null
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * Set adresse.
     *
     * @param string|null $adresse
     *
     * @return DdqQuestionnaireParking
     */
    public function setAdresse($adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string|null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set enfant1.
     *
     * @param string|null $enfant1
     *
     * @return DdqQuestionnaireParking
     */
    public function setEnfant1($enfant1 = null)
    {
        $this->enfant1 = $enfant1;

        return $this;
    }

    /**
     * Get enfant1.
     *
     * @return string|null
     */
    public function getEnfant1()
    {
        return $this->enfant1;
    }

    /**
     * Set datenaissance1.
     *
     * @param \DateTime|null $datenaissance1
     *
     * @return DdqQuestionnaireParking
     */
    public function setDatenaissance1($datenaissance1 = null)
    {
        $this->datenaissance1 = $datenaissance1;

        return $this;
    }

    /**
     * Get datenaissance1.
     *
     * @return \DateTime|null
     */
    public function getDatenaissance1()
    {
        return $this->datenaissance1;
    }

    /**
     * Set enfant2.
     *
     * @param string|null $enfant2
     *
     * @return DdqQuestionnaireParking
     */
    public function setEnfant2($enfant2 = null)
    {
        $this->enfant2 = $enfant2;

        return $this;
    }

    /**
     * Get enfant2.
     *
     * @return string|null
     */
    public function getEnfant2()
    {
        return $this->enfant2;
    }

    /**
     * Set datenaissance2.
     *
     * @param \DateTime|null $datenaissance2
     *
     * @return DdqQuestionnaireParking
     */
    public function setDatenaissance2($datenaissance2 = null)
    {
        $this->datenaissance2 = $datenaissance2;

        return $this;
    }

    /**
     * Get datenaissance2.
     *
     * @return \DateTime|null
     */
    public function getDatenaissance2()
    {
        return $this->datenaissance2;
    }

    /**
     * Set enfant3.
     *
     * @param string|null $enfant3
     *
     * @return DdqQuestionnaireParking
     */
    public function setEnfant3($enfant3 = null)
    {
        $this->enfant3 = $enfant3;

        return $this;
    }

    /**
     * Get enfant3.
     *
     * @return string|null
     */
    public function getEnfant3()
    {
        return $this->enfant3;
    }

    /**
     * Set datenaissance3.
     *
     * @param \DateTime|null $datenaissance3
     *
     * @return DdqQuestionnaireParking
     */
    public function setDatenaissance3($datenaissance3 = null)
    {
        $this->datenaissance3 = $datenaissance3;

        return $this;
    }

    /**
     * Get datenaissance3.
     *
     * @return \DateTime|null
     */
    public function getDatenaissance3()
    {
        return $this->datenaissance3;
    }

    /**
     * Set enfant4.
     *
     * @param string|null $enfant4
     *
     * @return DdqQuestionnaireParking
     */
    public function setEnfant4($enfant4 = null)
    {
        $this->enfant4 = $enfant4;

        return $this;
    }

    /**
     * Get enfant4.
     *
     * @return string|null
     */
    public function getEnfant4()
    {
        return $this->enfant4;
    }

    /**
     * Set datenaissance4.
     *
     * @param \DateTime|null $datenaissance4
     *
     * @return DdqQuestionnaireParking
     */
    public function setDatenaissance4($datenaissance4 = null)
    {
        $this->datenaissance4 = $datenaissance4;

        return $this;
    }

    /**
     * Get datenaissance4.
     *
     * @return \DateTime|null
     */
    public function getDatenaissance4()
    {
        return $this->datenaissance4;
    }

    /**
     * Set datemodif.
     *
     * @param \DateTime|null $datemodif
     *
     * @return DdqQuestionnaireParking
     */
    public function setDatemodif($datemodif = null)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif.
     *
     * @return \DateTime|null
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set signature.
     *
     * @param bool|null $signature
     *
     * @return DdqQuestionnaireParking
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature.
     *
     * @return bool|null
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set statut.
     *
     * @param string $statut
     *
     * @return DdqQuestionnaireParking
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut.
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set idAgent.
     *
     * @param \AppBundle\Entity\Agent|null $idAgent
     *
     * @return DdqQuestionnaireParking
     */
    public function setIdAgent(\AppBundle\Entity\Agent $idAgent = null)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    /**
     * Get idAgent.
     *
     * @return \AppBundle\Entity\Agent|null
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set idDdqCampagne.
     *
     * @param \AppBundle\Entity\DdqCampagne|null $idDdqCampagne
     *
     * @return DdqQuestionnaireParking
     */
    public function setIdDdqCampagne(\AppBundle\Entity\DdqCampagne $idDdqCampagne = null)
    {
        $this->idDdqCampagne = $idDdqCampagne;

        return $this;
    }

    /**
     * Get idDdqCampagne.
     *
     * @return \AppBundle\Entity\DdqCampagne|null
     */
    public function getIdDdqCampagne()
    {
        return $this->idDdqCampagne;
    }
}
