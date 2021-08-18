<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqCampagne
 *
 * @ORM\Table(name="ddq_campagne", uniqueConstraints={@ORM\UniqueConstraint(name="libelle_unique", columns={"libelle"})}, indexes={@ORM\Index(name="IDX_325596DC8C85E234", columns={"id_ddq_categorie"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqCampagneRepository")
 */
class DdqCampagne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_campagne_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32, nullable=false)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=32, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="syndicat", type="string", length=32, nullable=true)
     */
    private $syndicat;
    /**
     * @var boolean
     *
     * @ORM\Column(name="journee", type="boolean", nullable=true)
     */
    private $journee;
    /**
     * @var boolean
     *
     * @ORM\Column(name="demijournee", type="boolean", nullable=true)
     */
    private $demijournee;
    /**
     * @var boolean
     *
     * @ORM\Column(name="heure", type="boolean", nullable=true)
     */
    private $heure;


    /**
     * @var \AppBundle\Entity\DdqCategorie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_categorie", referencedColumnName="id")
     * })
     */
    private $idDdqCategorie;


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
     * @return DdqCampagne
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
     * Set datedebut.
     *
     * @param \DateTime $datedebut
     *
     * @return DdqCampagne
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut.
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin.
     *
     * @param \DateTime $datefin
     *
     * @return DdqCampagne
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin.
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set statut.
     *
     * @param string $statut
     *
     * @return DdqCampagne
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
     * Set idDdqCategorie.
     *
     * @param \AppBundle\Entity\DdqCategorie|null $idDdqCategorie
     *
     * @return DdqCampagne
     */
    public function setIdDdqCategorie(\AppBundle\Entity\DdqCategorie $idDdqCategorie = null)
    {
        $this->idDdqCategorie = $idDdqCategorie;

        return $this;
    }

    /**
     * Get idDdqCategorie.
     *
     * @return \AppBundle\Entity\DdqCategorie|null
     */
    public function getIdDdqCategorie()
    {
        return $this->idDdqCategorie;
    }

    /**
     * Get syndicat
     * @return string
     */
    public function getSyndicat()
    {
        return $this->syndicat;
    }

    /**
     * Set syndicat
     *
     * @param string $syndicat
     */
    public function setSyndicat($syndicat)
    {
        $this->syndicat = $syndicat;
    }

    /**
     * @return bool
     */
    public function getJournee()
    {
        return $this->journee;
    }

    /**
     * @param bool $journee
     */
    public function setJournee($journee)
    {
        $this->journee = $journee;
    }

    /**
     * @return bool
     */
    public function getDemijournee()
    {
        return $this->demijournee;
    }

    /**
     * @param bool $demijournee
     */
    public function setDemijournee($demijournee)
    {
        $this->demijournee = $demijournee;
    }

    /**
     * @return bool
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param bool $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

}
