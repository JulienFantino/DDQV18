<?php

namespace AppBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqQuestionnaireRrh
 *
 * @ORM\Table(name="ddq_questionnaire_rrh")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Entity\DdqQuestionnaireRrhRepository")
 */
class DdqQuestionnaireRrh
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
     * @ORM\Column(name="Statut", type="string", length=32)
     */
    private $statut;
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32)
     */
    private $libelle;
    /**
     * @var string
     *
     * @ORM\Column(name="Modification", type="string", length=64)
     */
    private $Modification;

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
     * @var \AppBundle\Entity\Entite
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entite", referencedColumnName="id")
     * })
     */
    private $idEntite;
    /**
     * Get id.
     *
     * @return int
     */
    /**
     * @var \AppBundle\Entity\DdqCampagne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqCampagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_campagne", referencedColumnName="id")
     * })
     */
    private $idDdqCampagne;
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set statut.
     *
     * @param string $statut
     *
     * @return DdqQuestionnaireRrh
     */
    public function setEtat($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut.
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Set etat.
     *
     * @param string $etat
     *
     * @return DdqQuestionnaireRrh
     */
    public function setlibelle($libelle)
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
     * Set Modification.
     *
     * @param string $Modification
     *
     * @return DdqQuestionnaireRrh
     */
    public function setModification($Modification)
    {
        $this->Modification = $Modification;

        return $this;
    }

    /**
     * Get Modification.
     *
     * @return string
     */
    public function getModification()
    {
        return $this->Modification;
    }

    /**
     * Set idAgent.
     *
     * @param \AppBundle\Entity\Agent|null $idAgent
     *
     * @return DdqQuestionnaireRrh
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
    public function setIdEntite(\AppBundle\Entity\Entite $idEntite = null)
    {
        $this->idEntite = $idEntite;

        return $this;
    }

    /**
     * Get idEntite.
     *
     * @return \AppBundle\Entity\Entite|null
     */
    public function getIdEntite()
    {
        return $this->idEntite;
    }
    /**
     * Set idDdqCampagne.
     *
     * @param \AppBundle\Entity\DdqCampagne|null $idDdqCampagne
     *
     * @return DdqQuestionnaireRrh
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
