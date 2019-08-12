<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entite
 *
 * @ORM\Table(name="entite", indexes={@ORM\Index(name="IDX_1A2918275D3AF914", columns={"id_organisme"}), @ORM\Index(name="IDX_1A291827E26315E6", columns={"id_site"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntiteRepository")
 */
class Entite
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="entite_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomentcomplet", type="string", length=64, nullable=true)
     */
    private $nomentcomplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomentabrege", type="string", length=32, nullable=true)
     */
    private $nomentabrege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sigleent", type="string", length=64, nullable=true)
     */
    private $sigleent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direction", type="string", length=64, nullable=true)
     */
    private $direction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="string", length=128, nullable=true)
     */
    private $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomorganisme", type="string", length=64, nullable=true)
     */
    private $nomorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=16, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idresponsable", type="string", length=64, nullable=true)
     */
    private $idresponsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomresponsable", type="string", length=64, nullable=true)
     */
    private $nomresponsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact", type="string", length=64, nullable=true)
     */
    private $contact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomcontact", type="string", length=64, nullable=true)
     */
    private $nomcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rattachement", type="string", length=64, nullable=true)
     */
    private $rattachement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheminphoto", type="string", length=128, nullable=true)
     */
    private $cheminphoto;

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
     * @var \AppBundle\Entity\Site
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site", referencedColumnName="id")
     * })
     */
    private $idSite;


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
     * Set nomentcomplet.
     *
     * @param string|null $nomentcomplet
     *
     * @return Entite
     */
    public function setNomentcomplet($nomentcomplet = null)
    {
        $this->nomentcomplet = $nomentcomplet;

        return $this;
    }

    /**
     * Get nomentcomplet.
     *
     * @return string|null
     */
    public function getNomentcomplet()
    {
        return $this->nomentcomplet;
    }

    /**
     * Set nomentabrege.
     *
     * @param string|null $nomentabrege
     *
     * @return Entite
     */
    public function setNomentabrege($nomentabrege = null)
    {
        $this->nomentabrege = $nomentabrege;

        return $this;
    }

    /**
     * Get nomentabrege.
     *
     * @return string|null
     */
    public function getNomentabrege()
    {
        return $this->nomentabrege;
    }

    /**
     * Set sigleent.
     *
     * @param string|null $sigleent
     *
     * @return Entite
     */
    public function setSigleent($sigleent = null)
    {
        $this->sigleent = $sigleent;

        return $this;
    }

    /**
     * Get sigleent.
     *
     * @return string|null
     */
    public function getSigleent()
    {
        return $this->sigleent;
    }

    /**
     * Set direction.
     *
     * @param string|null $direction
     *
     * @return Entite
     */
    public function setDirection($direction = null)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction.
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set parent.
     *
     * @param string|null $parent
     *
     * @return Entite
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return Entite
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
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return Entite
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
     * Set idresponsable.
     *
     * @param string|null $idresponsable
     *
     * @return Entite
     */
    public function setIdresponsable($idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }

    /**
     * Get idresponsable.
     *
     * @return string|null
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Set nomresponsable.
     *
     * @param string|null $nomresponsable
     *
     * @return Entite
     */
    public function setNomresponsable($nomresponsable = null)
    {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    /**
     * Get nomresponsable.
     *
     * @return string|null
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set contact.
     *
     * @param string|null $contact
     *
     * @return Entite
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact.
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set nomcontact.
     *
     * @param string|null $nomcontact
     *
     * @return Entite
     */
    public function setNomcontact($nomcontact = null)
    {
        $this->nomcontact = $nomcontact;

        return $this;
    }

    /**
     * Get nomcontact.
     *
     * @return string|null
     */
    public function getNomcontact()
    {
        return $this->nomcontact;
    }

    /**
     * Set rattachement.
     *
     * @param string|null $rattachement
     *
     * @return Entite
     */
    public function setRattachement($rattachement = null)
    {
        $this->rattachement = $rattachement;

        return $this;
    }

    /**
     * Get rattachement.
     *
     * @return string|null
     */
    public function getRattachement()
    {
        return $this->rattachement;
    }

    /**
     * Set cheminphoto.
     *
     * @param string|null $cheminphoto
     *
     * @return Entite
     */
    public function setCheminphoto($cheminphoto = null)
    {
        $this->cheminphoto = $cheminphoto;

        return $this;
    }

    /**
     * Get cheminphoto.
     *
     * @return string|null
     */
    public function getCheminphoto()
    {
        return $this->cheminphoto;
    }

    /**
     * Set idOrganisme.
     *
     * @param \AppBundle\Entity\Organisme|null $idOrganisme
     *
     * @return Entite
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

    /**
     * Set idSite.
     *
     * @param \AppBundle\Entity\Site|null $idSite
     *
     * @return Entite
     */
    public function setIdSite(\AppBundle\Entity\Site $idSite = null)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite.
     *
     * @return \AppBundle\Entity\Site|null
     */
    public function getIdSite()
    {
        return $this->idSite;
    }
}
