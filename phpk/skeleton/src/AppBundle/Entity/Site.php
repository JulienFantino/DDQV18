<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site", indexes={@ORM\Index(name="IDX_694309E45D3AF914", columns={"id_organisme"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SiteRepository")
 */
class Site
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="site_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="ville", type="string", length=64, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomorganisme", type="string", length=64, nullable=true)
     */
    private $nomorganisme;

    /**
     * @var \AppBundle\Entity\Organisme
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Organisme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisme", referencedColumnName="id")
     * })
     */
    private $idOrganisme;


    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomsite.
     *
     * @param string|null $nomsite
     *
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return Site
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

    /**
     * Set idOrganisme.
     *
     * @param \AppBundle\Entity\Organisme|null $idOrganisme
     *
     * @return Site
     */
    public function setIdOrganisme(\AppBundle\Entity\Organisme $idOrganisme = null)
    {
        $this->idOrganisme = $idOrganisme;

        return $this;
    }

    /**
     * Get idOrganisme.
     *
     * @return \AppBundle\Entity\Organisme|null
     */
    public function getIdOrganisme()
    {
        return $this->idOrganisme;
    }
}
