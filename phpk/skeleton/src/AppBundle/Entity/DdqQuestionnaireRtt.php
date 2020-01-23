<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="commentaireValideurN1", type="string", length=255, nullable=true)
     */
    private $commentaireValideurN1;
    /**
     * @var string
     *
     * @ORM\Column(name="commentaireValideurN2", type="string", length=255, nullable=true)
     */
    private $commentaireValideurN2;

    /**
     * Set commentaireValideurN1.
     *
     * @param string $commentaireValideurN1
     *
     * @return DdqQuestionnaireRtt
     */
    public function setcommentaireValideurN1($commentaireValideurN1)
    {
        $this->commentaireValideurN1 = $commentaireValideurN1;

        return $this;
    }

    /**
     * Get CommentaireValideurN1.
     *
     * @return string
     */
    public function getCommentaireValideurN1()
    {
        return $this->commentaireValideurN1;
    }

    /**
     * Set commentaireValideurN2.
     *
     * @param string $commentaireValideurN2
     *
     * @return DdqQuestionnaireRtt
     */
    public function setcommentaireValideurN2($commentaireValideurN2)
    {
        $this->commentaireValideurN2 = $commentaireValideurN2;

        return $this;
    }

    /**
     * Get CommentaireValideurN2.
     *
     * @return string
     */
    public function getCommentaireValideurN2()
    {
        return $this->commentaireValideurN2;
    }
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
     * @return DdqQuestionnaireRtt
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
     * Get formule.
     *
     * @return bool|null
     */
    public function getFormule()
    {
        return $this->formule;
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
     * Get formule1j.
     *
     * @return string|null
     */
    public function getFormule1j()
    {
        return $this->formule1j;
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
     * Get formule1s.
     *
     * @return bool|null
     */
    public function getFormule1s()
    {
        return $this->formule1s;
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
     * Get reprisetp.
     *
     * @return bool|null
     */
    public function getReprisetp()
    {
        return $this->reprisetp;
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
     * @return DdqQuestionnaireRtt
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
     * @return DdqQuestionnaireRtt
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
     * @return DdqQuestionnaireRtt
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
     * @return DdqQuestionnaireRtt
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
