<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnrSite
 *
 * @ORM\Table(name="anr_site")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnrSiteRepository")
 */
class AnrSite
{
    /**
     * @var string
     *
     * @ORM\Column(name="idsite", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomsite", type="string", length=64, nullable=true)
     */
    private $nomsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=16, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adressepostale", type="string", length=255, nullable=true)
     */
    private $adressepostale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batiment", type="string", length=8, nullable=true)
     */
    private $batiment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boitepostale", type="string", length=16, nullable=true)
     */
    private $boitepostale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codepostal", type="string", length=8, nullable=true)
     */
    private $codepostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=32, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idorganisme", type="string", length=64, nullable=true)
     */
    private $idorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomorganisme", type="string", length=64, nullable=true)
     */
    private $nomorganisme;

    /**
     * Set idsite
     *
     * @param string $idsite
     * @return AnrSite
     */
    public function setIdsite($idsite)
    {
        $this->idsite = $idsite;

        return $this;
    }


    /**
     * Get idsite.
     *
     * @return string
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set nomsite.
     *
     * @param string|null $nomsite
     *
     * @return AnrSite
     */
    public function setNomsite($nomsite = null)
    {
        $this->nomsite = $nomsite;

        return $this;
    }

    /**
     * Get nomsite.
     *
     * @return string|null
     */
    public function getNomsite()
    {
        return $this->nomsite;
    }

    /**
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return AnrSite
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return string|null
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adressepostale.
     *
     * @param string|null $adressepostale
     *
     * @return AnrSite
     */
    public function setAdressepostale($adressepostale = null)
    {
        $this->adressepostale = $adressepostale;

        return $this;
    }

    /**
     * Get adressepostale.
     *
     * @return string|null
     */
    public function getAdressepostale()
    {
        return $this->adressepostale;
    }

    /**
     * Set batiment.
     *
     * @param string|null $batiment
     *
     * @return AnrSite
     */
    public function setBatiment($batiment = null)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment.
     *
     * @return string|null
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Set boitepostale.
     *
     * @param string|null $boitepostale
     *
     * @return AnrSite
     */
    public function setBoitepostale($boitepostale = null)
    {
        $this->boitepostale = $boitepostale;

        return $this;
    }

    /**
     * Get boitepostale.
     *
     * @return string|null
     */
    public function getBoitepostale()
    {
        return $this->boitepostale;
    }

    /**
     * Set codepostal.
     *
     * @param string|null $codepostal
     *
     * @return AnrSite
     */
    public function setCodepostal($codepostal = null)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal.
     *
     * @return string|null
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville.
     *
     * @param string|null $ville
     *
     * @return AnrSite
     */
    public function setVille($ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string|null
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set idorganisme.
     *
     * @param string|null $idorganisme
     *
     * @return AnrSite
     */
    public function setIdorganisme($idorganisme = null)
    {
        $this->idorganisme = $idorganisme;

        return $this;
    }

    /**
     * Get idorganisme.
     *
     * @return string|null
     */
    public function getIdorganisme()
    {
        return $this->idorganisme;
    }

    /**
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return AnrSite
     */
    public function setNomorganisme($nomorganisme = null)
    {
        $this->nomorganisme = $nomorganisme;

        return $this;
    }

    /**
     * Get nomorganisme.
     *
     * @return string|null
     */
    public function getNomorganisme()
    {
        return $this->nomorganisme;
    }
}
