<?php

namespace AppBundle\Entity;

/**
 * AnrEntite
 *
 * @ORM\Table(name="anr_entite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnrEntiteRepository")
 */
class AnrEntite
{
    /**
     * @var string
     *
     * @ORM\Column(name="identite", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $identite;

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
     * @var string|null
     *
     * @ORM\Column(name="idsite", type="string", length=64, nullable=true)
     */
    private $idsite;

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
     * @ORM\Column(name="rattachement", type="string", length=32, nullable=true)
     */
    private $rattachement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheminphoto", type="string", length=128, nullable=true)
     */
    private $cheminphoto;

    /**
     * Get identite.
     *
     * @return string
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * Set identite
     *
     * @param string $identite
     * @return AnrEntite
     */
    public function setIdentite($identite)
    {
        $this->identite = $identite;

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
     * Set nomentcomplet.
     *
     * @param string|null $nomentcomplet
     *
     * @return AnrEntite
     */
    public function setNomentcomplet($nomentcomplet = null)
    {
        $this->nomentcomplet = $nomentcomplet;

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
     * Set nomentabrege.
     *
     * @param string|null $nomentabrege
     *
     * @return AnrEntite
     */
    public function setNomentabrege($nomentabrege = null)
    {
        $this->nomentabrege = $nomentabrege;

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
     * Set sigleent.
     *
     * @param string|null $sigleent
     *
     * @return AnrEntite
     */
    public function setSigleent($sigleent = null)
    {
        $this->sigleent = $sigleent;

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
     * Set direction.
     *
     * @param string|null $direction
     *
     * @return AnrEntite
     */
    public function setDirection($direction = null)
    {
        $this->direction = $direction;

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
     * Set parent.
     *
     * @param string|null $parent
     *
     * @return AnrEntite
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;

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
     * Set idorganisme.
     *
     * @param string|null $idorganisme
     *
     * @return AnrEntite
     */
    public function setIdorganisme($idorganisme = null)
    {
        $this->idorganisme = $idorganisme;

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
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return AnrEntite
     */
    public function setNomorganisme($nomorganisme = null)
    {
        $this->nomorganisme = $nomorganisme;

        return $this;
    }

    /**
     * Get idsite.
     *
     * @return string|null
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set idsite.
     *
     * @param string|null $idsite
     *
     * @return AnrEntite
     */
    public function setIdsite($idsite = null)
    {
        $this->idsite = $idsite;

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
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return AnrEntite
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;

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
     * Set idresponsable.
     *
     * @param string|null $idresponsable
     *
     * @return AnrEntite
     */
    public function setIdresponsable($idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

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
     * Set nomresponsable.
     *
     * @param string|null $nomresponsable
     *
     * @return AnrEntite
     */
    public function setNomresponsable($nomresponsable = null)
    {
        $this->nomresponsable = $nomresponsable;

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
     * Set contact.
     *
     * @param string|null $contact
     *
     * @return AnrEntite
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

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
     * Set nomcontact.
     *
     * @param string|null $nomcontact
     *
     * @return AnrEntite
     */
    public function setNomcontact($nomcontact = null)
    {
        $this->nomcontact = $nomcontact;

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
     * Set rattachement.
     *
     * @param string|null $rattachement
     *
     * @return AnrEntite
     */
    public function setRattachement($rattachement = null)
    {
        $this->rattachement = $rattachement;

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
     * Set cheminphoto.
     *
     * @param string|null $cheminphoto
     *
     * @return AnrEntite
     */
    public function setCheminphoto($cheminphoto = null)
    {
        $this->cheminphoto = $cheminphoto;

        return $this;
    }
}
