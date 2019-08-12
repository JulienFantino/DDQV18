<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqQuestionnaireTp
 *
 * @ORM\Table(name="ddq_questionnaire_tp", indexes={@ORM\Index(name="IDX_817DE129C80EDDAD", columns={"id_agent"}), @ORM\Index(name="IDX_817DE129DD124DBA", columns={"id_ddq_contrat"}), @ORM\Index(name="IDX_817DE129A303A0ED", columns={"id_ddq_repartition"}), @ORM\Index(name="IDX_817DE1296EEE99F", columns={"id_ddq_horaire"}), @ORM\Index(name="IDX_817DE1291194E3AE", columns={"id_ddq_campagne"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqQuestionnaireTpRepository")
 */
class DdqQuestionnaireTp
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_questionnaire_tp_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32, nullable=false)
     */
    private $libelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateenfant1", type="date", nullable=true)
     */
    private $dateenfant1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateenfant2", type="date", nullable=true)
     */
    private $dateenfant2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateenfant3", type="date", nullable=true)
     */
    private $dateenfant3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateenfant4", type="date", nullable=true)
     */
    private $dateenfant4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif", type="string", length=255, nullable=true, options={"comment"="motif"})
     */
    private $motif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lundim", type="boolean", nullable=true)
     */
    private $lundim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lundi", type="boolean", nullable=true)
     */
    private $lundi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mardi", type="boolean", nullable=true)
     */
    private $mardi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mercredi", type="boolean", nullable=true)
     */
    private $mercredi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="jeudi", type="boolean", nullable=true)
     */
    private $jeudi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vendredi", type="boolean", nullable=true)
     */
    private $vendredi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lundiam", type="boolean", nullable=true)
     */
    private $lundiam;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mardim", type="boolean", nullable=true)
     */
    private $mardim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mardiam", type="boolean", nullable=true)
     */
    private $mardiam;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mercredim", type="boolean", nullable=true)
     */
    private $mercredim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mercrediam", type="boolean", nullable=true)
     */
    private $mercrediam;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="jeudim", type="boolean", nullable=true)
     */
    private $jeudim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="jeudiam", type="boolean", nullable=true)
     */
    private $jeudiam;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vendredim", type="boolean", nullable=true)
     */
    private $vendredim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vendrediam", type="boolean", nullable=true)
     */
    private $vendrediam;

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
     * @var \AppBundle\Entity\DdqContrat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqContrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_contrat", referencedColumnName="id")
     * })
     */
    private $idDdqContrat;

    /**
     * @var \AppBundle\Entity\DdqRepartition
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqRepartition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_repartition", referencedColumnName="id")
     * })
     */
    private $idDdqRepartition;

    /**
     * @var \AppBundle\Entity\DdqHoraire
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqHoraire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_horaire", referencedColumnName="id")
     * })
     */
    private $idDdqHoraire;

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
     * @return DdqQuestionnaireTp
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
     * Set dateenfant1.
     *
     * @param \DateTime|null $dateenfant1
     *
     * @return DdqQuestionnaireTp
     */
    public function setDateenfant1($dateenfant1 = null)
    {
        $this->dateenfant1 = $dateenfant1;

        return $this;
    }

    /**
     * Get dateenfant1.
     *
     * @return \DateTime|null
     */
    public function getDateenfant1()
    {
        return $this->dateenfant1;
    }

    /**
     * Set dateenfant2.
     *
     * @param \DateTime|null $dateenfant2
     *
     * @return DdqQuestionnaireTp
     */
    public function setDateenfant2($dateenfant2 = null)
    {
        $this->dateenfant2 = $dateenfant2;

        return $this;
    }

    /**
     * Get dateenfant2.
     *
     * @return \DateTime|null
     */
    public function getDateenfant2()
    {
        return $this->dateenfant2;
    }

    /**
     * Set dateenfant3.
     *
     * @param \DateTime|null $dateenfant3
     *
     * @return DdqQuestionnaireTp
     */
    public function setDateenfant3($dateenfant3 = null)
    {
        $this->dateenfant3 = $dateenfant3;

        return $this;
    }

    /**
     * Get dateenfant3.
     *
     * @return \DateTime|null
     */
    public function getDateenfant3()
    {
        return $this->dateenfant3;
    }

    /**
     * Set dateenfant4.
     *
     * @param \DateTime|null $dateenfant4
     *
     * @return DdqQuestionnaireTp
     */
    public function setDateenfant4($dateenfant4 = null)
    {
        $this->dateenfant4 = $dateenfant4;

        return $this;
    }

    /**
     * Get dateenfant4.
     *
     * @return \DateTime|null
     */
    public function getDateenfant4()
    {
        return $this->dateenfant4;
    }

    /**
     * Set motif.
     *
     * @param string|null $motif
     *
     * @return DdqQuestionnaireTp
     */
    public function setMotif($motif = null)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif.
     *
     * @return string|null
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set lundim.
     *
     * @param bool|null $lundim
     *
     * @return DdqQuestionnaireTp
     */
    public function setLundim($lundim = null)
    {
        $this->lundim = $lundim;

        return $this;
    }

    /**
     * Get lundim.
     *
     * @return bool|null
     */
    public function getLundim()
    {
        return $this->lundim;
    }

    /**
     * Set lundi.
     *
     * @param bool|null $lundi
     *
     * @return DdqQuestionnaireTp
     */
    public function setLundi($lundi = null)
    {
        $this->lundi = $lundi;

        return $this;
    }

    /**
     * Get lundi.
     *
     * @return bool|null
     */
    public function getLundi()
    {
        return $this->lundi;
    }

    /**
     * Set mardi.
     *
     * @param bool|null $mardi
     *
     * @return DdqQuestionnaireTp
     */
    public function setMardi($mardi = null)
    {
        $this->mardi = $mardi;

        return $this;
    }

    /**
     * Get mardi.
     *
     * @return bool|null
     */
    public function getMardi()
    {
        return $this->mardi;
    }

    /**
     * Set mercredi.
     *
     * @param bool|null $mercredi
     *
     * @return DdqQuestionnaireTp
     */
    public function setMercredi($mercredi = null)
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    /**
     * Get mercredi.
     *
     * @return bool|null
     */
    public function getMercredi()
    {
        return $this->mercredi;
    }

    /**
     * Set jeudi.
     *
     * @param bool|null $jeudi
     *
     * @return DdqQuestionnaireTp
     */
    public function setJeudi($jeudi = null)
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    /**
     * Get jeudi.
     *
     * @return bool|null
     */
    public function getJeudi()
    {
        return $this->jeudi;
    }

    /**
     * Set vendredi.
     *
     * @param bool|null $vendredi
     *
     * @return DdqQuestionnaireTp
     */
    public function setVendredi($vendredi = null)
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    /**
     * Get vendredi.
     *
     * @return bool|null
     */
    public function getVendredi()
    {
        return $this->vendredi;
    }

    /**
     * Set lundiam.
     *
     * @param bool|null $lundiam
     *
     * @return DdqQuestionnaireTp
     */
    public function setLundiam($lundiam = null)
    {
        $this->lundiam = $lundiam;

        return $this;
    }

    /**
     * Get lundiam.
     *
     * @return bool|null
     */
    public function getLundiam()
    {
        return $this->lundiam;
    }

    /**
     * Set mardim.
     *
     * @param bool|null $mardim
     *
     * @return DdqQuestionnaireTp
     */
    public function setMardim($mardim = null)
    {
        $this->mardim = $mardim;

        return $this;
    }

    /**
     * Get mardim.
     *
     * @return bool|null
     */
    public function getMardim()
    {
        return $this->mardim;
    }

    /**
     * Set mardiam.
     *
     * @param bool|null $mardiam
     *
     * @return DdqQuestionnaireTp
     */
    public function setMardiam($mardiam = null)
    {
        $this->mardiam = $mardiam;

        return $this;
    }

    /**
     * Get mardiam.
     *
     * @return bool|null
     */
    public function getMardiam()
    {
        return $this->mardiam;
    }

    /**
     * Set mercredim.
     *
     * @param bool|null $mercredim
     *
     * @return DdqQuestionnaireTp
     */
    public function setMercredim($mercredim = null)
    {
        $this->mercredim = $mercredim;

        return $this;
    }

    /**
     * Get mercredim.
     *
     * @return bool|null
     */
    public function getMercredim()
    {
        return $this->mercredim;
    }

    /**
     * Set mercrediam.
     *
     * @param bool|null $mercrediam
     *
     * @return DdqQuestionnaireTp
     */
    public function setMercrediam($mercrediam = null)
    {
        $this->mercrediam = $mercrediam;

        return $this;
    }

    /**
     * Get mercrediam.
     *
     * @return bool|null
     */
    public function getMercrediam()
    {
        return $this->mercrediam;
    }

    /**
     * Set jeudim.
     *
     * @param bool|null $jeudim
     *
     * @return DdqQuestionnaireTp
     */
    public function setJeudim($jeudim = null)
    {
        $this->jeudim = $jeudim;

        return $this;
    }

    /**
     * Get jeudim.
     *
     * @return bool|null
     */
    public function getJeudim()
    {
        return $this->jeudim;
    }

    /**
     * Set jeudiam.
     *
     * @param bool|null $jeudiam
     *
     * @return DdqQuestionnaireTp
     */
    public function setJeudiam($jeudiam = null)
    {
        $this->jeudiam = $jeudiam;

        return $this;
    }

    /**
     * Get jeudiam.
     *
     * @return bool|null
     */
    public function getJeudiam()
    {
        return $this->jeudiam;
    }

    /**
     * Set vendredim.
     *
     * @param bool|null $vendredim
     *
     * @return DdqQuestionnaireTp
     */
    public function setVendredim($vendredim = null)
    {
        $this->vendredim = $vendredim;

        return $this;
    }

    /**
     * Get vendredim.
     *
     * @return bool|null
     */
    public function getVendredim()
    {
        return $this->vendredim;
    }

    /**
     * Set vendrediam.
     *
     * @param bool|null $vendrediam
     *
     * @return DdqQuestionnaireTp
     */
    public function setVendrediam($vendrediam = null)
    {
        $this->vendrediam = $vendrediam;

        return $this;
    }

    /**
     * Get vendrediam.
     *
     * @return bool|null
     */
    public function getVendrediam()
    {
        return $this->vendrediam;
    }

    /**
     * Set datemodif.
     *
     * @param \DateTime|null $datemodif
     *
     * @return DdqQuestionnaireTp
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
     * @return DdqQuestionnaireTp
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
     * @return DdqQuestionnaireTp
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
     * @return DdqQuestionnaireTp
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
     * Set idDdqContrat.
     *
     * @param \AppBundle\Entity\DdqContrat|null $idDdqContrat
     *
     * @return DdqQuestionnaireTp
     */
    public function setIdDdqContrat(\AppBundle\Entity\DdqContrat $idDdqContrat = null)
    {
        $this->idDdqContrat = $idDdqContrat;

        return $this;
    }

    /**
     * Get idDdqContrat.
     *
     * @return \AppBundle\Entity\DdqContrat|null
     */
    public function getIdDdqContrat()
    {
        return $this->idDdqContrat;
    }

    /**
     * Set idDdqRepartition.
     *
     * @param \AppBundle\Entity\DdqRepartition|null $idDdqRepartition
     *
     * @return DdqQuestionnaireTp
     */
    public function setIdDdqRepartition(\AppBundle\Entity\DdqRepartition $idDdqRepartition = null)
    {
        $this->idDdqRepartition = $idDdqRepartition;

        return $this;
    }

    /**
     * Get idDdqRepartition.
     *
     * @return \AppBundle\Entity\DdqRepartition|null
     */
    public function getIdDdqRepartition()
    {
        return $this->idDdqRepartition;
    }

    /**
     * Set idDdqHoraire.
     *
     * @param \AppBundle\Entity\DdqHoraire|null $idDdqHoraire
     *
     * @return DdqQuestionnaireTp
     */
    public function setIdDdqHoraire(\AppBundle\Entity\DdqHoraire $idDdqHoraire = null)
    {
        $this->idDdqHoraire = $idDdqHoraire;

        return $this;
    }

    /**
     * Get idDdqHoraire.
     *
     * @return \AppBundle\Entity\DdqHoraire|null
     */
    public function getIdDdqHoraire()
    {
        return $this->idDdqHoraire;
    }

    /**
     * Set idDdqCampagne.
     *
     * @param \AppBundle\Entity\DdqCampagne|null $idDdqCampagne
     *
     * @return DdqQuestionnaireTp
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
