<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnrOrganisme
 *
 * @ORM\Table(name="anr_organisme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnrOrganismeRepository")
 */
class AnrOrganisme
{
    /**
     * @var string
     *
     * @ORM\Column(name="idorganisme", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomabrege", type="string", length=16, nullable=true)
     */
    private $nomabrege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomcomplet", type="string", length=128, nullable=true)
     */
    private $nomcomplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeorganisme", type="string", length=4, nullable=true)
     */
    private $codeorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numucanss", type="string", length=8, nullable=true)
     */
    private $numucanss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeorganisme", type="string", length=4, nullable=true)
     */
    private $typeorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitesiege", type="string", length=64, nullable=true)
     */
    private $sitesiege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitesgeographiques", type="string", length=255, nullable=true)
     */
    private $sitesgeographiques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idcti", type="string", length=64, nullable=true)
     */
    private $idcti;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomcti", type="string", length=64, nullable=true)
     */
    private $nomcti;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codegdp", type="string", length=8, nullable=true)
     */
    private $codegdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomdomaine", type="string", length=64, nullable=true)
     */
    private $nomdomaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codecaisse", type="string", length=4, nullable=true)
     */
    private $codecaisse;


    /**
     * Set idorganisme
     *
     * @param string $idorganisme
     * @return AnrOrganisme
     */
    public function setIdorganisme($idorganisme)
    {
        $this->idorganisme = $idorganisme;

        return $this;
    }

    /**
     * Get idorganisme.
     *
     * @return string
     */
    public function getIdorganisme()
    {
        return $this->idorganisme;
    }

    /**
     * Set nomabrege.
     *
     * @param string|null $nomabrege
     *
     * @return AnrOrganisme
     */
    public function setNomabrege($nomabrege = null)
    {
        $this->nomabrege = $nomabrege;

        return $this;
    }

    /**
     * Get nomabrege.
     *
     * @return string|null
     */
    public function getNomabrege()
    {
        return $this->nomabrege;
    }

    /**
     * Set nomcomplet.
     *
     * @param string|null $nomcomplet
     *
     * @return AnrOrganisme
     */
    public function setNomcomplet($nomcomplet = null)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get nomcomplet.
     *
     * @return string|null
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set codeorganisme.
     *
     * @param string|null $codeorganisme
     *
     * @return AnrOrganisme
     */
    public function setCodeorganisme($codeorganisme = null)
    {
        $this->codeorganisme = $codeorganisme;

        return $this;
    }

    /**
     * Get codeorganisme.
     *
     * @return string|null
     */
    public function getCodeorganisme()
    {
        return $this->codeorganisme;
    }

    /**
     * Set numucanss.
     *
     * @param string|null $numucanss
     *
     * @return AnrOrganisme
     */
    public function setNumucanss($numucanss = null)
    {
        $this->numucanss = $numucanss;

        return $this;
    }

    /**
     * Get numucanss.
     *
     * @return string|null
     */
    public function getNumucanss()
    {
        return $this->numucanss;
    }

    /**
     * Set typeorganisme.
     *
     * @param string|null $typeorganisme
     *
     * @return AnrOrganisme
     */
    public function setTypeorganisme($typeorganisme = null)
    {
        $this->typeorganisme = $typeorganisme;

        return $this;
    }

    /**
     * Get typeorganisme.
     *
     * @return string|null
     */
    public function getTypeorganisme()
    {
        return $this->typeorganisme;
    }

    /**
     * Set sitesiege.
     *
     * @param string|null $sitesiege
     *
     * @return AnrOrganisme
     */
    public function setSitesiege($sitesiege = null)
    {
        $this->sitesiege = $sitesiege;

        return $this;
    }

    /**
     * Get sitesiege.
     *
     * @return string|null
     */
    public function getSitesiege()
    {
        return $this->sitesiege;
    }

    /**
     * Set sitesgeographiques.
     *
     * @param string|null $sitesgeographiques
     *
     * @return AnrOrganisme
     */
    public function setSitesgeographiques($sitesgeographiques = null)
    {
        $this->sitesgeographiques = $sitesgeographiques;

        return $this;
    }

    /**
     * Get sitesgeographiques.
     *
     * @return string|null
     */
    public function getSitesgeographiques()
    {
        return $this->sitesgeographiques;
    }

    /**
     * Set idcti.
     *
     * @param string|null $idcti
     *
     * @return AnrOrganisme
     */
    public function setIdcti($idcti = null)
    {
        $this->idcti = $idcti;

        return $this;
    }

    /**
     * Get idcti.
     *
     * @return string|null
     */
    public function getIdcti()
    {
        return $this->idcti;
    }

    /**
     * Set nomcti.
     *
     * @param string|null $nomcti
     *
     * @return AnrOrganisme
     */
    public function setNomcti($nomcti = null)
    {
        $this->nomcti = $nomcti;

        return $this;
    }

    /**
     * Get nomcti.
     *
     * @return string|null
     */
    public function getNomcti()
    {
        return $this->nomcti;
    }

    /**
     * Set codegdp.
     *
     * @param string|null $codegdp
     *
     * @return AnrOrganisme
     */
    public function setCodegdp($codegdp = null)
    {
        $this->codegdp = $codegdp;

        return $this;
    }

    /**
     * Get codegdp.
     *
     * @return string|null
     */
    public function getCodegdp()
    {
        return $this->codegdp;
    }

    /**
     * Set nomdomaine.
     *
     * @param string|null $nomdomaine
     *
     * @return AnrOrganisme
     */
    public function setNomdomaine($nomdomaine = null)
    {
        $this->nomdomaine = $nomdomaine;

        return $this;
    }

    /**
     * Get nomdomaine.
     *
     * @return string|null
     */
    public function getNomdomaine()
    {
        return $this->nomdomaine;
    }

    /**
     * Set codecaisse.
     *
     * @param string|null $codecaisse
     *
     * @return AnrOrganisme
     */
    public function setCodecaisse($codecaisse = null)
    {
        $this->codecaisse = $codecaisse;

        return $this;
    }

    /**
     * Get codecaisse.
     *
     * @return string|null
     */
    public function getCodecaisse()
    {
        return $this->codecaisse;
    }
}
