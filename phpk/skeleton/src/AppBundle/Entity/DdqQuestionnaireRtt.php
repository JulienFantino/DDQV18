<?php

namespace AppBundle\Entity;

/**
 * DdqQuestionnaireRtt
 *
 * @ORM\Table(name="ddq_questionnaire_rtt", indexes={@ORM\Index(name="IDX_A7B80693C80EDDAD", columns={"id_agent"}), @ORM\Index(name="IDX_A7B80693DD124DBA", columns={"id_ddq_contrat"}), @ORM\Index(name="IDX_A7B806931194E3AE", columns={"id_ddq_campagne"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqQuestionnaireRttRepository")
 */
class DdqQuestionnaireRtt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_questionnaire_rtt_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="formule", type="boolean", nullable=true)
     */
    private $formule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formule1j", type="string", length=16, nullable=true)
     */
    private $formule1j;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="formule1s", type="boolean", nullable=true)
     */
    private $formule1s;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reprisetp", type="boolean", nullable=true)
     */
    private $reprisetp;

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
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return DdqQuestionnaireRtt
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get formule.
     *
     * @return bool|null
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set formule.
     *
     * @param bool|null $formule
     *
     * @return DdqQuestionnaireRtt
     */
    public function setFormule($formule = null)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule1j.
     *
     * @return string|null
     */
    public function getFormule1j()
    {
        return $this->formule1j;
    }

    /**
     * Set formule1j.
     *
     * @param string|null $formule1j
     *
     * @return DdqQuestionnaireRtt
     */
    public function setFormule1j($formule1j = null)
    {
        $this->formule1j = $formule1j;

        return $this;
    }

    /**
     * Get formule1s.
     *
     * @return bool|null
     */
    public function getFormule1s()
    {
        return $this->formule1s;
    }

    /**
     * Set formule1s.
     *
     * @param bool|null $formule1s
     *
     * @return DdqQuestionnaireRtt
     */
    public function setFormule1s($formule1s = null)
    {
        $this->formule1s = $formule1s;

        return $this;
    }

    /**
     * Get reprisetp.
     *
     * @return bool|null
     */
    public function getReprisetp()
    {
        return $this->reprisetp;
    }

    /**
     * Set reprisetp.
     *
     * @param bool|null $reprisetp
     *
     * @return DdqQuestionnaireRtt
     */
    public function setReprisetp($reprisetp = null)
    {
        $this->reprisetp = $reprisetp;

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
     * Set datemodif.
     *
     * @param \DateTime|null $datemodif
     *
     * @return DdqQuestionnaireRtt
     */
    public function setDatemodif($datemodif = null)
    {
        $this->datemodif = $datemodif;

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
     * Set signature.
     *
     * @param bool|null $signature
     *
     * @return DdqQuestionnaireRtt
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;

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
     * Set statut.
     *
     * @param string $statut
     *
     * @return DdqQuestionnaireRtt
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

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
     * Set idAgent.
     *
     * @param \AppBundle\Entity\Agent|null $idAgent
     *
     * @return DdqQuestionnaireRtt
     */
    public function setIdAgent(\AppBundle\Entity\Agent $idAgent = null)
    {
        $this->idAgent = $idAgent;

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
     * Set idDdqContrat.
     *
     * @param \AppBundle\Entity\DdqContrat|null $idDdqContrat
     *
     * @return DdqQuestionnaireRtt
     */
    public function setIdDdqContrat(\AppBundle\Entity\DdqContrat $idDdqContrat = null)
    {
        $this->idDdqContrat = $idDdqContrat;

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

    /**
     * Set idDdqCampagne.
     *
     * @param \AppBundle\Entity\DdqCampagne|null $idDdqCampagne
     *
     * @return DdqQuestionnaireRtt
     */
    public function setIdDdqCampagne(\AppBundle\Entity\DdqCampagne $idDdqCampagne = null)
    {
        $this->idDdqCampagne = $idDdqCampagne;

        return $this;
    }
}
